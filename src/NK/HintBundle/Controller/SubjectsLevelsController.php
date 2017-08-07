<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubjectsLevelsController extends Controller
{
    public function subjectsAction()
    {
        return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig');
    }
}