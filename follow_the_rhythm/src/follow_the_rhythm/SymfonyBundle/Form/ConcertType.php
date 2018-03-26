<?php

namespace follow_the_rhythm\SymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ConcertType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('lieu')
            ->add('description')
            ->add('dateConcert', DateType::class)
            ->add('artiste','entity', array('label'=>'Artistes Concernés',
                                     'class' => 'follow_the_rhythmSymfonyBundle:Artiste',
                                     'property' => 'nomDeScene',
                                     'multiple' => 'true',
                                     'expanded' => 'false'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'follow_the_rhythm\SymfonyBundle\Entity\Concert'
        ));
    }
}
