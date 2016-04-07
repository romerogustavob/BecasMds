<?php

namespace BecasMds\CertificacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @return string 
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
}