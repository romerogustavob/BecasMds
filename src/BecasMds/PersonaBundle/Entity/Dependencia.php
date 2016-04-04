<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Dependencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dependencia
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
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nombre;
    
    /**
     * @ORM\ManyToOne(targetEntity="Responsable", inversedBy="dependencia")
     * @ORM\JoinColumn(name="dependencia_id", referencedColumnName="id")
     */
    protected $responsable;


    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @ORM\OneToMany(targetEntity="Becado", mappedBy="dependencia")
     */
    protected $becado;
    
    public function __construct() {
        $this->becado=new \Doctrine\Common\Collections\ArrayCollection();

    }
    
    public function setId($id){
        $this->id=$id;
        return $this;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Dependencia
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

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Dependencia
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    
        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Dependencia
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
    
    public function __toString() {
        return $this->getNombre().' Responsable:'.$this->getResponsable()->getApellidos().', '.$this->getResponsable()->getNombres();
    }

    /**
     * Set responsable
     *
     * @param \BecasMds\PersonaBundle\Entity\Responsable $responsable
     * @return Dependencia
     */
    public function setResponsable(\BecasMds\PersonaBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return \BecasMds\PersonaBundle\Entity\Responsable 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Add becado
     *
     * @param \BecasMds\PersonaBundle\Entity\Becado $becado
     * @return Dependencia
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
}