<?php

namespace Santa\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($sign)
    {

        return $this->render('SantaBundle:Default:index.html.twig', array('sign' => $sign));
    }
}
