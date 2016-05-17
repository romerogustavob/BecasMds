<?php

namespace BecasMds\CertificacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotBlankValidator;


/**
 * Certificacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\CertificacionBundle\Entity\CertificacionRepository")
 */
class Certificacion
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
     * @ORM\Column(name="becatipo", type="string")
     * @Assert\NotBlank()
     */
    private $becatipo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="becafuncion", type="string")
     * @Assert\NotBlank()
     */
    private $becafuncion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", scale=3)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="descuentoDias", type="integer")
     */
    private $descuentoDias;

    /**
     * @var string
     *
     * @ORM\Column(name="totalPagar", type="decimal", scale=3)
     */
    private $totalPagar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="certificado", type="boolean")
     */
    private $certificado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mesCertificacion", type="date")
     */
    private $mesCertificacion;
    
    /**
     * @ORM\ManyToOne(targetEntity="\BecasMds\BecaBundle\Entity\BecadoBeca", inversedBy="certificacion")
     * @ORM\JoinColumn(name="becadobeca_id", referencedColumnName="id")
     */
    protected $becadobeca;
    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Certificacion
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
     * Set descuentoDias
     *
     * @param integer $descuentoDias
     * @return Certificacion
     */
    public function setDescuentoDias($descuentoDias)
    {
        $this->descuentoDias = $descuentoDias;
    
        return $this;
    }

    /**
     * Get descuentoDias
     *
     * @return integer 
     */
    public function getDescuentoDias()
    {
        return $this->descuentoDias;
    }

    /**
     * Set totalPagar
     *
     * @param string $totalPagar
     * @return Certificacion
     */
    public function setTotalPagar($totalPagar)
    {
        $this->totalPagar = $totalPagar;
    
        return $this;
    }

    /**
     * Get totalPagar
     *
     * @return decimal 
     */
    public function getTotalPagar()
    {
        return $this->totalPagar;
    }

    /**
     * Set certificado
     *
     * @param boolean $certificado
     * @return Certificacion
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;
    
        return $this;
    }

    /**
     * Get certificado
     *
     * @return boolean 
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * Set mesCertificacion
     *
     * @param \DateTime $mesCertificacion
     * @return Certificacion
     */
    public function setMesCertificacion($mesCertificacion)
    {
        $this->mesCertificacion = $mesCertificacion;
    
        return $this;
    }

    /**
     * Get mesCertificacion
     *
     * @return \DateTime 
     */
    public function getMesCertificacion()
    {
        return $this->mesCertificacion;
    }


    /**
     * Set becadobeca
     *
     * @param \BecasMds\BecaBundle\Entity\BecadoBeca $becadobeca
     * @return Certificacion
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
    
    public function getBecaMonto(){
        return $this->getBecadobeca()->getBeca()->getMonto();
    }
    
    public function getBecado(){
        return $this->getBecadobeca()->getBecado();
    }

    /**
     * Set becatipo
     *
     * @param string $becatipo
     * @return Certificacion
     */
    public function setBecatipo($becatipo)
    {
        $this->becatipo = $becatipo;

        return $this;
    }

    /**
     * Get becatipo
     *
     * @return string 
     */
    public function getBecatipo()
    {
        return $this->becatipo;
    }

    /**
     * Set becafuncion
     *
     * @param string $becafuncion
     * @return Certificacion
     */
    public function setBecafuncion($becafuncion)
    {
        $this->becafuncion = $becafuncion;

        return $this;
    }

    /**
     * Get becafuncion
     *
     * @return string 
     */
    public function getBecafuncion()
    {
        return $this->becafuncion;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Certificacion
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
     * @return Certificacion
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
     * @return Certificacion
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
     * @return Certificacion
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
}
