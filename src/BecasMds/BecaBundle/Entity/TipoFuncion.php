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
    
    /**
     * @ORM\OneToMany(targetEntity="BecaVulnerable", mappedBy="tipoFuncion")
     */
    private $becaVulnerable;
    
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

    
    public function __construct() {
        $this->beca=new ArrayCollection();
        $this->becaVulnerable=new ArrayCollection();
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

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return TipoFuncion
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

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
     * @return TipoFuncion
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
     * @return TipoFuncion
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
     * @return TipoFuncion
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
     * Add becaVulnerable
     *
     * @param \BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable
     * @return TipoFuncion
     */
    public function addBecaVulnerable(\BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable)
    {
        $this->becaVulnerable[] = $becaVulnerable;

        return $this;
    }

    /**
     * Remove becaVulnerable
     *
     * @param \BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable
     */
    public function removeBecaVulnerable(\BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable)
    {
        $this->becaVulnerable->removeElement($becaVulnerable);
    }

    /**
     * Get becaVulnerable
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBecaVulnerable()
    {
        return $this->becaVulnerable;
    }
}
