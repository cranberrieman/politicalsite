<?php

namespace Questionary\QuestionaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionaryController extends Controller
{
    public function indexAction()
    {
        return $this->render('QuestionaryQuestionaryBundle:Questionary:index.html.twig');
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $questionary = $em->getRepository('QuestionaryQuestionaryBundle:Questionary')->find($id);

        if (!$questionary) {
            throw $this->createNotFoundException('Unable to find Questionary.');
        }

        return $this->render('QuestionaryQuestionaryBundle:Questionary:show.html.twig', array(
            'questionary'      => $questionary,
        ));
    }
}
