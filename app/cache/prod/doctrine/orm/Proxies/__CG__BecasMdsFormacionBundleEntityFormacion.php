<?php

namespace Proxies\__CG__\BecasMds\FormacionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formacion extends \BecasMds\FormacionBundle\Entity\Formacion implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'id', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'oficio', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'nivelEducativo', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'institucion', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'profesion', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'perfil', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'descripcion', 'persona', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'createdBy', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'updatedBy', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'createdAt', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'id', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'oficio', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'nivelEducativo', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'institucion', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'profesion', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'perfil', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'descripcion', 'persona', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'createdBy', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'updatedBy', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'createdAt', '' . "\0" . 'BecasMds\\FormacionBundle\\Entity\\Formacion' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formacion $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOficio(\BecasMds\FormacionBundle\Entity\Oficio $oficio = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOficio', [$oficio]);

        return parent::setOficio($oficio);
    }

    /**
     * {@inheritDoc}
     */
    public function getOficio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOficio', []);

        return parent::getOficio();
    }

    /**
     * {@inheritDoc}
     */
    public function setNivelEducativo(\BecasMds\FormacionBundle\Entity\NivelEducativo $nivelEducativo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNivelEducativo', [$nivelEducativo]);

        return parent::setNivelEducativo($nivelEducativo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNivelEducativo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNivelEducativo', []);

        return parent::getNivelEducativo();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstitucion(\BecasMds\FormacionBundle\Entity\Institucion $institucion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstitucion', [$institucion]);

        return parent::setInstitucion($institucion);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstitucion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstitucion', []);

        return parent::getInstitucion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerfil(\BecasMds\FormacionBundle\Entity\Perfil $perfil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerfil', [$perfil]);

        return parent::setPerfil($perfil);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfil', []);

        return parent::getPerfil();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesion(\BecasMds\FormacionBundle\Entity\Profesion $profesion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesion', [$profesion]);

        return parent::setProfesion($profesion);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesion', []);

        return parent::getProfesion();
    }

    /**
     * {@inheritDoc}
     */
    public function addPersona(\BecasMds\PersonaBundle\Entity\Persona $persona = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPersona', [$persona]);

        return parent::addPersona($persona);
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona(\BecasMds\PersonaBundle\Entity\Persona $persona = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', [$persona]);

        return parent::setPersona($persona);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersona', []);

        return parent::getPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy($updatedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
