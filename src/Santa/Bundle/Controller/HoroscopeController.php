<?php

namespace Santa\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Santa\Bundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HoroscopeController extends Controller
{
    public function newAction(Request $request)
    {
        $horoscope = new Entity\Horoscope();

        $form = $this->createFormBuilder($horoscope)
            ->setMethod('GET')
            ->add('day', 'choice', array('choices' => array('today', 'tomorrow')))
            ->add('sign', 'choice', array('choices' => array('gemini', 'scorpio', 'sagittarius', 'etc')))
            ->add('check', 'button', array('label' => 'Get your fortune cookie'))
            ->getForm();

        $form->handleRequest($request);

        return $this->render('SantaBundle:Default:horoscope.html.twig', array('form' => $form->createView()));
    }
}
