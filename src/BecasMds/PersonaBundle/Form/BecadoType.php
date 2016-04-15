<?php

namespace BecasMds\PersonaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use BecasMds\PersonaBundle\Form\EventListener;
class BecadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'hidden')
            ->add('dni')
            ->add('apellidos')
            ->add('nombres')
            ->add('telefono','text', array('required'=>false))
            ->add('email', 'text', array('required'=>false))                
            ->add('referente', 'entity', array('class'=>'PersonaBundle:Referente', 
                'property'=>'referenteMovSocial', 'empty_value'=>'', 
                'attr'=>array('class'=>'select2-referente'),
                'required'=>false))
            ->add('lugarAfectacion',null,array('required'=>false))
            ->add('dependencia')
            ->add('presentaCertificacion')
            ->add('fechaAlta','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
            ->add('fechaBaja','date',array('widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'class' => 'form-control input-inline boostrap-datepicker',
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ] , 'required' => false,
                    ))
            ->add('activo')
            ->add('becadobeca', 'collection',array('type'=>new \BecasMds\BecaBundle\Form\BecadoBecaType(), 
                    'allow_add'=>true,
                    'allow_delete'=>true,
                    'attr'=>array('label'=>'',)))
//            ->add('becadobeca')
        ;
        $builder->add('domicilio', 'collection',
                array('type'=>new \BecasMds\PersonaBundle\Form\DomicilioType(), 
                    'allow_add'=>true,
                    'allow_delete'=>true,
                    'by_reference'=>false,
                    'attr'=>array('label'=>'',)));
        $builder->add('formacion', 'collection', 
                array('type'=>new \BecasMds\FormacionBundle\Form\FormacionType(), 
                    'allow_add'=>true,
                    'allow_delete'=>true,
                    'by_reference'=>false,
                    'label'=>'',));
        
//        $builder->add('formacion', new \BecasMds\FormacionBundle\Form\FormacionType(), 
//                array('type' => new \BecasMds\FormacionBundle\Form\FormacionType(),
//                array('data_class'=>null,
//                    'validation_groups' => array('adding'),
//                    'allow_add'    => true,
//                'allow_delete' => true,
//                'by_reference' => false,
//                    )
//                );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BecasMds\PersonaBundle\Entity\Becado',
            'cascade_validation'=>'true'
        ));
    }

    public function getName()
    {
        return 'becasmds_personabundle_becado';
    }
}
