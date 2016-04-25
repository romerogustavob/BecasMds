<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MovimientoSocialCollectionFilterType
 *
 * @author GUSTAVO
 */
namespace BecasMds\PersonaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

class MovimientoSocialCollectionFilterType extends AbstractType{
    //put your code here
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('nombre', 'text', array('required'=>false))
            ->add('observaciones', 'text', array('required'=>false))
            ->add('activo', 'choice', array('choices'=>array('n'=>'No','1'=>'Sí'),
                'required'=>false, 'empty_value'=>'Indiferente', 'empty_data'=>null, 
                'label'=>'Activo'))
        ;
    }

    public function getName()
    {
        return 'becasmds_personabundle_movimientosocialcollectionfiltertype';
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
