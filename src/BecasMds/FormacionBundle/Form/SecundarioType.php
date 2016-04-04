<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SecundarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('institucion', null, array('label'=>'Institución'))
            ->add('tipoEducacion','choice', 
                        array('choices' => array(
                            'PÚBLICA' => 'Pública', 
                            'PRIVADA' => 'Privada', 
                            '-' => '-'),
                            'label'=>'Tipo de Educación'))
            ->add('orientacion',null, array('required'=>false, 'label'=>'Orientación'))
            ->add('titulo', null,  array('required'=>false, 'label'=>'Título'))
            ->add('descripcion', null,  array('required'=>false, 'label'=>'Descripción'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\FormacionBundle\Entity\Secundario'
        ));
    }

    public function getName()
    {
        return 'becasmds_formacionbundle_secundario';
    }
}
