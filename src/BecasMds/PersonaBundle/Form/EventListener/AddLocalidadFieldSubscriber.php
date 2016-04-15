<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddLocalidadEventSubscriber
 *
 * @author GUSTAVO
 */
namespace BecasMds\PersonaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;

class AddLocalidadFieldSubscriber implements EventSubscriberInterface  {
    
    private $factory;
 
    public function __construct(FormFactoryInterface $factory)
    {
        $this->factory = $factory;
    }
 
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND     => 'preBind'
        );
    }
 
    private function addLocalidadForm($form, $localidad)
    {
        $form->add($this->factory->createNamed('localidad', 'genemu_jqueryselect2_entity', $localidad, array(
            'class'         => 'PersonaBundle:Localidad',
            'mapped'        => false,
            'empty_value'   => '',
            'query_builder' => function (EntityRepository $repository) {
                $qb = $repository->createQueryBuilder('localidad');
 
                return $qb;
            }
        )));
    }
 
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $localidad = ($data->barrio) ? $data->barrio->getLocalidad() : null ;
        $this->addLocalidadForm($form, $localidad);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $localidad = array_key_exists('localidad', $data) ? $data['localidad'] : null;
        $this->addLocalidadForm($form, $localidad);
    }
    //put your code here
}
