<?php

namespace NK\HintBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DocumentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pdf', FileType::class)
            ->add('category',  EntityType::class, array(
                'class'=> 'NKHintBundle:Category',
                'choice_label' => 'nomCategory',
                'required' => true))
            ->add('matiere',  EntityType::class, array(
                'class'=> 'NKHintBundle:Matiere',
                'choice_label' => function($matiere){
                    return $matiere->getNiveau()->getNomNiveau()."- ".$matiere->getNomMatiere();
                },
                'required' => true))
            ->add('save', SubmitType::class, array('label' => 'Envoyer'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NK\HintBundle\Entity\Document'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nk_hintbundle_document';
    }


}
