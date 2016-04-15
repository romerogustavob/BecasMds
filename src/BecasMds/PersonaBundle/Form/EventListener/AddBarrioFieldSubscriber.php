<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddBarrioFieldSubscriber
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
use \BecasMds\PersonaBundle\Entity;
use BecasMds\PersonaBundle\Entity\Localidad;

class AddBarrioFieldSubscriber implements EventSubscriberInterface{
    //put your code here
    
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
 
    private function addBarrioForm($form, $localidad)
    {
        $form->add($this->factory->createNamed('barrio','genemu_jqueryselect2_entity', $barrio, array(
            'class'         => 'PersonaBundle:Barrio',
            'empty_value'   => '',
            'mapped'        => false,
            'query_builder' => function (EntityRepository $repository) use ($localidad) {
                $qb = $repository->createQueryBuilder('barrio')
                    ->innerJoin('barrio.localidad', 'localidad');
                if($localidad instanceof Localidad){
                    $qb->where('barrio.localidad = :localidad')
                    ->setParameter('localidad', $localidad);
                }elseif(is_numeric($localidad)){
                    $qb->where('localidad.id = :localidad')
                    ->setParameter('localidad', $localidad);
                }else{
                    $qb->where('localidad.nombre = :localidad')
                    ->setParameter('localidad', null);
                }
 
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
 
        $barrio = ($data->barrio) ? $data->barrio->getLocalidad() : null ;
        $localidad = ($barrio) ? $barrio->getLocalidad() : null ;
        $this->addBarrioForm($form, $barrio, $localidad);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $barrio = array_key_exists('barrio', $data) ? $data['barrio'] : null;
        $localidad = array_key_exists('localidad', $data) ? $data['localidad'] : null;
        $this->addBarrioForm($form, $barrio, $localidad);
    }
}
