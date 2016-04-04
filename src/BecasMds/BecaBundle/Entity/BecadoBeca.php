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
    
}
