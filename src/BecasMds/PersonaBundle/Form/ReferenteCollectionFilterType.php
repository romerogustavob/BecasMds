<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class ReferenteCollectionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni', 'text', array('required'=>false))
            ->add('apellidos', 'text', array('required'=>false))
            ->add('nombres', 'text', array('required'=>false))
        ;

    }
    
    public function getName()
    {
        return 'becasmds_personabundle_referentecollectionfiltertype';
    }
}
