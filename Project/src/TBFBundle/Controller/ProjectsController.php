<?php

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TBFBundle\Entity\Projects;
use TBFBundle\Form\ProjectsType;

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
    public function addAction(Request $req){
        $project = new Projects();
        $form = $this->createForm(new ProjectsType(), $project, array(
            'action' => $this->generateUrl('tbf_projects_add')
        ));

        $form->handleRequest($req);

        if ($form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($project);
                $em->flush();
                $req->getSession()->getFlashBag()->add('success', 'Project added');
                return $this->redirect($this->generateUrl('tbf_projects_index'));
            }
            catch (\Doctrine\DBAL\DBALException $e) {
                $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                    . PHP_EOL . $e->getMessage());
            }
        }

        return $this->render('TBFBundle:Projects:form.html.twig', array(
            'form' => $form->createView()
        ));


    }
    public function removeAction($id, Request $req) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TBFBundle:Projects');
        $projectToRemove = $repo->findOneById($id);

        try {
            $em->remove($projectToRemove);
            $em->flush();
            $req->getSession()->getFlashBag()->add('success', 'Projet supprimé');
        } catch (\Doctrine\DBAL\DBALException $e) {
            $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de la suppression :'
                . PHP_EOL . $e->getMessage());
        }
        return $this->redirect($this->generateUrl('tbf_projects_index'));
    }

    public function modifyAction(Project $project, Request $req)
    {

        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new ProjectType(), $project, array(
            'action' => $this->generateUrl('tbf_projects_modify', array('id' => $project->getId()))
        ));

        $form->handleRequest($req);

        if ($form->isValid()) {
            try {
                $em->flush();
                $req->getSession()->getFlashBag()->add('success', 'Competence modifier');
                return $this->redirect($this->generateUrl('tbf_projects_index'));
            } catch (\Doctrine\DBAL\DBALException $e) {
                $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                    . PHP_EOL . $e->getMessage());
            }
        }
        return $this->render('TBFBundle:Projects:add.html.twig', array(
            'form' => $form->createView(), 'project' => $project
        ));
    }
}