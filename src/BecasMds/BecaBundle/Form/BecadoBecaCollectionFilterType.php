<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BecadoBecaCollectionFilterType
 *
 * @author GUSTAVO
 */

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

class BecadoBecaCollectionFilterType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id', 'hidden')
                ->add('beca', 'filter_collection_adapter', array(
                    'type' => new BecaCollectionFilterType(),
                    'add_shared' => function (FilterBuilderExecuterInterface $qbe) {
                        $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                                    // add the join clause to the doctrine query builder
                                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                                    $filterBuilder->leftJoin($alias . '.beca', $joinAlias);
                                };

                        // then use the query builder executor to define the join and its alias.
                        $qbe->addOnce($qbe->getAlias() . '.beca', 'bc', $closure);
                    },
                    'required' => false,
                ))
                ->add('becado', 'filter_collection_adapter', array(
                    'type' => new \BecasMds\PersonaBundle\Form\BecadoCollectionFilterType(),
                    'add_shared' => function (FilterBuilderExecuterInterface $qbe) {
                        $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                                    // add the join clause to the doctrine query builder
                                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                                    $filterBuilder->leftJoin($alias . '.becado', $joinAlias);
                                };

                        // then use the query builder executor to define the join and its alias.
                        $qbe->addOnce($qbe->getAlias() . '.becado', 'bcd', $closure);
                    },
                    'required' => false,
                ))
                
        ;

    }

    public function getName() {
        return 'becasmds_becabundle_becadobecacollectionfiltertype';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
    //put your code here
}
