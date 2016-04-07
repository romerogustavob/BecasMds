<?php

namespace BecasMds\CertificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CertificacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monto', 'money', array('precision'=>3, 'currency'=>''))
            ->add('descuentoDias')
            ->add('totalPagar','money', array('precision'=>3, 'currency'=>''))
            ->add('certificado')
            ->add('mesCertificacion', 'date', array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    , 'required' => false,
                ))
            ->add('becadobeca')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\CertificacionBundle\Entity\Certificacion'
        ));
    }

    public function getName()
    {
        return 'becasmds_certificacionbundle_certificacion';
    }
}
