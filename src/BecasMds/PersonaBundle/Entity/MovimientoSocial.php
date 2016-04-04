<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * MovimientoSocial
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\MovimientoSocialRepository")
 */
class MovimientoSocial
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
     * @ORM\OneToMany(targetEntity="Referente", mappedBy="movimientoSocial")
     */
    protected $referente;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
        return $this;
    }
    
    public function __construct() {
        $this->referente=new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return MovimientoSocial
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return MovimientoSocial
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return MovimientoSocial
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
        return $this->getNombre();
    }

    /**
     * Add referente
     *
     * @param \BecasMds\PersonaBundle\Entity\Referente $referente
     * @return MovimientoSocial
     */
    public function addReferente(\BecasMds\PersonaBundle\Entity\Referente $referente)
    {
        
        $this->referente[] = $referente;
    
        return $this;
    }

    /**
     * Remove referente
     *
     * @param \BecasMds\PersonaBundle\Entity\Referente $referente
     */
    public function removeReferente(\BecasMds\PersonaBundle\Entity\Referente $referente)
    {
        $this->referente->removeElement($referente);
    }

    /**
     * Get referente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReferente()
    {
        return $this->referente;
    }
}