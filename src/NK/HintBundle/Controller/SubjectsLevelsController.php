<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NK\HintBundle\Entity\Niveau;


class SubjectsLevelsController extends Controller
{
    public function subjectsAction($niveauId, $matiereSelectionneeId)
    {
    	$em = $this->getDoctrine()->getManager();
    	$niveau = $em->getRepository("NKHintBundle:Niveau")->find($niveauId);
    	if (0===$matiereSelectionneeId) {
	    	    $listeMatieres = $niveau->getMatieres();
	        	return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', array('listeMatieres' => $listeMatieres, 'niveau' => $niveau));
    	} else{
    		$matiere = $em->getRepository("NKHintBundle:Matiere")->find($matiereSelectionneeId);
    		$listeDocuments = $matiere->getDocuments();
    		return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', array('listeDocuments' => $listeDocuments));
    	}
    	
        
    }
}