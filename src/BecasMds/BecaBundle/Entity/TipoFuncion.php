<?php

namespace BecasMds\BecaBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TipoFuncion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\BecaBundle\Entity\TipoFuncionRepository")
 */
class TipoFuncion
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\OneToMany(targetEntity="Beca", mappedBy="tipoFuncion")
     */
    private $beca;
    
    public function __construct() {
        $this->beca=new ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoFuncion
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
     * Set activo
     *
     * @param boolean $activo
     * @return TipoFuncion
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
     * Add beca
     *
     * @param \BecasMds\BecaBundle\Entity\Beca $beca
     * @return TipoFuncion
     */
    public function addBeca(\BecasMds\BecaBundle\Entity\Beca $beca)
    {
        $this->beca[] = $beca;
    
        return $this;
    }

    /**
     * Remove beca
     *
     * @param \BecasMds\BecaBundle\Entity\Beca $beca
     */
    public function removeBeca(\BecasMds\BecaBundle\Entity\Beca $beca)
    {
        $this->beca->removeElement($beca);
    }

    /**
     * Get beca
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBeca()
    {
        return $this->beca;
    }
    
    public function __toString() {
        return $this->getDescripcion();
    }
}