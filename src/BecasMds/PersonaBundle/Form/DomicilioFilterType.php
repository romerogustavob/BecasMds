<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class DomicilioFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'filter_number_range')
            ->add('numero', 'filter_text')
            ->add('dpto', 'filter_text')
            ->add('piso', 'filter_text')
            ->add('edificio', 'filter_text')
            ->add('manzana', 'filter_text')
            ->add('tira', 'filter_text')
            ->add('parcela', 'filter_text')
            ->add('quinta', 'filter_text')
            ->add('unidadFuncional', 'filter_text')
            ->add('latitude', 'filter_text')
            ->add('longitude', 'filter_text')
            ->add('referencias', 'filter_text')
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
        return 'becasmds_personabundle_domiciliofiltertype';
    }
}
