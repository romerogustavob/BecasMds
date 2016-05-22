<?php

namespace BecasMds\BecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BecasMds\PersonaBundle\Entity\Becado;

/**
 * BecadoBeca
 *
 * @ORM\Table(name="becado_beca")
 * @ORM\Entity(repositoryClass="BecasMds\BecaBundle\Entity\BecadoBecaRepository")
 */
class BecadoBeca {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\BecasMds\PersonaBundle\Entity\Becado", inversedBy="becadobeca")
     * @ORM\JoinColumn(name="becado_id", referencedColumnName="id")
     */
    private $becado;

    /**
     * @ORM\ManyToOne(targetEntity="Beca", inversedBy="becadobeca")
     * @ORM\JoinColumn(name="beca_id", referencedColumnName="id")
     */
    protected $beca;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="\BecasMds\CertificacionBundle\Entity\Certificacion", mappedBy="becadobeca", cascade={"persist"})
     */
    protected $certificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="datetime", nullable=true)
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaBaja", type="datetime", nullable=true)
     */
    private $fechaBaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="detalles", type="string", length=255, nullable=true)
     */
    private $detalles;
    
    /**
     * @ORM\ManyToOne(targetEntity="BecasMds\UsuarioBundle\Entity\User")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    protected $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity="BecasMds\UsuarioBundle\Entity\User")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     */
    protected $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;
    
    /**
     * @ORM\OneToOne(targetEntity="BecaVulnerable", inversedBy="becadobeca")
     * @ORM\JoinColumn(name="becavulnerable_id", referencedColumnName="id")
     */
    protected $becaVulnerable;

    public function __construct() {
        
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return BecadoBeca
     */
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return BecadoBeca
     */
    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return BecadoBeca
     */
    public function setActivo($activo) {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo() {
        return $this->activo;
    }

    /**
     * Set detalles
     *
     * @param string $detalles
     * @return BecadoBeca
     */
    public function setDetalles($detalles) {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string 
     */
    public function getDetalles() {
        return $this->detalles;
    }

    /**
     * Set becado
     *
     * @param \BecasMds\PersonaBundle\Entity\Becado $becado
     * @return BecadoBeca
     */
    public function setBecado(\BecasMds\PersonaBundle\Entity\Becado $becado = null) {
        $this->becado = $becado;

        return $this;
    }

    /**
     * Get becado
     *
     * @return \BecasMds\PersonaBundle\Entity\Becado 
     */
    public function getBecado() {
        return $this->becado;
    }

    /**
     * Set beca
     *
     * @param \BecasMds\BecaBundle\Entity\Beca $beca
     * @return BecadoBeca
     */
    public function setBeca(\BecasMds\BecaBundle\Entity\Beca $beca = null) {
        $this->beca = $beca;

        return $this;
    }
    
    public function getBecadoString(){
        return $this->getBecado()->getBecadoLista();
    }

    /**
     * Get beca
     *
     * @return \BecasMds\BecaBundle\Entity\Beca 
     */
    public function getBeca() {
        return $this->beca;
    }

    public function __toString() {
        return $this->getBecado(). '-' .$this->getBeca() ;
    }

    /**
     * Add certificacion
     *
     * @param \BecasMds\CertificacionBundle\Entity\Certificacion $certificacion
     * @return BecadoBeca
     */
    public function addCertificacion(\BecasMds\CertificacionBundle\Entity\Certificacion $certificacion) {
        $this->certificacion[] = $certificacion;

        return $this;
    }

    /**
     * Remove certificacion
     *
     * @param \BecasMds\CertificacionBundle\Entity\Certificacion $certificacion
     */
    public function removeCertificacion(\BecasMds\CertificacionBundle\Entity\Certificacion $certificacion) {
        $this->certificacion->removeElement($certificacion);
    }

    /**
     * Get certificacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCertificacion() {
        return $this->certificacion;
    }

    
    public function __sleep() {
        return array();
    }
    
    public function getBecas(){
        return $this->getBeca();
    }

    /**
     * Set becaVulnerable
     *
     * @param \BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable
     * @return BecadoBeca
     */
    public function setBecaVulnerable(\BecasMds\BecaBundle\Entity\BecaVulnerable $becaVulnerable = null)
    {
        $this->becaVulnerable = $becaVulnerable;

        return $this;
    }

    /**
     * Get becaVulnerable
     *
     * @return \BecasMds\BecaBundle\Entity\BecaVulnerable 
     */
    public function getBecaVulnerable()
    {
        return $this->becaVulnerable;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return BecadoBeca
     */
    public function setCreatedBy($createdBy)
    {
        if (is_null($this->getCreatedBy())){
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
     * @return BecadoBeca
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return BecadoBeca
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($this->getUpdatedBy())){
            $this->createdAt = $createdAt;
        }
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
     * @return BecadoBeca
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
     * Get updatedBy
     *
     * @return \BecasMds\UsuarioBundle\Entity\User 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
