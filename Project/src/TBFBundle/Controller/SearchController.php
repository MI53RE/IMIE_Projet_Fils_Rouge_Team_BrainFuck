<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function resultAction()
    {
        $field = htmlentities($_GET['search']);
        
        $result = $this->getDoctrine()->getManager();
        
        $repo = $result->getRepository("TBFBundle:Projects");
        $projects = $repo->getProjectByIds($field);
        
        $repo = $result->getRepository("TBFBundle:Users");
        $users = $repo->getUsersByIds($field);
        
        $repo = $result->getRepository("TBFBundle:Skills");
        $skills = $repo->getSkillsByIds($field);
        
 //       return new \Symfony\Component\HttpFoundation\Response(var_dump($projects));
        return $this->render("TBFBundle:Search:result.html.twig", array(
            "projects" => $projects,
            "users" => $users,
            "skills" => $skills
        )); 
    }
    
    public function formAction(){
        
    }
}
