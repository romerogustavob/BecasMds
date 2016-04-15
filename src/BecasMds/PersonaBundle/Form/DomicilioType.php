<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BecasMds\PersonaBundle\Form\EventListener;

class DomicilioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('departamento')
            ->add('localidad','entity', 
                    array(
                        'class'=>'PersonaBundle:Localidad',
                        'property'=>'nombre',
                        'empty_value'=>' ',
                        'attr'=>array('class'=>'select2-localidad')))
            ->add('barrio', 'shtumi_dependent_filtered_entity'
                , array('entity_alias' => 'barrio_by_localidad'
                      , 'empty_value'=> ''
                      , 'parent_field'=>'localidad'
                      , 'attr'=>array('class'=>'select2-barrio')))
            ->add('calle', 'shtumi_dependent_filtered_entity'
                , array('entity_alias' => 'calle_by_localidad'
                      , 'empty_value'=> ''
                      , 'parent_field'=>'localidad'
                      , 'attr'=>array('class'=>'select2-calle')))
//            ->add('calle','genemu_jqueryselect2_entity', 
//                    array(
//                'class' => 'PersonaBundle:Calle',
//                'property'=>'calleLista',
//                'multiple' => false,
//                'empty_value'=>''))
            ->add('numero')
            ->add('dpto')
            ->add('piso')
            ->add('edificio')
            ->add('manzana')
            ->add('tira')
            ->add('parcela')
            ->add('quinta')
            ->add('unidadFuncional')
            ->add('referencias')
            ->add('latitude', null, array('required'=>false))
            ->add('longitude', null, array('required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\PersonaBundle\Entity\Domicilio'
        ));
    }

    public function getName()
    {
        return 'becasmds_personabundle_domicilio';
    }
}
