<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // tbf_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tbf_homepage');
            }

            return array (  '_controller' => 'TBFBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tbf_homepage',);
        }

        // tbf_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'TBFBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'tbf_connexion',);
        }

        if (0 === strpos($pathinfo, '/projects')) {
            // tbf_projects
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'TBFBundle\\Controller\\ProjectsController::indexAction',  '_route' => 'tbf_projects',);
            }

            // tbf_projects_details
            if (0 === strpos($pathinfo, '/projects/details') && preg_match('#^/projects/details/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_projects_details')), array (  '_controller' => 'TBFBundle\\Controller\\ProjectsController::detailsAction',));
            }

            // tbf_projects_add
            if ($pathinfo === '/projects/add') {
                return array (  '_controller' => 'TBFBundle\\Controller\\ProjectsController::addAction',  '_route' => 'tbf_projects_add',);
            }

            // tbf_projects_modify
            if (0 === strpos($pathinfo, '/projects/modify') && preg_match('#^/projects/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_projects_modify')), array (  '_controller' => 'TBFBundle\\Controller\\ProjectsController::modifyAction',));
            }

            // tbf_projects_remove
            if (0 === strpos($pathinfo, '/projects/remove') && preg_match('#^/projects/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_projects_remove')), array (  '_controller' => 'TBFBundle\\Controller\\ProjectsController::removeAction',));
            }

        }

        // tbf_result
        if ($pathinfo === '/result') {
            return array (  '_controller' => 'TBFBundle\\Controller\\SearchController::resultAction',  '_route' => 'tbf_result',);
        }

        if (0 === strpos($pathinfo, '/skills')) {
            // tbf_skills_index
            if ($pathinfo === '/skills') {
                return array (  '_controller' => 'TBFBundle\\Controller\\SkillsController::indexAction',  '_route' => 'tbf_skills_index',);
            }

            // tbf_skills_add
            if ($pathinfo === '/skills/add') {
                return array (  '_controller' => 'TBFBundle\\Controller\\SkillsController::addAction',  '_route' => 'tbf_skills_add',);
            }

            // tbf_skills_modify
            if (0 === strpos($pathinfo, '/skills/modify') && preg_match('#^/skills/modify/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_skills_modify')), array (  '_controller' => 'TBFBundle\\Controller\\SkillsController::modifyAction',));
            }

            // tbf_skills_remove
            if (0 === strpos($pathinfo, '/skills/remove') && preg_match('#^/skills/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_skills_remove')), array (  '_controller' => 'TBFBundle\\Controller\\SkillsController::removeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // tbf_users
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'TBFBundle\\Controller\\usersController::indexAction',  '_route' => 'tbf_users',);
            }

            // tbf_users_details
            if (0 === strpos($pathinfo, '/users/details') && preg_match('#^/users/details/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_users_details')), array (  '_controller' => 'TBFBundle\\Controller\\usersController::detailsAction',));
            }

        }

        // tbf_search_result
        if (0 === strpos($pathinfo, '/result') && preg_match('#^/result(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tbf_search_result')), array (  '_controller' => 'TBFFrontBundle:Search:result',  'id' => 1,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
