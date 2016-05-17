<?php

namespace BecasMds\BecaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use BecasMds\BecaBundle\Entity\Beca;
class BecadoBecaType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('becado', 'entity', array('class'=>'PersonaBundle:Becado',
                'property'=>'becadoLista', 'attr'=>array('size'=>1)))
//            ->add('beca','entity', array('class'=>'BecaBundle:Beca',
//                'property'=>'becaLista',
//                'attr'=>array('onload'=>'select2($this);')))
            ->add('beca')    
            ->add('becaVulnerable')
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
