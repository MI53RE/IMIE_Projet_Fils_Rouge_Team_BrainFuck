<?php

 namespace TBFBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use TBFBundle\Entity\Users;
 use TBFBundle\Form\UsersType;
 use TBFBundle\Entity\UsersSkills;

 class usersController extends Controller {

     function indexAction(){
         $em = $this->getDoctrine()->getManager();
         $repo = $em->getRepository('TBFBundle:Users');
         $users = $repo->getUsers();
         return $this->render('TBFBundle:Users:index.html.twig', array("users" => $users));
     }
     function addAction(Request $req){
         $user = new Users();
         $form = $this->createForm(new UsersType(),$user,array(
             'action' => $this->generateUrl('tbf_users_add')));

         $form->handleRequest($req);

         if ($form->isValid()) {
             try {

                 $em = $this->getDoctrine()->getManager();
                 $skillsData = $form->get('skills')->getData('skills');
                 $userSkill = new UsersSkills();
                 $userSkill->setSkills($skillsData['skills']);
                 $userSkill->setLevel($skillsData['level']);
                 $userSkill->setUsers($user);
//                $user->addSkill();
//                     var_dump($skillsData['level']);
//                     die();
                 $em->persist($user);
                 $em->persist($userSkill);
                 $em->flush();
                 $req->getSession()->getFlashBag()->add('success', 'Utilisateur ajouté');
                 return $this->redirect($this->generateUrl('tbf_users_index'));
             }
             catch (\Doctrine\DBAL\DBALException $e) {
                 $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                     . PHP_EOL . $e->getMessage());
             }
         }

         return $this->render('TBFBundle:Users:add.html.twig', array(
             'form' => $form->createView()
         ));
     }

     function modifyAction (Users $user,Request $req)
     {

         $em = $this->getDoctrine()->getManager();

         $form = $this->createForm(new UsersType(), $user, array(
             'action' => $this->generateUrl('tbf_users_modify', array('id' => $user->getId()))
         ));

         $form->handleRequest($req);

         if ($form->isValid()) {
             try {
                 $em->flush();
                 $req->getSession()->getFlashBag()->add('success', 'Utilisateur modifier');
                 return $this->redirect($this->generateUrl('tbf_users_index'));
             } catch (\Doctrine\DBAL\DBALException $e) {
                 $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de l\'ajout :'
                     . PHP_EOL . $e->getMessage());
             }
         }
         return $this->render('TBFBundle:Users:add.html.twig', array(
             'form' => $form->createView(), 'user' => $user
         ));
     }

     function removeAction ($id, Request $req) {
         $em = $this->getDoctrine()->getManager();
         $repo = $em->getRepository('TBFBundle:Users');
         $userToRemove = $repo->findOneById($id);

         try {
             $em->remove($userToRemove);
             $em->flush();
             $req->getSession()->getFlashBag()->add('success', 'Utilisateur supprim�');
         } catch (\Doctrine\DBAL\DBALException $e) {
             $req->getSession()->getFlashBag()->add('danger', 'Erreur lors de la suppression :'
                 . PHP_EOL . $e->getMessage());
         }
         return $this->redirect($this->generateUrl('tbf_users'));
     }
 }