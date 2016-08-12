<?php
namespace AppBundle\Resources;

class Utility {
    public function validate_name($name) {
        $pattern = "/^[a-zA-Z ]{2,100}$/";
        if(preg_match($pattern, $name)) {
            return true;
        }
        return false;
    }
    public function getSqlIdsList($array) {
        $list="";
        if(count($array) > 0) {
            $list = $list.$array[0]['user_id'];
            for ($i=1; $i < count($array); $i++) {
                $elem = $array[$i];
                $list = $list.",".$elem['user_id'];
            }
        }
        return $list;
    }
    public function validate_user_id($user_id) {
        $pattern = "/^[0-9]{1,10}$/";
        if(preg_match($pattern, $user_id)) {
            return true;
        }
        return false;
    }

}
?>