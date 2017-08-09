<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NK\HintBundle\Entity\Niveau;


class HeaderController extends Controller
{
    public function headerAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$listeNiveaux = $em->getRepository("NKHintBundle:Niveau")->findAll();
        return $this->render('default/header.html.twig', array('listeNiveaux' => $listeNiveaux));
    }
}