<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectsController extends Controller
{
    public function indexAction()
    {
    	$result = $this->getDoctrine()->getManager();
    	$repo = $result->getRepository('TBFBundle:Projects');
    	$projects = $repo->getProjects();
        return $this->render('TBFBundle:Projects:index.html.twig', 
        	array('projects' => $projects));
    }
    public function detailsAction($id)
    {
    	$result = $this->getDoctrine()->getManager();
    	$repo = $result->getRepository('TBFBundle:Projects');
    	$project = $repo->getProjectById($id);
        var_dump($project);
        return $this->render('TBFBundle:Projects:details.html.twig', 
        	array('project' => $project));
    }
    public function addAction()
    {
        return $this->render('TBFBundle:Projects:form.html.twig');
    }
}