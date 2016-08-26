<?php

namespace Grdf\FrontOfficeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\RegistrationFormType;

class RegisterType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->remove('username')
            ->add('firstname', 'text', array(
                'label' => 'profile.fields.firstname',
                'translation_domain' => 'forms'
            ))
            ->add('lastname', 'text', array(
                'label' => 'profile.fields.lastname',
                'translation_domain' => 'forms'
            ))
            ->add('nni', 'text', array(
                'label' => 'profile.fields.nni',
                'translation_domain' => 'forms'
            ))
            ->add('phone', 'text', array(
                'label' => 'profile.fields.phone',
                'translation_domain' => 'forms'
            ))
            ->add('representantTerritorial', 'checkbox', array(
                'label' => 'profile.fields.representantTerritorial',
                'translation_domain' => 'forms'
            ))
            ->add('managerAgence', 'checkbox', array(
                'label' => 'profile.fields.managerAgence',
                'translation_domain' => 'forms'
            ))
            ->add('agence', 'text', array(
                'label' => 'profile.fields.agence',
                'translation_domain' => 'forms'
            ))
            ->add('territoire', 'text', array(
                'label' => 'profile.fields.territoire',
                'translation_domain' => 'forms'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grdf\MainBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'grdf_fos_user_register';
    }
}