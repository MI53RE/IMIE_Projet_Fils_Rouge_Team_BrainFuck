<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TBFBundle:Default:index.html.twig');
    }
}
