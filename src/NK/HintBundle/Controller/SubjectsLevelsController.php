<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NK\HintBundle\Entity\Niveau;


class SubjectsLevelsController extends Controller
{
    public function subjectsAction($nomNiveau, $idMatiere)
    {  
        $em = $this->getDoctrine()
                   ->getManager();

            $niveau = $em->getRepository("NKHintBundle:Niveau")
                         ->findOneBy(array('nomNiveau' => $nomNiveau));
             $nomNiveau=$niveau->getNomNiveau();
             $couleurNiveau=$niveau->getCouleurNiveau();
            $listeMatieres = $em->getRepository("NKHintBundle:Matiere")
                                ->obtenirListeMatieres($niveau->getId());  
            $array = array('listeMatieres' => $listeMatieres, 'nomNiveau' => $nomNiveau, 'couleurNiveau' => $couleurNiveau);

       return $this->render('NKHintBundle:subjects_levels:subjectsPerLevel.html.twig', $array);
    }
}