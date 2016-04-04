<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

class ReferenteSharedableFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('apellidos', 'text', array('required'=>false))
        ;

    }
    public function getParent()
    {
        return 'filter_sharedable'; // this allow us to use the "add_shared" option
    }
    public function getName()
    {
        return 'filter_referentesharedablefiltertype';
    }
    
     public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
