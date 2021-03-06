<?php

namespace NK\HintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;
use NK\HintBundle\Entity\Document;
use NK\HintBundle\Form\DocumentType;

class DocumentController extends Controller
{
    public function coursexosAction($nomNiveau, $nomMatiere)
    {
    	$em= $this->getDoctrine()
                    ->getManager();
        $documents = $em->getRepository("NKHintBundle:Document")
                    	->obtenirDocumentsPourUneMatiere($nomMatiere, $nomNiveau);
        $niveau = $em->getRepository('NKHintBundle:Niveau')
                     ->findOneBy( array('nomNiveau' => $nomNiveau));
        return $this->render('NKHintBundle:Document:cours_exercices.html.twig',
        	array('documents' => $documents, 'niveau' => $niveau, 'nomMatiere' => $nomMatiere));
    }
    public function ajouterdocAction(Request $request)
    {
    	$em= $this->getDoctrine()
                    ->getManager();
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
       		$document = $form->getData();
       		$em->persist($document);
            $em->flush();
            $this->get('session')->getFlashBag()->add('message', 'Document ajouté avec succes');
        }	
    	return $this->render('NKHintBundle:Document:ajouter_document.html.twig',
    		array( 'form' => $form->createView() ));
    }
    public function afficherDocumentAction()
    {
        return $this->render('NKHintBundle:Document:viewer.html.twig');
    }
}