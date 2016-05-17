<?php

namespace BecasMds\FormacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BecasMds\PersonaBundle\Entity\Persona;
/**
 * Formacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\FormacionBundle\Entity\FormacionRepository")
 */
class Formacion
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
     * @ORM\ManyToOne(targetEntity="Oficio", inversedBy="formacion")
     * @ORM\JoinColumn(name="oficio_id", referencedColumnName="id")
     */
    private $oficio;

    /**
     * @ORM\ManyToOne(targetEntity="NivelEducativo", inversedBy="formacion")
     * @ORM\JoinColumn(name="niveleducativo_id", referencedColumnName="id")
     */
    private $nivelEducativo;
    
    /**
     * @ORM\ManyToOne(targetEntity="Institucion", inversedBy="formacion")
     * @ORM\JoinColumn(name="institucion_id", referencedColumnName="id")
     */
    private $institucion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Profesion", inversedBy="formacion")
     * @ORM\JoinColumn(name="profesion_id", referencedColumnName="id")
     */
    private $profesion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Perfil", inversedBy="formacion")
     * @ORM\JoinColumn(name="perfil_id", referencedColumnName="id")
     */
    private $perfil;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="BecasMds\PersonaBundle\Entity\Persona", inversedBy="formacion")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     */
    protected $persona;
    
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
     * Set oficio
     *
     * @param \BecasMds\FormacionBundle\Entity\Oficio $oficio
     * @return Formacion
     */
    public function setOficio(\BecasMds\FormacionBundle\Entity\Oficio $oficio = null)
    {
        $this->oficio = $oficio;
    
        return $this;
    }

    /**
     * Get oficio
     *
     * @return \BecasMds\FormacionBundle\Entity\Oficio 
     */
    public function getOficio()
    {
        return $this->oficio;
    }

    /**
     * Set nivelEducativo
     *
     * @param \BecasMds\FormacionBundle\Entity\NivelEducativo $nivelEducativo
     * @return Formacion
     */
    public function setNivelEducativo(\BecasMds\FormacionBundle\Entity\NivelEducativo $nivelEducativo = null)
    {
        $this->nivelEducativo = $nivelEducativo;
    
        return $this;
    }

    /**
     * Get nivelEducativo
     *
     * @return \BecasMds\FormacionBundle\Entity\NivelEducativo 
     */
    public function getNivelEducativo()
    {
        return $this->nivelEducativo;
    }

    /**
     * Set institucion
     *
     * @param \BecasMds\FormacionBundle\Entity\Institucion $institucion
     * @return Formacion
     */
    public function setInstitucion(\BecasMds\FormacionBundle\Entity\Institucion $institucion = null)
    {
        $this->institucion = $institucion;
    
        return $this;
    }

    /**
     * Get institucion
     *
     * @return \BecasMds\FormacionBundle\Entity\Institucion 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set perfil
     *
     * @param \BecasMds\FormacionBundle\Entity\Perfil $perfil
     * @return Formacion
     */
    public function setPerfil(\BecasMds\FormacionBundle\Entity\Perfil $perfil = null)
    {
        $this->perfil = $perfil;
    
        return $this;
    }

    /**
     * Get perfil
     *
     * @return \BecasMds\FormacionBundle\Entity\Perfil 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Formacion
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
    
    public function __toString() {
        return $this->getInstitucion().'-'.$this->getNivelEducativo().'-'.$this->getProfesion();
    }

    /**
     * Set profesion
     *
     * @param \BecasMds\FormacionBundle\Entity\Profesion $profesion
     * @return Formacion
     */
    public function setProfesion(\BecasMds\FormacionBundle\Entity\Profesion $profesion = null)
    {
        $this->profesion = $profesion;
    
        return $this;
    }

    /**
     * Get profesion
     *
     * @return \BecasMds\FormacionBundle\Entity\Profesion 
     */
    public function getProfesion()
    {
        return $this->profesion;
    }
    

    public function addPersona(\BecasMds\PersonaBundle\Entity\Persona $persona=null){
        if (!$this->persona->contains($persona)){
            $this->persona->add($persona);
        }
    }
            
    
    /**
     * Set persona
     *
     * @param \BecasMds\PersonaBundle\Entity\Persona $persona
     * @return Formacion
     */
    public function setPersona(\BecasMds\PersonaBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get persona
     *
     * @return \BecasMds\PersonaBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Formacion
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
     * @return Formacion
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
     * @return Formacion
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
     * @return Formacion
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
