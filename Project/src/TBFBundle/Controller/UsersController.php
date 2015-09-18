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
use TBFBundle\Entity\Users;

class usersController extends Controller {

    function indexAction(){
      /*  $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TBFBundle:Users');
        $users = $repo->getUsers();*/
        return $this->render('TBFBundle:Users:index.html.twig');/*, array("users" => $users));*/
    }
}