<?php

namespace BecasMds\PersonaBundle\Entity;

use BecasMds\PersonaBundle\Entity\Persona;
use Doctrine\ORM\Mapping as ORM;

/**
 * Referente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\ReferenteRepository")
 */
class Referente extends Persona
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
     * @ORM\ManyToOne(targetEntity="MovimientoSocial", inversedBy="referente")
     * @ORM\JoinColumn(name="movimientosocial_id", referencedColumnName="id")
     */
    protected $movimientoSocial;
    
   /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=8)
     */
    protected $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    protected $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    protected $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\OneToMany(targetEntity="Becado", mappedBy="referente")
     */
    protected $becado;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $formacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $domicilio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->becado=new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Persona
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
     * @return Persona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
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
     * @return Persona
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
     * @return Persona
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
     * @return Persona
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
     * Set domicilio
     *
     * @param string $domicilio
     * @return Persona
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    
        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    
    public function __toString() {
        return $this->getMovimientoSocial()->getNombre().' <br/> <b>Referente: </b>'.$this->getApellidos().', '.$this->getNombres();
    }
    
    public function getReferenteMovSocial(){
        return $this->getMovimientoSocial()->getNombre().' Referente: '.$this->getApellidos().', '.$this->getNombres();
    }
    
    public function getReferentesLista(){
        return 'Dni: '.  $this->getDni().' - '.$this->getApellidos().', '.$this->getNombres();
    }
    
    public function getReferente(){
        return 'Dni: '.  $this->getDni().' - '.$this->getApellidos().', '.$this->getNombres();
    }
    
    /**
     * Set movimientoSocial
     *
     * @param \BecasMds\PersonaBundle\Entity\MovimientoSocial $movimientoSocial
     * @return Referente
     */
    public function setMovimientoSocial(\BecasMds\PersonaBundle\Entity\MovimientoSocial $movimientoSocial = null)
    {
        
        $this->movimientoSocial = $movimientoSocial;
    
        return $this;
    }

    /**
     * Get movimientoSocial
     *
     * @return \BecasMds\PersonaBundle\Entity\MovimientoSocial 
     */
    public function getMovimientoSocial()
    {
        return $this->movimientoSocial;
    }

    /**
     * Add formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     * @return Referente
     */
    public function addFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {
        $this->formacion[] = $formacion;
    
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
     * Add domicilio
     *
     * @param \BecasMds\PersonaBundle\Entity\Domicilio $domicilio
     * @return Referente
     */
    public function addDomicilio(\BecasMds\PersonaBundle\Entity\Domicilio $domicilio)
    {
        $this->domicilio[] = $domicilio;
    
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
     * Add becado
     *
     * @param \BecasMds\PersonaBundle\Entity\Becado $becado
     * @return Referente
     */
    public function addBecado(\BecasMds\PersonaBundle\Entity\Becado $becado)
    {
        $this->becado[] = $becado;
    
        return $this;
    }

    /**
     * Remove becado
     *
     * @param \BecasMds\PersonaBundle\Entity\Becado $becado
     */
    public function removeBecado(\BecasMds\PersonaBundle\Entity\Becado $becado)
    {
        $this->becado->removeElement($becado);
    }

    /**
     * Get becado
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBecado()
    {
        return $this->becado;
    }
    
    public function __sleep() {
        return array();
    }
}