<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DomicilioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departamento')
            ->add('localidad',null, array('attr'=>array('onkeydown'=>'encontrar_localidad(this.id);')))
            ->add('barrio', 'genemu_jqueryselect2_entity', 
                    array(
                'class' => 'PersonaBundle:Barrio',
                'property'=>'barrioLista',
                'multiple' => false,
                'empty_value'=>'Seleccione Barrio'))
            ->add('calle','genemu_jqueryselect2_entity', 
                    array(
                'class' => 'PersonaBundle:Calle',
                'property'=>'calleLista',
                'multiple' => false,
                'empty_value'=>'Seleccione Calle'))
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
