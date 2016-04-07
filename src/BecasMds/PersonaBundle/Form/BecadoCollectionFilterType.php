<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BecadoCollectionFilterType
 *
 * @author GUSTAVO
 */
namespace BecasMds\PersonaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;
use Lexik\Bundle\FormFilterBundle\Filter\FilterBuilderExecuterInterface;

class BecadoCollectionFilterType extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('dni', 'text', array('required'=>false, 'trim'=>true, 'label'=>'Nº Documento'))
            ->add('apellidos', 'text', array('required'=>false, 'trim'=>true, 'label'=>'Apellidos'))
            ->add('nombres', 'text', array('required'=>false, 'trim'=>true, 'label'=>'Nombres'));
    }
    
    public function getName() {
        return 'becasmds_becabundle_becadocollectionfiltertype';
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
