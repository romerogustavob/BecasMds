<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;
use Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderExecuterInterface;

class BecaFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id', 'hidden')
                ->add('tipoBeca', 'filter_collection_adapter', array(
                    'type' => new TipoBecaCollectionFilterType(),
                    'add_shared' => function (FilterBuilderExecuterInterface $qbe) {
                        $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                                    // add the join clause to the doctrine query builder
                                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                                    $filterBuilder->leftJoin($alias . '.tipoBeca', $joinAlias);
                                };

                        // then use the query builder executor to define the join and its alias.
                        $qbe->addOnce($qbe->getAlias() . '.tipoBeca', 'opt', $closure);
                    },
                    'required' => false,
                ))
                ->add('tipoFuncion', 'filter_collection_adapter', array(
                    'type' => new TipoFuncionCollectionFilterType(),
                    'add_shared' => function (FilterBuilderExecuterInterface $qbe) {
                        $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                                    // add the join clause to the doctrine query builder
                                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                                    $filterBuilder->leftJoin($alias . '.tipoFuncion', $joinAlias);
                                };

                        // then use the query builder executor to define the join and its alias.
                        $qbe->addOnce($qbe->getAlias() . '.tipoFuncion', 'tfn', $closure);
                    },
                    'required' => false,
                ))
                ->add('monto', 'number', array('required' => false))
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
                ->add('activo', 'choice', array('choices' => array('n' => 'No', '1' => 'Sí'),
                    'required' => false, 'empty_value' => 'Indiferente', 'empty_data' => null,
                    'label' => 'Beca Activa'))
        ;

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
        return 'becasmds_becabundle_becafiltertype';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

}
