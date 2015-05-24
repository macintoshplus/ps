<?php

namespace JbNahan\PsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation as JMS;


class DefaultController extends Controller
{
	/**
     * Lists all Associate entities.
     *
     * @Route("/", name="default")
     * @#JMS\Secure("ROLE_USER")
     * @Method("GET")
     * @#Template()
     */
    public function indexAction($name)
    {
        return $this->render('JbNahanPsBundle:Default:index.html.twig', array('name' => $name));
    }
}
