<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class ReferenteFilterType extends AbstractType implements \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden', array('required'=>false))
            ->add('dni', 'text', array('required'=>false))
            ->add('apellidos', 'text', array('required'=>false))
            ->add('nombres', 'text', array('required'=>false))
            ->add('telefono', 'text', array('required'=>false))
            ->add('email', 'text', array('required'=>false))
//            ->add('movimientoSocial', 'entity', array('class'=>'PersonaBundle:MovimientoSocial', 
//                'empty_value'=>'Seleccione Movimiento', 'empty_data'=>null, 'required'=>false))
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
        return 'becasmds_personabundle_referentefiltertype';
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
