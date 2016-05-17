<?php

namespace BecasMds\CertificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderExecuterInterface;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;

class CertificacionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('monto', 'number', array('required'=>false, 'label'=>'Monto Certificación'))
            ->add('descuentoDias', 'number', array('required'=>false))
            ->add('totalPagar','number', array('required'=>false))
            ->add('certificado', 'choice', array('choices' => array('n' => 'No', '1' => 'Sí'),
                    'required' => false, 'empty_value' => 'Indiferente', 'empty_data' => null,
                    'label' => 'Beca Activa'))
            ->add('mesCertificacion', 'filter_date_range', array(
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
        $builder
                ->add('becadobeca', 'filter_collection_adapter', array(
                    'type' => new \BecasMds\BecaBundle\Form\BecadoBecaCollectionFilterType(),
                    'add_shared' => function (FilterBuilderExecuterInterface $qbe) {
                        $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                                    // add the join clause to the doctrine query builder
                                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                                    $filterBuilder->leftJoin($alias . '.becadobeca', $joinAlias);
                                };

                        // then use the query builder executor to define the join and its alias.
                        $qbe->addOnce($qbe->getAlias() . '.becadobeca', 'bcdbc', $closure);
                    },
                    'required' => false,
                ));

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
        return 'becasmds_certificacionbundle_certificacionfiltertype';
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
    
}
