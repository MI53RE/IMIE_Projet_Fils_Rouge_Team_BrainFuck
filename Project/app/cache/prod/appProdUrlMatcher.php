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

        // tbf_back_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tbf_back_homepage');
            }

            return array (  '_controller' => 'TBF\\BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tbf_back_homepage',);
        }

        // tbf_front_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tbf_front_homepage');
            }

            return array (  '_controller' => 'TBF\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tbf_front_homepage',);
        }

        // tbf_front_projects
        if ($pathinfo === '/projects') {
            return array (  '_controller' => 'TBF\\FrontBundle\\Controller\\ProjectsController::indexAction',  '_route' => 'tbf_front_projects',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
