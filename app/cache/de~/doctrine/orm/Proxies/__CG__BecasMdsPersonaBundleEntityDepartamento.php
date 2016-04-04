<?php

namespace Proxies\__CG__\BecasMds\PersonaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Departamento extends \BecasMds\PersonaBundle\Entity\Departamento implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function addDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {
        $this->__load();
        return parent::addDomicilio($domicilio);
    }

    public function removeDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {
        $this->__load();
        return parent::removeDomicilio($domicilio);
    }

    public function getDomicilio()
    {
        $this->__load();
        return parent::getDomicilio();
    }

    public function setLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad = NULL)
    {
        $this->__load();
        return parent::setLocalidad($localidad);
    }

    public function getLocalidad()
    {
        $this->__load();
        return parent::getLocalidad();
    }

    public function addLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad)
    {
        $this->__load();
        return parent::addLocalidad($localidad);
    }

    public function removeLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad)
    {
        $this->__load();
        return parent::removeLocalidad($localidad);
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'descripcion', 'domicilio', 'localidad');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}