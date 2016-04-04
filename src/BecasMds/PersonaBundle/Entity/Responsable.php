<?php

namespace BecasMds\PersonaBundle\Entity;

use BecasMds\PersonaBundle\Entity\Persona;
use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\ResponsableRepository")
 */
class Responsable extends Persona
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
     * @ORM\OneToMany(targetEntity="Dependencia", mappedBy="responsable")
     */
    protected $dependencia;
    
    public function __construct() {
         $this->dependencia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var string
     */
    protected $dni;

    /**
     * @var string
     */
    protected $apellidos;

    /**
     * @var string
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
     * Set dni
     *
     * @param string $dni
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
     * Add dependencia
     *
     * @param \BecasMds\PersonaBundle\Entity\Dependencia $dependencia
     * @return Responsable
     */
    public function addDependencia(\BecasMds\PersonaBundle\Entity\Dependencia $dependencia)
    {
        $this->dependencia[] = $dependencia;
    
        return $this;
    }

    /**
     * Remove dependencia
     *
     * @param \BecasMds\PersonaBundle\Entity\Dependencia $dependencia
     */
    public function removeDependencia(\BecasMds\PersonaBundle\Entity\Dependencia $dependencia)
    {
        $this->dependencia->removeElement($dependencia);
    }

    /**
     * Get dependencia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }
    
    public function __toString() {
        return 'Dni: '.$this->getDni().' - '.$this->getApellidos().', '.$this->getNombres();
    }
    
    public function getResponsablesLista(){
        return 'Dni: '.$this->getDni().' - '.$this->getApellidos().', '.$this->getNombres();
    }
}