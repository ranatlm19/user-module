<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/listUsers')) {
            // app_main_getallusers
            if (rtrim($pathinfo, '/') === '/listUsers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_main_getallusers');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MainController::getAllUsers',  '_route' => 'app_main_getallusers',);
            }

            // app_main_paginatedusers
            if (preg_match('#^/listUsers/(?P<page_no>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_main_paginatedusers')), array (  '_controller' => 'AppBundle\\Controller\\MainController::paginatedUsers',));
            }

        }

        // app_main_addnewuser
        if (rtrim($pathinfo, '/') === '/addNewUser') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_main_addnewuser');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::addNewUser',  '_route' => 'app_main_addnewuser',);
        }

        if (0 === strpos($pathinfo, '/getReporting')) {
            // app_main_getreportingto
            if (rtrim($pathinfo, '/') === '/getReportingTo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_main_getreportingto');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MainController::getReportingTo',  '_route' => 'app_main_getreportingto',);
            }

            // app_main_getreportingfrom
            if (rtrim($pathinfo, '/') === '/getReportingFrom') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_main_getreportingfrom');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MainController::getReportingFrom',  '_route' => 'app_main_getreportingfrom',);
            }

        }

        // app_main_addnewrelationship
        if (rtrim($pathinfo, '/') === '/addNewRelationship') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_main_addnewrelationship');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::addNewRelationship',  '_route' => 'app_main_addnewrelationship',);
        }

        if (0 === strpos($pathinfo, '/searchNew')) {
            // app_main_searchnewreportingusers
            if (rtrim($pathinfo, '/') === '/searchNewReportingUsers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_main_searchnewreportingusers');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MainController::searchNewReportingUsers',  '_route' => 'app_main_searchnewreportingusers',);
            }

            // app_main_searchnewuserstoreport
            if (rtrim($pathinfo, '/') === '/searchNewUsersToReport') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_main_searchnewuserstoreport');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MainController::searchNewUsersToReport',  '_route' => 'app_main_searchnewuserstoreport',);
            }

        }

        // app_main_deleterelationship
        if (rtrim($pathinfo, '/') === '/deleteRelationship') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_main_deleterelationship');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::deleteRelationship',  '_route' => 'app_main_deleterelationship',);
        }

        // app_main_editrelationship
        if (rtrim($pathinfo, '/') === '/editRelationship') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_main_editrelationship');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::editRelationship',  '_route' => 'app_main_editrelationship',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
