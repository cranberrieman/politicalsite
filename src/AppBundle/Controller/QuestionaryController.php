<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionaryController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Questionary:index.html.twig');
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $questionary = $em->getRepository('AppBundle:Questionary')->find($id);

        if (!$questionary) {
            throw $this->createNotFoundException('Unable to find Questionary.');
        }

        return $this->render('AppBundle:Questionary:show.html.twig', array(
            'questionary'      => $questionary,
        ));
    }
}
