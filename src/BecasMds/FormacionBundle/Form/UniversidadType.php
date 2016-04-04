<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UniversidadType extends AbstractType
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
            ->add('facultad', null, array('label'=>'Facultad'))
            ->add('carrera',null, array('label'=>'Carrera'))
            ->add('titulo',null, array('required'=>false, 'label'=>'Título'))
            ->add('nivel','choice', 
                        array('choices' => array(
                            'POSTGRADO UNIVERSITARIO' => 'POSTGRADO UNIVERSITARIO',
                            'GRADO UNIVERSITARIO' => 'GRADO UNIVERSITARIO',
                            'PREGRADO UNIVERSITARIO' => 'PREGRADO UNIVERSITARIO',
                            '-' => '-'),
                            'label'=>'Nivel'))
            ->add('descripcion', null,  array('required'=>false, 'label'=>'Descripción'))
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\FormacionBundle\Entity\Universidad'
        ));
    }

    public function getName()
    {
        return 'becasmds_formacionbundle_universidad';
    }
}
