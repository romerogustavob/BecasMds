<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DependenciaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('detalle')
            ->add('responsable','genemu_jqueryselect2_entity', 
                    array(
                'class' => 'PersonaBundle:Responsable',
                'property'=>'responsablesLista',
                'multiple' => false,
                'empty_value'=>'Seleccione Responsable'))
            ->add('activo')
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\PersonaBundle\Entity\Dependencia'
        ));
    }

    public function getName()
    {
        return 'becasmds_personabundle_dependencia';
    }
}
