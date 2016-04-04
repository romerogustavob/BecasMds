<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LugarAfectacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\LugarAfectacionRepository")
 */
class LugarAfectacion
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
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    /**
     * @ORM\OneToMany(targetEntity="Becado", mappedBy="lugarAfectacion")
     */
    private $becado;
    
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
     * @return LugarAfectacion
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return LugarAfectacion
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
     * Constructor
     */
    public function __construct()
    {
        $this->becado = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->getNombre();
    }
    
    /**
     * Add becado
     *
     * @param \BecasMds\PersonaBundle\Entity\Becado $becado
     * @return LugarAfectacion
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