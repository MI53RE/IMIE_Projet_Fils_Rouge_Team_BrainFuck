<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function resultAction()
    {
        return $this->render("TBFBundle:Result:result.html.twig");
    }
}
