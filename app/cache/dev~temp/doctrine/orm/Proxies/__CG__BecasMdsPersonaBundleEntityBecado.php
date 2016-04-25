<?php

namespace Proxies\__CG__\BecasMds\PersonaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Becado extends \BecasMds\PersonaBundle\Entity\Becado implements \Doctrine\ORM\Proxy\Proxy
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
     * {@inheritDoc}
     * @return array
     */
    public function __sleep()
    {
        $properties = array_merge(['__isInitialized__'], parent::__sleep());

        if ($this->__isInitialized__) {
            $properties = array_diff($properties, array_keys($this->__getLazyProperties()));
        }

        return $properties;
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Becado $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentaCertificacion($presentaCertificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentaCertificacion', [$presentaCertificacion]);

        return parent::setPresentaCertificacion($presentaCertificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentaCertificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentaCertificacion', []);

        return parent::getPresentaCertificacion();
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
    public function setDni($dni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDni', [$dni]);

        return parent::setDni($dni);
    }

    /**
     * {@inheritDoc}
     */
    public function getDni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', []);

        return parent::getDni();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getBecadoLista()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBecadoLista', []);

        return parent::getBecadoLista();
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombres($nombres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombres', [$nombres]);

        return parent::setNombres($nombres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombres', []);

        return parent::getNombres();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setDependencia(\BecasMds\PersonaBundle\Entity\Dependencia $dependencia = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDependencia', [$dependencia]);

        return parent::setDependencia($dependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDependencia', []);

        return parent::getDependencia();
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
    public function setLugarAfectacion(\BecasMds\PersonaBundle\Entity\LugarAfectacion $lugarAfectacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLugarAfectacion', [$lugarAfectacion]);

        return parent::setLugarAfectacion($lugarAfectacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLugarAfectacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLugarAfectacion', []);

        return parent::getLugarAfectacion();
    }

    /**
     * {@inheritDoc}
     */
    public function addFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFormacion', [$formacion]);

        return parent::addFormacion($formacion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFormacion', [$formacion]);

        return parent::removeFormacion($formacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormacion', []);

        return parent::getFormacion();
    }

    /**
     * {@inheritDoc}
     */
    public function addDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDomicilio', [$domicilio]);

        return parent::addDomicilio($domicilio);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDomicilio', [$domicilio]);

        return parent::removeDomicilio($domicilio);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomicilio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomicilio', []);

        return parent::getDomicilio();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferente(\BecasMds\PersonaBundle\Entity\Referente $referente = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferente', [$referente]);

        return parent::setReferente($referente);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferente', []);

        return parent::getReferente();
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
    public function setBecadoBeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBecadoBeca', [$becadobeca]);

        return parent::setBecadoBeca($becadobeca);
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
    public function getBecadobeca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBecadobeca', []);

        return parent::getBecadobeca();
    }

}