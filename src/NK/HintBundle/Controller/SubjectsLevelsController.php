<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NK\HintBundle\Entity\Niveau;


class SubjectsLevelsController extends Controller
{
    public function subjectsAction($idCycle,$idNiveau, $idMatiere)
    {	$array=null;
    	$em = $this->getDoctrine()
                ->getManager();
        if ($idCycle!=0 && $idNiveau==0 && $idMatiere==0) {

        	$cycle = $em->getRepository("NKHintBundle:Cycle")
                           		->find($idCycle);
            $listeNiveaux = $cycle->getNiveaux();
            $array = array('listeNiveaux' => $listeNiveaux);

        } else if ($idNiveau!=0 && $idCycle==0 && $idMatiere==0) {
        	$listeMatieres = $em->getRepository("NKHintBundle:Matiere")
                            ->obtenirListeMatieres($idNiveau);
           
            $array = array('listeMatieres' => $listeMatieres);
        } else if ($idMatiere!=0) {
       
        	$listeDocuments =$em->getRepository("NKHintBundle:Matiere")
                           		->find($idMatiere)
                           		->getDocuments();
            $array = array('listeDocuments' => $listeDocuments);
        }
        
        
    	
	   return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', 
            $array);
    }
}