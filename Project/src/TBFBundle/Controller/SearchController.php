<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function resultAction(Request $req)
    {
        $field = htmlentities($req->get('search'));
        
        $result = $this->getDoctrine()->getManager();

 //       return new \Symfony\Component\HttpFoundation\Response(var_dump($projects));
        return $this->render("TBFBundle:Search:result.html.twig", array(
            "projects" => $this->getRepo($field, "TBFBundle:Projects", "getProjectByName"),
            "users" => $this->getRepo($field, "TBFBundle:Users", "getUsersByName"),
            "skills" => $this->getRepo($field, "TBFBundle:Skills", "getSkillsByName")
        )); 
    }
    
    public function getRepo($field, $repo, $method){
        
        $result = $this->getDoctrine()->getManager();
        
        $reposit = $result->getRepository($repo);
        $class = $reposit->$method($field);
        
        return $class;
    }


    public function formAction(){
        
    }
}
