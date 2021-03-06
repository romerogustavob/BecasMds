<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponsableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('apellidos')
            ->add('nombres')
            ->add('telefono')
            ->add('email', 'email', array('attr' => 
                array('placeholder' => 'noregistrado@servidor.com',),
                'label' => false,
                'required'=>false,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\PersonaBundle\Entity\Responsable'
        ));
    }

    public function getName()
    {
        return 'becasmds_personabundle_responsable';
    }
}
