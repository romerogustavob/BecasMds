<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationType
 *
 * @author GUSTAVO
 */

namespace BecasMds\UsuarioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('dni', 'number')
                ->add('apellidos')
                ->add('nombres')
                ->add('email', 'email')
                ->add('enabled')
                ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password',
                'attr'=>array('value'=>'123456')),
                'second_options' => array('label' => 'form.password_confirmation',
                'attr'=>array('value'=>'123456')),
                'invalid_message' => 'fos_user.password.mismatch',
                )
             )
                ->add('roles', 'choice', array('label'=>'Rol','required'=>true,'choices'=>array(0=>'ROLE_USER', 1=>'ROLE_ADMIN'), 'multiple'=>true))
                ->add('created_at','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
                ->add('updated_at','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
        ;
    }

    public function getParent() {
        //return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
         return 'fos_user_registration';
    }

    public function getBlockPrefix() {
        return 'usuario_user_registration';
    }

    // For Symfony 2.x
    public function getName() {
        return $this->getBlockPrefix();
    }

}
