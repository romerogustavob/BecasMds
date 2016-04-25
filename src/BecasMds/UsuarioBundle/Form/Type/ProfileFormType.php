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

class ProfileFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('dni', 'number')
                ->add('apellidos')
                ->add('nombres')
                ->add('email', 'email')
                ->add('roles', 'array')
        ;
    }

    public function getParent() {
        //return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
         return 'fos_user_profile';
    }

    public function getBlockPrefix() {
        return 'usuario_user_profile';
    }

    // For Symfony 2.x
    public function getName() {
        return $this->getBlockPrefix();
    }

}
