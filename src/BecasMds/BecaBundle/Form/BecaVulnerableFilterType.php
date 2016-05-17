<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class BecaVulnerableFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'filter_number_range')
            ->add('nombre', 'filter_text')
            ->add('monto', 'filter_number_range')
            ->add('fechaalta', 'filter_date_range')
            ->add('fechabaja', 'filter_date_range')
            ->add('activo', 'filter_choice')
            ->add('createdBy', 'filter_text')
            ->add('updatedBy', 'filter_text')
            ->add('createdAt', 'filter_date_range')
            ->add('updatedAt', 'filter_date_range')
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
        return 'becasmds_becabundle_becavulnerablefiltertype';
    }
}
