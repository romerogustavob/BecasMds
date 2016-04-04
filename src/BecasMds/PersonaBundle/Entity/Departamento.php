<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
    * @ORM\Column(name="nombre", type="string", length=255)
    */
    private $nombre; 
    
    
    /**
     * @ORM\OneToMany(targetEntity="Domicilio", mappedBy="departamento")
     */
    private $domicilio;
    
    /**
     * @ORM\OneToMany(targetEntity="Localidad", mappedBy="departamento")
     */
    protected $localidad;
    
    public function __construct() {
        $this->domicilio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departamento = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var string
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Departamento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add domicilio
     *
     * @param \BecasMds\PersonaBundle\Entity\Domicilio $domicilio
     * @return Departamento
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
     * Get domicilio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set localidad
     *
     * @param \BecasMds\PersonaBundle\Entity\Localidad $localidad
     * @return Departamento
     */
    public function setLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return \BecasMds\PersonaBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Add localidad
     *
     * @param \BecasMds\PersonaBundle\Entity\Localidad $localidad
     * @return Departamento
     */
    public function addLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad)
    {
        $this->localidad[] = $localidad;
    
        return $this;
    }

    /**
     * Remove localidad
     *
     * @param \BecasMds\PersonaBundle\Entity\Localidad $localidad
     */
    public function removeLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad)
    {
        $this->localidad->removeElement($localidad);
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Departamento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}