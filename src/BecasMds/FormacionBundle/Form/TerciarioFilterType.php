<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class TerciarioFilterType extends AbstractType
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
            ->add('carrera', 'text', array('required'=>false, 'label'=>'Carrera'))
            ->add('titulo', 'text', array('required'=>false, 'label'=>'Título'))
            ->add('nivel','choice', 
                        array('choices' => array(
                            'POSGRADO NO UNIVERSITARIO' => 'POSGRADO NO UNIVERSITARIO',
                            'GRADO NO UNIVERSITARIO' => 'GRADO NO UNIVERSITARIO'), 
                            'empty_value' => '-',
                            'label'=>'Nivel Título',
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
        return 'becasmds_formacionbundle_terciariofiltertype';
    }
}
