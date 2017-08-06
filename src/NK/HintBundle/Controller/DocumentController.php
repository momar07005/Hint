<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocumentController extends Controller
{
    public function coursAction()
    {
        return $this->render('NKHintBundle:Document:cours.html.twig');
    }
    public function exercicesAction()
    {
        return $this->render('NKHintBundle:Document:exercices.html.twig');
    }
}