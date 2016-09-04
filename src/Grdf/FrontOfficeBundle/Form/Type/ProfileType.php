<?php

namespace Grdf\FrontOfficeBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\ProfileFormType;

class ProfileType extends ProfileFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
            ->add('email', 'text', array(
                'label' => 'profile.fields.email',
                'translation_domain' => 'forms'
            ))
            /*->add('typeCompte', 'checkbox', array(
                'label' => 'profile.fields.typeCompte',
                'translation_domain' => 'forms'
            ))*/
            ->add('agence', 'text', array(
                'label' => 'profile.fields.agence',
                'translation_domain' => 'forms'
            ))
            ->add('territoire', 'text', array(
                'label' => 'profile.fields.territoire',
                'translation_domain' => 'forms'
            ))
            ->add('plainPassword', 'repeated', array(
                'first_options'  => array(
                    'label' => 'profile.fields.password_first',
                    'required' => false
                ),
                'second_options' => array(
                    'label' => 'profile.fields.password_second'
                ),
                'required' => false,
                'translation_domain' => 'forms',
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Account'),
            'data_class' => 'Grdf\MainBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'grdf_fos_user_profile';
    }
}