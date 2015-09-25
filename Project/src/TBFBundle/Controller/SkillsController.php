<?php
/**
 * Created by PhpStorm.
 * User: Savenhart
 * Date: 17/08/2015
 * Time: 16:41
 */

namespace TBFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TBFBundle\Entity\Skills;
use TBFBundle\Form\SkillsType;

class SkillsController extends Controller {

    function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TBFBundle:Skills');
        $skills = $repo->getSkills();
        return $this->render('TBFBundle:Skills:index.html.twig', array(
            "skills" => $skills
        ));
    }

    function addAction(Request $req){
        $skill = new Skills();
        $form = $this->createForm(new SkillsType(), $skill, array(
            'action' => $this->generateUrl('tbf_skills_add')
        ));

        $form->handleRequest($req);

        if ($form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($skill);
                $em->flush();
                $req->getSession()->getFlashBag()->add('success', 'Skill ajouté');
                return $this->redirect($this->generateUrl('tbf_skills_index'));
            }
            catch (\Doctrine\DBAL\DBALException $e) {
                $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                    . PHP_EOL . $e->getMessage());
            }
        }

        return $this->render('TBFBundle:Skills:add.html.twig', array(
            'form' => $form->createView()
        ));


    }
    public function removeAction($id, Request $req) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TBFBundle:Skills');
        $skillToRemove = $repo->findOneById($id);

        try {
            $em->remove($skillToRemove);
            $em->flush();
            $req->getSession()->getFlashBag()->add('success', 'Compétence supprimé');
        } catch (\Doctrine\DBAL\DBALException $e) {
            $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de la suppression :'
                . PHP_EOL . $e->getMessage());
        }
        return $this->redirect($this->generateUrl('tbf_skills_index'));
    }

    public function modifyAction(Skills $skill, Request $req)
    {

        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new SkillsType(), $skill, array(
            'action' => $this->generateUrl('tbf_skills_modify', array('id' => $skill->getId()))
        ));

        $form->handleRequest($req);

        if ($form->isValid()) {
            try {
                $em->flush();
                $req->getSession()->getFlashBag()->add('success', 'Competence modifier');
                return $this->redirect($this->generateUrl('tbf_skills_index'));
            } catch (\Doctrine\DBAL\DBALException $e) {
                $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                    . PHP_EOL . $e->getMessage());
            }
        }
        return $this->render('TBFBundle:Skills:add.html.twig', array(
            'form' => $form->createView(), 'skill' => $skill
        ));
    }
}