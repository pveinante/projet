<?php

namespace follow_the_rhythm\SymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActualiteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre','text')
        
        ->add('artiste', 'collection', array (
                                              'type' => new ArtisteType(),
                                              'allow_add' => true,
                                              'prototype' => true,
                                              'allow_delete' => true,
                                              'by_reference' => true,
                                              'label' => 'Créer Artistes concernés'))
        ->add('concert','entity', array('required'=>false,'label'=>'Concert Concerné','empty_value'=>"Sélectionnez un concert",
                                      'class' => 'follow_the_rhythmSymfonyBundle:Concert',
                                      'property' => 'nom'))
        ->add('description','textarea')
       
        //->add('artiste', new ArtisteType()) //A Voir!! ne peut pas coexister avec ->add('artiste', 'entity'....
        ;
    }
    
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'follow_the_rhythm\SymfonyBundle\Entity\Actualite'
        ));
    }
}
