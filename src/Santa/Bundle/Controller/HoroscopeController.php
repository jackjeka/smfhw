<?php

namespace Santa\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Santa\Bundle\Entity;
use Symfony\Component\HttpFoundation\Request;

class HoroscopeController extends Controller
{
    public function newAction(Request $request){
            // create a task and give it some dummy data for this example
            $horoscope  = new Entity\Horoscope();
            $horoscope->setDay('tomorrow');
            $horoscope->setSign('sagittarius');
            $horoscope->setText('stars and planets bla-bla');

            $form = $this->createFormBuilder($horoscope)
                ->add('day', 'text')
                ->add('sign', 'text')
                ->add('save', 'submit', array('label' => 'Get your fortune cookie'))
                ->getForm();

            return $this->render('SantaBundle:Default:horoscope.html.twig', array(
                'form' => $form->createView(),
            ));
        }

//        return $this->render('SantaBundle:Default:horoscope.html.twig', array('day' => $day, 'sign' => $sign));

}
