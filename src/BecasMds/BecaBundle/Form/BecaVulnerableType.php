<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BecaVulnerableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, array('read_only'=>true, 'attr'=>array('value'=>'VULNERABLES')))
            ->add('monto')
            ->add('tipoFuncion')
            ->add('fechaalta','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
            ->add('fechabaja','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
            ->add('activo')
            ->add('detalles')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\BecaBundle\Entity\BecaVulnerable'
        ));
    }

    public function getName()
    {
        return 'becasmds_becabundle_becavulnerable';
    }
}
