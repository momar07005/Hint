<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NK\HintBundle\Entity\Niveau;


class SubjectsLevelsController extends Controller
{
    public function subjectsAction($idNiveau, $idMatiere)
    {
    	$em = $this->getDoctrine()
                ->getManager();
    	$listeMatieres = $em->getRepository("NKHintBundle:Matiere")
                            ->obtenirListeMatieres($idNiveau);
	   return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', 
            array(  'listeMatieres' => $listeMatieres, 
            ));
    }
}