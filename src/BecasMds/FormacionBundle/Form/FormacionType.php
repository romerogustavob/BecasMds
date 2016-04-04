<?php

namespace BecasMds\FormacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormacionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('id','hidden')
                ->add('institucion', 'entity', array('class'=>'FormacionBundle:Institucion', 
                    'property'=>'nombre', 'label'=>'Institución', 'empty_value'=>'Seleccione Institución', 
                    'required'=>false))
                ->add('nivelEducativo', 'entity', array('class'=>'FormacionBundle:NivelEducativo', 
                    'property'=>'descripcion', 'label'=>'Nivel Educativo', 'empty_value'=>'Seleccione Nivel Ed.',
                    'required'=>false))
                ->add('profesion', 'entity', array('class'=>'FormacionBundle:Profesion', 
                    'property'=>'descripcion', 'label'=>'Profesión', 'empty_value'=>'Seleccione Profesión',
                    'required'=>false))
                ->add('oficio', 'entity', array('class'=>'FormacionBundle:Oficio', 
                    'property'=>'descripcion', 'label'=>'Oficio', 'empty_value'=>'Seleccione Oficio',
                    'required'=>false))
                ->add('perfil','entity', array('class'=>'FormacionBundle:Perfil', 
                    'property'=>'descripcion', 'label'=>'Perfil', 'empty_value'=>'Seleccione Perfil',
                    'required'=>false))
                ->add('descripcion',null,array('label'=>'Descripción', 'required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\FormacionBundle\Entity\Formacion'
        ));
    }

    public function getName() {
        return 'becasmds_formacionbundle_formacion';
    }

}
