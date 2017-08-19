<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NK\HintBundle\Entity\Niveau;


class AsideController extends Controller
{
    public function asideDisplayAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $listeNiveaux = $em->getRepository("NKHintBundle:Niveau")
                        ->findAll();
         $listeCycles = $em->getRepository("NKHintBundle:Cycle")
                        ->obtenirListeCycles();
        return $this->render('NKHintBundle:subjects_levels:asideLevelsSubjects.html.twig', array('listeNiveaux' => $listeNiveaux, 'listeCycles' => $listeCycles));
    }
}