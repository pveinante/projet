<?php

namespace follow_the_rhythm\SymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtisteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomComplet','text',array('required'=>false))
            ->add('nomDeScene','text',array('required'=>false, 'label'=>'Nom de scène'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'follow_the_rhythm\SymfonyBundle\Entity\Artiste'
        ));
    }
}
