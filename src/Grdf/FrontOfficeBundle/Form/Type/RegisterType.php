<?php

namespace Grdf\FrontOfficeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

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
            /*->add('typeCompte', 'checkbox', array(
                'label' => 'profile.fields.typeCompte',
                'translation_domain' => 'forms'
            ))*/
            /*->add('roles', ChoiceType::class, array(
                'choices'  => array(
                     'representantTerritorial' => 'Representant territorial' ,
                     'managerAgence' => 'Manager d\'agence',
                ),
            ))*/           
          
                
          
             /* ->add('roles', 'choice', 
               array('choices' => array('ROLE_REPRESENTANT_TERRITORIAL' => "Representant territorial", 
               'ROLE_MANAGER_AGENCE' => "Manager d\'agence"),

                                    'multiple' => false,
                                    'expanded' => true,
                                    'required' => true,
                                    'data' => 1)                
            )  
            */
        ->add('roles', 'collection', array(
            'type'   => 'choice',
            'options'  => array(
                'label' => false,
                'expanded' => true,
                'choices'  => array(
                    'ROLE_REPRESENTANT_TERRITORIAL' => "Representant territorial", 
               'ROLE_MANAGER_AGENCE' => "Manager d\'agence",
                ),
            ),
            
    ))
          /*
            ->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                       'label' => false, 
                       'choices' => array(
                           'ROLE_REPRESENTANT_TERRITORIAL' => 'Representant territorial' ,
                            'ROLE_MANAGER_AGENCE' => 'Manager d\'agence'
                       ),
                   )
               )
           )
            
           
           */ 
        /*        
           ->add('role', 'choice', array(
            'choices' => array(
                'ROLE_REPRESENTANT_TERRITORIAL' => 'Representant territorial', 
                'ROLE_MANAGER_AGENCE' => 'Manager d\'agence'),
               'multiple' => true,
            'expanded' => true
        ))*/
           /* ->add('managerAgence', 'checkbox', array(
                'label' => 'profile.fields.managerAgence',
                'translation_domain' => 'forms'
            ))*/
            ->add('agence', EntityType::class, array(
                'class' => 'GrdfMainBundle:Agence',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
            ))
           ->add('territoire', EntityType::class, array(
                'class' => 'GrdfMainBundle:Territoire',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'name',
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