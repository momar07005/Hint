<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NK\HintBundle\Entity\Niveau;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

      public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listeNiveaux = $em->getRepository("NKHintBundle:Niveau")
                        ->findAll();
        return $this->render('default/index.html.twig', array('listeNiveaux' => $listeNiveaux));
    }
    
}
