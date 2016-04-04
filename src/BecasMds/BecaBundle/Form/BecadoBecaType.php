<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BecadoBecaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('becado', 'entity', array('class'=>'PersonaBundle:Becado',
                'property'=>'becadoLista'))
            ->add('beca','entity', array('class'=>'BecaBundle:Beca',
                'property'=>'becaLista'))
            ->add('fechaAlta','genemu_jquerydate', array('widget' => 'single_text', 'required'=>false))
            ->add('fechaBaja','genemu_jquerydate', array('widget' => 'single_text', 'required'=>false))
            ->add('activo')
            ->add('detalles')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\BecaBundle\Entity\BecadoBeca'
        ));
    }

    public function getName()
    {
        return 'becasmds_becabundle_becadobeca';
    }
}
