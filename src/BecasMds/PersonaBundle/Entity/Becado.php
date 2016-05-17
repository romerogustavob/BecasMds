<?php

namespace BecasMds\PersonaBundle\Entity;

use BecasMds\PersonaBundle\Entity\Persona;
use BecasMds\BecaBundle\Entity\BecaVulnerable;
use Doctrine\ORM\Mapping as ORM;
use BecasMds\FormacionBundle\Entity\Formacion;


/**
 * Becado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\BecadoRepository")
 */
class Becado extends Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Referente", inversedBy="becado")
     * @ORM\JoinColumn(name="referente_id", referencedColumnName="id")
     */
    protected $referente;

    /**
     * @ORM\ManyToOne(targetEntity="Dependencia", inversedBy="becado")
     * @ORM\JoinColumn(name="dependencia_id", referencedColumnName="id")
     */
    protected $dependencia;
    
     /**
     * @var string
     */
    protected $dni;

    /**
     * @var string
     */
    protected $apellidos;

    /**
     * @var string
     * 
     */
    protected $nombres;

    /**
     * @var string
     */
    protected $telefono;

    /**
     * @var string
     */
    protected $email;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="presentacertificacion", type="boolean")
     */
    protected $presentaCertificacion;
    
    /**
     * @ORM\ManyToOne(targetEntity="LugarAfectacion", inversedBy="becado")
     * @ORM\JoinColumn(name="lugarAfectacion_id", referencedColumnName="id")
     */
    protected $lugarAfectacion;
    
    
    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="\BecasMds\BecaBundle\Entity\BecadoBeca", mappedBy="becado", cascade={"persist"})
     */
    protected $becadobeca;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="datetime")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaBaja", type="datetime")
     */
    private $fechaBaja;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
        return $this;
    }
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->domicilio=new \Doctrine\Common\Collections\ArrayCollection();
        $this->becadobeca=new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Set presentaCertificacion
     *
     * @param boolean $presentaCertificacion
     * @return Becado
     */
    public function setPresentaCertificacion($presentaCertificacion)
    {
        $this->presentaCertificacion = $presentaCertificacion;
    
        return $this;
    }

    /**
     * Get presentaCertificacion
     *
     * @return boolean 
     */
    public function getPresentaCertificacion()
    {
        return $this->presentaCertificacion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Becado
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Becado
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    
        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return Becado
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;
    
        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Becado
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Becado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    public function getBecadoLista(){
        return $this->getDni().' -'.$this->getApellidos().', '.$this->getNombres();
    }
    
    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Becado
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Becado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Becado
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * Set dependencia
     *
     * @param \BecasMds\PersonaBundle\Entity\Dependencia $dependencia
     * @return Becado
     */
    public function setDependencia(\BecasMds\PersonaBundle\Entity\Dependencia $dependencia = null)
    {
        $this->dependencia = $dependencia;
    
        return $this;
    }

    /**
     * Get dependencia
     *
     * @return \BecasMds\PersonaBundle\Entity\Dependencia 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }
    
    public function __toString() {
        return $this->getDni().'-'.$this->getApellidos().','.$this->getNombres();
    }

    /**
     * Set lugarAfectacion
     *
     * @param \BecasMds\PersonaBundle\Entity\LugarAfectacion $lugarAfectacion
     * @return Becado
     */
    public function setLugarAfectacion(\BecasMds\PersonaBundle\Entity\LugarAfectacion $lugarAfectacion = null)
    {
        $this->lugarAfectacion = $lugarAfectacion;
    
        return $this;
    }

    /**
     * Get lugarAfectacion
     *
     * @return \BecasMds\PersonaBundle\Entity\LugarAfectacion 
     */
    public function getLugarAfectacion()
    {
        return $this->lugarAfectacion;
    }
    
    /**
     * Add formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     * @return Becado
     */
    public function addFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {
        $formacion->setPersona($this);
        $this->formacion->add($formacion);
    
        return $this;
    }

    /**
     * Remove formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     */
    public function removeFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {
        $this->formacion->removeElement($formacion);
    }

    /**
     * Get formacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormacion()
    {
        return $this->formacion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $formacion;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $domicilio;


    /**
     * Add domicilio
     *
     * @param \BecasMds\PersonaBundle\Entity\Domicilio $domicilio
     * @return Becado
     */
    public function addDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {
        $domicilio->setPersona($this);
        $this->domicilio->add($domicilio);
    
        return $this;
    }

    /**
     * Remove domicilio
     *
     * @param \BecasMds\PersonaBundle\Entity\Domicilio $domicilio
     */
    public function removeDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {
        $this->domicilio->removeElement($domicilio);
    }

    /**
     * Get domicilio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set referente
     *
     * @param \BecasMds\PersonaBundle\Entity\Referente $referente
     * @return Becado
     */
    public function setReferente(\BecasMds\PersonaBundle\Entity\Referente $referente = null)
    {
        $this->referente = $referente;
    
        return $this;
    }

    /**
     * Get referente
     *
     * @return \BecasMds\PersonaBundle\Entity\Referente 
     */
    public function getReferente()
    {
        return $this->referente;
    }
    

    /**
     * Add becadobeca
     *
     * @param \BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca
     * @return Becado
     */
    public function addBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca)
    {
        $this->becadobeca[] = $becadobeca;
    
        return $this;
    }
    
    public function setBecadoBeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca){
        $this->becadobeca[] = $becadobeca;
    }
    /**
     * Remove becadobeca
     *
     * @param \BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca
     */
    public function removeBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca)
    {
        $this->becadobeca->removeElement($becadobeca);
    }

    /**
     * Get becadobeca
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBecadobeca()
    {
        return $this->becadobeca;
    }
    
    public function __sleep() {
        return array($this->getBecadoLista());
    }
}
