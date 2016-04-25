<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use BecasMds\PersonaBundle\Form\MovimientoSocialCollectionFilterType;
use Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderExecuterInterface;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;

class ReferenteCollectionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni', 'text', array('required'=>false))
            ->add('apellidos', 'text', array('required'=>false))
            ->add('nombres', 'text', array('required'=>false))
        ;
        $builder->add('movimientoSocial', 'filter_collection_adapter', array(
            'type'       => new MovimientoSocialCollectionFilterType(),
            'add_shared' => function (FilterBuilderExecuterInterface $qbe)  {
                $closure = function (QueryBuilder $filterBuilder, $alias, $joinAlias, Expr $expr) {
                    // add the join clause to the doctrine query builder
                    // the where clause for the label and color fields will be added automatically with the right alias later by the Lexik\Filter\QueryBuilderUpdater
                    $filterBuilder->leftJoin($alias . '.movimientoSocial', $joinAlias);
                };

                // then use the query builder executor to define the join and its alias.
                $qbe->addOnce($qbe->getAlias().'.movimientoSocial', 'ms', $closure);
            },'attr'=>array('label'=>'',), 'required'=>false,));

    }
    
    public function getName()
    {
        return 'becasmds_personabundle_referentecollectionfiltertype';
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
