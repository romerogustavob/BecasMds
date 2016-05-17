<?php

namespace Proxies\__CG__\BecasMds\BecaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Beca extends \BecasMds\BecaBundle\Entity\Beca implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'id', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'monto', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'activo', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'fechaAlta', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'fechaBaja', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'tipoBeca', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'becadobeca', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'tipoFuncion', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'createdBy', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'updatedBy', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'createdAt', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'id', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'monto', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'activo', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'fechaAlta', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'fechaBaja', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'tipoBeca', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'becadobeca', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'tipoFuncion', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'createdBy', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'updatedBy', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'createdAt', '' . "\0" . 'BecasMds\\BecaBundle\\Entity\\Beca' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Beca $proxy) {
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
    public function setMonto($monto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMonto', [$monto]);

        return parent::setMonto($monto);
    }

    /**
     * {@inheritDoc}
     */
    public function getMonto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMonto', []);

        return parent::getMonto();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaAlta($fechaAlta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaAlta', [$fechaAlta]);

        return parent::setFechaAlta($fechaAlta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaAlta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaAlta', []);

        return parent::getFechaAlta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaBaja($fechaBaja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaBaja', [$fechaBaja]);

        return parent::setFechaBaja($fechaBaja);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaBaja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaBaja', []);

        return parent::getFechaBaja();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoBeca(\BecasMds\BecaBundle\Entity\TipoBeca $tipoBeca = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoBeca', [$tipoBeca]);

        return parent::setTipoBeca($tipoBeca);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoBeca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoBeca', []);

        return parent::getTipoBeca();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoFuncion(\BecasMds\BecaBundle\Entity\TipoFuncion $tipoFuncion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoFuncion', [$tipoFuncion]);

        return parent::setTipoFuncion($tipoFuncion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoFuncion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoFuncion', []);

        return parent::getTipoFuncion();
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
    public function setBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBecadobeca', [$becadobeca]);

        return parent::setBecadobeca($becadobeca);
    }

    /**
     * {@inheritDoc}
     */
    public function getBecadobeca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBecadobeca', []);

        return parent::getBecadobeca();
    }

    /**
     * {@inheritDoc}
     */
    public function addBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBecadobeca', [$becadobeca]);

        return parent::addBecadobeca($becadobeca);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBecadobeca', [$becadobeca]);

        return parent::removeBecadobeca($becadobeca);
    }

    /**
     * {@inheritDoc}
     */
    public function getBecaLista()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBecaLista', []);

        return parent::getBecaLista();
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
