<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use BecasMds\PersonaBundle\Entity\Becado;

class BecadoBecaFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')    
            ->add('fechaAlta', 'date', array('widget'=>'single_text','format'=>'yyyy-MM-dd', 'required'=>false, 'label'=>'Fecha de Creación'))
            ->add('fechaBaja', 'date', array('widget'=>'single_text','format'=>'yyyy-MM-dd', 'required'=>false, 'label'=> 'Fecha de Baja'))
            ->add('activo', 'choice', array('choices'=>array('n'=>'No','1'=>'Sí'),
                'required'=>false, 'empty_value'=>'Indiferente', 'empty_data'=>null, 
                'label'=>'Beca Activa'))
            ->add('detalles', 'text',array('required'=>false, 'trim'=>true, 'label'=>'Descripción'))
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
        return 'becasmds_becabundle_becadobecafiltertype';
    }
}
