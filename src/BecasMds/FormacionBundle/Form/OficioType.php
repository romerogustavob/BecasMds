<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OficioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion',null,array('label'=>'Descripción'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\FormacionBundle\Entity\Oficio'
        ));
    }

    public function getName()
    {
        return 'becasmds_formacionbundle_oficio';
    }
}
