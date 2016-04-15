<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderExecuterInterface;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;

class BecadoFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id', 'hidden')
                ->add('dni', 'text', array('required' => false, 'trim' => true, 'label' => 'Nº Documento'))
                ->add('apellidos', 'text', array('required' => false, 'trim' => true, 'label' => 'Apellidos'))
                ->add('nombres', 'text', array('required' => false, 'trim' => true, 'label' => 'Nombres'))
                ->add('telefono', 'text', array('required' => false, 'trim' => true, 'label' => 'Nº Teléfono'))
                ->add('presentaCertificacion', 'choice', array('choices' => array('n' => 'No', '1' => 'Sí'),
                    'required' => false, 'empty_value' => 'Indiferente', 'empty_data' => null,
                    'label' => 'Presenta Certificación'))
                ->add('activo', 'choice', array('choices' => array('n' => 'No', '1' => 'Sí'),
                    'required' => false, 'empty_value' => 'Indiferente', 'empty_data' => null,
                    'label' => 'Activo'))
                ->add('fechaAlta', 'filter_date_range', array(
                    'left_date_options' => array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ), 'required' => false,
                    'right_date_options' => array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ), 'required' => false,
                ))
                ->add('fechaBaja', 'filter_date_range', array(
                    'left_date_options' => array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ), 'required' => false,
                    'right_date_options' => array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ), 'required' => false,
                ))

        ;
        $builder->add('referente', 'filter_collection_adapter', array(
            'type'       => new ReferenteCollectionFilterType(),
            'add_shared' => function (FilterBuilderExecuterInterface $qbe)  {
                $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                    // add the join clause to the doctrine query builder
                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                    $filterBuilder->leftJoin($alias . '.referente', $joinAlias);
                };

                // then use the query builder executor to define the join and its alias.
                $qbe->addOnce($qbe->getAlias().'.referente', 'ref', $closure);
            },
        ));


        $listener = function(FormEvent $event) {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if (is_array($data)) {
                    foreach ($data as $subData) {
                        if (!empty($subData))
                            return;
                    }
                }
                else {
                    if (!empty($data))
                        return;
                }
            }

            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_BIND, $listener);
    }

    public function getName() {
        return 'becasmds_personabundle_becadofiltertype';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

}
