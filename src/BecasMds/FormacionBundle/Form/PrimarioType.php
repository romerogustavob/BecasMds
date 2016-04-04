<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrimarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('institucion',null, array('label'=>'Nombre Institución'))
                ->add('tipoEducacion','choice', 
                        array('choices' => array(
                            'PÚBLICA' => 'Pública', 
                            'PRIVADA' => 'Privada', 
                            '-' => '-'),
                            'label'=>'Tipo de Educación'))
                ->add('titulo',null,array('label'=>'Título'))
                ->add('descripcion', null, array('label'=>'Detalles'))
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\FormacionBundle\Entity\Primario'
        ));
    }

    public function getName()
    {
        return 'becasmds_formacionbundle_primario';
    }
}
