<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NK\HintBundle\Entity\Niveau;


class SubjectsLevelsController extends Controller
{
    public function subjectsAction($nomCycle,$nomNiveau, $idMatiere)
    {  
        $em = $this->getDoctrine()
                   ->getManager();
        if ($nomCycle != '0') 
        {
            $cycle = $em->getRepository("NKHintBundle:Cycle")
                        ->findOneBy( array('nomCycle' => $nomCycle));
            $listeNiveaux = $cycle->getNiveaux();
            $array = array('listeNiveaux' => $listeNiveaux, 'nomNiveau' => ' ', 'couleurNiveau' => '#eaeaea', 'nomCycle' => $nomCycle);
        } else if ($nomNiveau != '0') 
        {
            $niveau = $em->getRepository("NKHintBundle:Niveau")
                         ->findOneBy(array('nomNiveau' => $nomNiveau));
             $nomNiveau=$niveau->getNomNiveau();
             $couleurNiveau=$niveau->getCouleurNiveau();
            $listeMatieres = $em->getRepository("NKHintBundle:Matiere")
                                ->obtenirListeMatieres($niveau->getId());  
            $array = array('listeMatieres' => $listeMatieres, 'nomNiveau' => $nomNiveau, 'couleurNiveau' => $couleurNiveau, 'nomCycle' => ' ');
        }

       return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', $array);
    }
}