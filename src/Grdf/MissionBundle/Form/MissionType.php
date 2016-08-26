<?php

namespace Grdf\MissionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MissionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('ville')
            ->add('adresse')
            ->add('descriptif')
            ->add('photo')
            ->add('contact')
            ->add('representantTerritorial')
            ->add('managerEnCharge')
            ->add('etat')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grdf\MissionBundle\Entity\Mission'
        ));
    }
}
