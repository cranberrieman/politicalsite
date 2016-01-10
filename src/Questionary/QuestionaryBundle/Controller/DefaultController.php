<?php

namespace Questionary\QuestionaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QuestionaryQuestionaryBundle:Default:index.html.twig');
    }
}
