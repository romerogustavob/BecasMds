<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class UniversidadFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('institucion','text', array('required'=>false, 'label'=>'Institución')) 
            ->add('tipoEducacion','choice', 
                        array('choices' => array(
                            'PÚBLICA' => 'Pública', 
                            'PRIVADA' => 'Privada'),
                            'empty_value'=>'-',
                            'label'=>'Tipo de Educación',
                            'required'=>false))
            ->add('facultad', null, array('required'=>false, 'label'=>'Facultad'))
            ->add('carrera', 'text', array('required'=>false, 'label'=>'Carrera'))
            ->add('titulo', 'text', array('required'=>false, 'label'=>'Título'))
            ->add('nivel','choice', 
                        array('choices' => array(
                            'POSGRADO UNIVERSITARIO' => 'POSGRADO UNIVERSITARIO',
                            'GRADO UNIVERSITARIO' => 'GRADO UNIVERSITARIO',
                            'PREGRADO UNIVERSITARIO' => 'PREGRADO UNIVERSITARIO'),
                            'empty_value' => '-',
                            'label'=>'Nivel',
                            'required'=>false))
            ->add('descripcion', 'text',  array('required'=>false, 'label'=>'Descripción'))
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if(is_array($data)) {
                    foreach ($data as $subData) {
                        if(!empty($subData)) return;
                    }
                }
                else {
                    if(!empty($data)) return;
                }
            }

            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_BIND, $listener);
    }

    public function getName()
    {
        return 'becasmds_formacionbundle_universidadfiltertype';
    }
}
