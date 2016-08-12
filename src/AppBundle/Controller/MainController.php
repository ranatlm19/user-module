<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\User;
use AppBundle\Entity\ReportingTo;
use AppBundle\Resources\Utility;

class MainController extends Controller {

	/**
     * @Route("/listUsers/")
     */
    public function getAllUsers(Request $request)
    {
        return $this->redirect('/listUsers/1');
    }

    /**
     * @Route("/listUsers/{page_no}")
     */
    public function paginatedUsers(Request $request, $page_no) {
        $util = new Utility;
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $all_users = $repository->findAll();
        if(!$util->validate_user_id($page_no)) {
            return $this->redirect('/listUsers/1');
        }
        $records_per_page = 5;
        $curr_page = (int) $page_no;
        $conn = $this->get('database_connection');
        $all_users = $conn->fetchAll("select * from User limit ".($records_per_page * ($curr_page-1)).", ".$records_per_page);
        if(count($all_users) == 0) {
            return $this->redirect('/listUsers/1');
        }

        return $this->render('listUsers.html.twig', array(
            'all_users' => $all_users,
            'page_no' => $curr_page
            ));
    }

    /**
     * @Route("/addNewUser/")
     */
    public function addNewUser(Request $request) {
        if($request->isXMLHttpRequest()) {
            $util = new Utility;
            $success = false;
            $added = false;
            $user_name = $request->request->get('user_name');
            if($util->validate_name($user_name)) {
                $newUser = new User();
                $newUser->setUserName($user_name);

                $em = $this->getDoctrine()->getManager();

                $em->persist($newUser);

                $em->flush();

                $added = $newUser->getUserId();
                $success = true;
            }
            return new JsonResponse(array('success' => $success, 'added' => $added));
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/getReportingTo/")
     */
    public function getReportingTo(Request $request) {
        $util = new Utility;
        $mainLogger = $this->get('logger');
        $logger = $this->get('monolog.logger.channel1');
        try {
            if($request->isXMLHttpRequest()) {
                $success = false;
                $user_id = $request->request->get('user_id');
                if($util->validate_user_id($user_id)) {
                    $conn = $this->get('database_connection');
                    $current_user_array = $conn->fetchAll('SELECT user_id, user_name FROM User where user_id='.$user_id);
                    $query = 'select user_id, user_name from User where user_id in (select reporting_to_id from ReportingTo where user_id='. $user_id .')';
                    $reporting_to_users_iter = $conn->fetchAll($query);
                    $reporting_to_users = $reporting_to_users_iter;

                    while(count($reporting_to_users_iter) > 0) {
                        $done_array = array();
                        $done_array = array_merge($reporting_to_users, $current_user_array);
                        $not_in_list = $util->getSqlIdsList($done_array);
                        $in_list = $util->getSqlIdsList($reporting_to_users_iter);
                        $query = 'select user_id, user_name from User where user_id in (select reporting_to_id from ReportingTo where user_id in ('. $in_list .') and reporting_to_id not in ('. $not_in_list .'))';
                        $reporting_to_users_iter = $conn->fetchAll($query);
                        $reporting_to_users = array_merge($reporting_to_users, $reporting_to_users_iter);
                    }
                    $success = true;
                    return new JsonResponse(array('success' => $success, 'users' => $reporting_to_users));
                }
                return new JsonResponse(array('success' => $success));
            }
        }
        catch(\Doctrine\ORM\ORMException $e) {
            $mainLogger->error($e->getTraceAsString());
            $logger->error($e->getMessage());
        }
        catch(\Exception $e) {
            $mainLogger->error($e->getTraceAsString());
            $logger->error($e->getMessage());
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/getReportingFrom/")
     */
    public function getReportingFrom(Request $request) {
        $util = new Utility;
        $mainLogger = $this->get('logger');
        $logger = $this->get('monolog.logger.channel1');
        try {
            if($request->isXMLHttpRequest()) {
                $success = false;
                $user_id = $request->request->get('user_id');
                if($util->validate_user_id($user_id)) {
                    $conn = $this->get('database_connection');
                    $current_user_array = $conn->fetchAll('SELECT user_id, user_name FROM User where user_id='.$user_id);
                    $query = 'select user_id, user_name from User where user_id in (select user_id from ReportingTo where reporting_to_id='. $user_id .')';
                    $reporting_from_users_iter = $conn->fetchAll($query);
                    $reporting_from_users = $reporting_from_users_iter;

                    while(count($reporting_from_users_iter) > 0) {
                        $done_array = array();
                        $done_array = array_merge($reporting_from_users, $current_user_array);
                        $not_in_list = $util->getSqlIdsList($done_array);
                        $in_list = $util->getSqlIdsList($reporting_from_users_iter);
                        $query = 'select user_id, user_name from User where user_id in (select user_id from ReportingTo where reporting_to_id in ('. $in_list .') and user_id not in ('. $not_in_list .'))';
                        $reporting_from_users_iter = $conn->fetchAll($query);
                        $reporting_from_users = array_merge($reporting_from_users, $reporting_from_users_iter);
                    }
                    $success = true;
                    return new JsonResponse(array('success' => $success, 'users' => $reporting_from_users));
                }
                return new JsonResponse(array('success' => $success));
            }
        }
        catch(\Doctrine\ORM\ORMException $e) {
            $mainLogger->error($e->getTraceAsString());
            $logger->error($e->getMessage());
        }
        catch(\Exception $e) {
            $mainLogger->error($e->getTraceAsString());
            $logger->error($e->getMessage());
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/addNewRelationship/")
     */
    public function addNewRelationship(Request $request) {
        if($request->isXMLHttpRequest()) {
            $util = new Utility;
            $success = false;
            $added = false;
            $user_id = $request->request->get('user_id');
            $report_to_id = $request->request->get('report_to_id');
            if($util->validate_user_id($user_id) && $util->validate_user_id($report_to_id)) {
                if($this->checkIfUserExists($user_id) && $this->checkIfUserExists($report_to_id)) {
                    $success = true;
                    $rel_added = false;

                    $newrel = new ReportingTo();
                    $newrel->setUserId($user_id);
                    $newrel->setReportingToId($report_to_id);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($newrel);
                    $em->flush();
                    $added = $newrel->getRelationId();
                    if($added > 0) {
                        if($this->checkCycle($user_id)) {
                            $rel_added = true;
                        }
                        else {
                            $em->remove($newrel);
                            $em->flush();
                        }
                    }
                }
            }
            return new JsonResponse(array('success' => $success, 'rel_added' => $rel_added));
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/searchNewReportingUsers/")
     */
    public function searchNewReportingUsers(Request $request) {
        if($request->isXMLHttpRequest()) {
            $util = new Utility;
            $user_id = $request->request->get('user_id');
            $search_text = $request->request->get('search_text');
            if($util->validate_user_id($user_id)) {
                $conn = $this->get('database_connection');
                $results = $conn->fetchAll("select user_id, user_name from User where ((user_id not in (select user_id from ReportingTo where reporting_to_id=".$user_id.")) and (user_name like '%".$search_text."%')) limit 5");
                return new JsonResponse(array('success' => true, 'results' => $results));
            }
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/searchNewUsersToReport/")
     */
    public function searchNewUsersToReport(Request $request) {
        if($request->isXMLHttpRequest()) {
            $util = new Utility;
            $user_id = $request->request->get('user_id');
            $search_text = $request->request->get('search_text');
            if($util->validate_user_id($user_id)) {
                $conn = $this->get('database_connection');
                $results = $conn->fetchAll("select user_id, user_name from User where ((user_id not in (select reporting_to_id from ReportingTo where user_id=".$user_id.")) and (user_name like '%".$search_text."%')) limit 5");
                return new JsonResponse(array('success' => true, 'results' => $results));
            }
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/deleteRelationship/")
     */
    public function deleteRelationship(Request $request) {
        if($request->isXMLHttpRequest()) {
            $util = new Utility;
            $user_id_1 = $request->request->get('user_id_1');
            $user_id_2 = $request->request->get('user_id_2');
            if($util->validate_user_id($user_id_1) && $util->validate_user_id($user_id_2)) {
                if($this->checkIfUserExists($user_id_1) && $this->checkIfUserExists($user_id_2)) {
                    $query = "delete from ReportingTo where ((user_id=".$user_id_1." and reporting_to_id=".$user_id_2.") or (user_id=".$user_id_2." and reporting_to_id=".$user_id_1."))";
                    $conn = $this->get('database_connection');
                    $result = $conn->executeQuery($query);
                    return new JsonResponse(array('success' => true, 'deleted' => true));
                }
            }
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * @Route("/editRelationship/")
     */
    public function editRelationship(Request $request) {
        if($request->isXMLHttpRequest()) {
            $edit = false;
            $success = true;
            $util = new Utility;
            $user_id = $request->request->get('user_id');
            $user_id_old = $request->request->get('user_id_old');
            $user_id_new = $request->request->get('user_id_new');
            if($util->validate_user_id($user_id) && $util->validate_user_id($user_id_old) && $util->validate_user_id($user_id_new)) {
                if($this->checkIfUserExists($user_id) && $this->checkIfUserExists($user_id_old) && $this->checkIfUserExists($user_id_new)) {
                    $conn = $this->get('database_connection');
                    $query = "select relation_id from ReportingTo where user_id=".$user_id." and reporting_to_id=".$user_id_old;
                    $result = $conn->executeQuery($query);
                    if(count($result)==1) {
                        $rel_id = $result[0]['relation_id'];
                        $query = "update ReportingTo set reporting_to_id=".$user_id_new." where relation_id=".$rel_id;
                        $result = $conn->executeQuery($query);
                        if($this->checkCycle($user_id)) {
                            $edit = true;
                        }
                        else {
                            $query = "update ReportingTo set reporting_to_id=".$user_id_old." where relation_id=".$rel_id;
                            $result = $conn->executeQuery($query);
                        }
                    }
                    else {
                        $query = "select relation_id from ReportingTo where user_id=".$user_id_old." and reporting_to_id=".$user_id;
                        $result = $conn->executeQuery($query);
                        if(count($result)==1) {
                            $rel_id = $result[0]['relation_id'];
                            $query = "update ReportingTo set user_id=".$user_id_new." where relation_id=".$rel_id;
                            $result = $conn->executeQuery($query);
                            if($this->checkCycle($user_id)) {
                                $edit = true;
                            }
                            else {
                                $query = "update ReportingTo set user_id=".$user_id_old." where relation_id=".$rel_id;
                                $result = $conn->executeQuery($query);
                            }
                        }
                        else {
                            $success=false;
                        }
                    }
                }
            }
            return new JsonResponse(array('success' => $success, 'edit' => $edit));
        }
        return new JsonResponse(array('success' => false));
    }

    /**
     * [checkIfUserExists Verifies if the given user_id exists in the database]
     * @param  [string] $user_id [id of the user]
     * @return [boolean]          [returns true if the user exists and false otherwise]
     */
    private function checkIfUserExists($user_id) {
        $conn = $this->get('database_connection');
        $query = "select * from User where user_id=".$user_id;
        $results = $conn->fetchAll($query);
        if(count($results)==1)
            return true;
        return false;
    }

    /**
     * [checkCycle Checks for any cycles in the graph of users]
     * @param  [string] $start_id [id of the starting user node]
     * @return [boolean]           [returns true if no cycle exists and false otherwise]
     */
    private function checkCycle($start_id) {
        $visited = array();
        $completed = array();

        return $this->DFS($start_id, $visited, $completed);
    }

    /**
     * [DFS Performs the Depth First Search Algorithm on the graph of users]
     * @param [string] $current_id []
     * @param [boolean array] $visited    [true for nodes which have been visited]
     * @param [boolean array] $completed  [true for nodes which have been covered completely]
     */
    private function DFS($current_id, & $visited, & $completed) {
        if(array_key_exists($current_id, $completed))
            return true;
        if(array_key_exists($current_id, $visited))
            return false;
        $visited[$current_id] = true;
        $conn = $this->get('database_connection');
        $flag = true;
        $adjacent_users = $conn->fetchAll('SELECT reporting_to_id FROM ReportingTo where user_id='.$current_id);
        foreach ($adjacent_users as $user) {
            $next_id = $user['reporting_to_id'];
            $flag = $flag && $this->DFS($next_id, $visited, $completed);
            if(!$flag) {
                return false;
            }
        }
        $completed[$current_id] = true;
        return $flag;
    }
}
?>