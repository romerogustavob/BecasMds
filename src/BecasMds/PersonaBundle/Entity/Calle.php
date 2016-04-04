<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calle
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Calle
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
     * @ORM\OneToMany(targetEntity="Domicilio", mappedBy="calle")
     */
    private $domicilio;

     /**
     * @ORM\ManyToOne(targetEntity="Localidad", inversedBy="calle")
     * @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     */
    private $localidad;
    
    public function __construct() {
        $this->domicilio = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var string
     *
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
     * @return Calle
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
     * @return Calle
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
     * @return Calle
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
     * Set nombre
     *
     * @param string $nombre
     * @return Calle
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
    
    public function getCalleLista(){
        return $this->getNombre();
    }
}