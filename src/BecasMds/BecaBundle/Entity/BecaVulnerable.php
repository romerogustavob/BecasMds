<?php

namespace BecasMds\BecaBundle\Entity;

use BecasMds\PersonaBundle\Entity\Becado;
use Doctrine\ORM\Mapping as ORM;

/**
 * BecaVulnerable
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\BecaBundle\Entity\BecaVulnerableRepository")
 */
class BecaVulnerable
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
     * @ORM\ManyToOne(targetEntity="TipoFuncion", inversedBy="becaVulnerable")
     * @ORM\JoinColumn(name="tipo_funcion_id", referencedColumnName="id")
     */
    private $tipoFuncion;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="float", scale=3)
     */
    private $monto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta", type="datetime")
     */
    private $fechaalta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechabaja", type="datetime", nullable=true)
     */
    private $fechabaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity="BecadoBeca", mappedBy="becaVulnerable")
     */
    protected $becadobeca;
    
    /**
     * @var string
     *
     * @ORM\Column(name="detalles", type="string", length=255)
     */
    private $detalles;
    
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
     * @return BecaVulnerable
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
     * Set monto
     *
     * @param string $monto
     * @return BecaVulnerable
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return BecaVulnerable
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime 
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set fechabaja
     *
     * @param \DateTime $fechabaja
     * @return BecaVulnerable
     */
    public function setFechabaja($fechabaja)
    {
        $this->fechabaja = $fechabaja;

        return $this;
    }

    /**
     * Get fechabaja
     *
     * @return \DateTime 
     */
    public function getFechabaja()
    {
        return $this->fechabaja;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return BecaVulnerable
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return BecaVulnerable
     */
    public function setCreatedBy($createdBy)
    {
        if ($this->getCreatedBy()===null){
            $this->createdBy = $createdBy;
        }
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return BecaVulnerable
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return BecaVulnerable
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return BecaVulnerable
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set tipoFuncion
     *
     * @param \BecasMds\BecaBundle\Entity\TipoFuncion $tipoFuncion
     * @return BecaVulnerable
     */
    public function setTipoFuncion(\BecasMds\BecaBundle\Entity\TipoFuncion $tipoFuncion = null)
    {
        $this->tipoFuncion = $tipoFuncion;

        return $this;
    }

    /**
     * Get tipoFuncion
     *
     * @return \BecasMds\BecaBundle\Entity\TipoFuncion 
     */
    public function getTipoFuncion()
    {
        return $this->tipoFuncion;
    }


    /**
     * Set becadobeca
     *
     * @param \BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca
     * @return BecaVulnerable
     */
    public function setBecadobeca(\BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca = null)
    {
        $this->becadobeca = $becadobeca;

        return $this;
    }

    /**
     * Get becadobeca
     *
     * @return \BecasMds\BecaBundle\Entity\BecadoBeca 
     */
    public function getBecadobeca()
    {
        return $this->becadobeca;
    }
    
    public function __toString(){
        return $this->getNombre().'-'.$this->getTipoFuncion().'-'.$this->getMonto();
    }

    /**
     * Set detalles
     *
     * @param string $detalles
     * @return BecaVulnerable
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string 
     */
    public function getDetalles()
    {
        return $this->detalles;
    }
}
