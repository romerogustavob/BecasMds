<?php

namespace BecasMds\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\PersonaBundle\Entity\DomicilioRepository")
 */
class Domicilio
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
     * @ORM\ManyToOne(targetEntity="Localidad", inversedBy="domicilio")
     * @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     */
    protected $localidad;

    /**
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="domicilio")
     * @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     */
    protected $departamento;

    /**
     * @ORM\ManyToOne(targetEntity="Barrio", inversedBy="domicilio")
     * @ORM\JoinColumn(name="barrio_id", referencedColumnName="id")
     */
    private $barrio;

    /**
     * @ORM\ManyToOne(targetEntity="Calle", inversedBy="domicilio")
     * @ORM\JoinColumn(name="calle_id", referencedColumnName="id")
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="dpto", type="string", length=255, nullable=true)
     */
    private $dpto;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=255, nullable=true)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="edificio", type="string", length=255, nullable=true)
     */
    private $edificio;

    /**
     * @var string
     *
     * @ORM\Column(name="manzana", type="string", length=255, nullable=true)
     */
    private $manzana;

    /**
     * @var string
     *
     * @ORM\Column(name="tira", type="string", length=255, nullable=true)
     */
    private $tira;

    /**
     * @var string
     *
     * @ORM\Column(name="parcela", type="string", length=255, nullable=true)
     */
    private $parcela;

    /**
     * @var string
     *
     * @ORM\Column(name="quinta", type="string", length=255, nullable=true)
     */
    private $quinta;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad_funcional", type="string", length=255, nullable=true)
     */
    private $unidadFuncional;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="referencias", type="string", length=255, nullable=true)
     */
    private $referencias;

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
     * Set numero
     *
     * @param string $numero
     * @return Domicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set dpto
     *
     * @param string $dpto
     * @return Domicilio
     */
    public function setDpto($dpto)
    {
        $this->dpto = $dpto;
    
        return $this;
    }

    /**
     * Get dpto
     *
     * @return string 
     */
    public function getDpto()
    {
        return $this->dpto;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return Domicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;
    
        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set edificio
     *
     * @param string $edificio
     * @return Domicilio
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;
    
        return $this;
    }

    /**
     * Get edificio
     *
     * @return string 
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set manzana
     *
     * @param string $manzana
     * @return Domicilio
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;
    
        return $this;
    }

    /**
     * Get manzana
     *
     * @return string 
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set tira
     *
     * @param string $tira
     * @return Domicilio
     */
    public function setTira($tira)
    {
        $this->tira = $tira;
    
        return $this;
    }

    /**
     * Get tira
     *
     * @return string 
     */
    public function getTira()
    {
        return $this->tira;
    }

    /**
     * Set parcela
     *
     * @param string $parcela
     * @return Domicilio
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;
    
        return $this;
    }

    /**
     * Get parcela
     *
     * @return string 
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set quinta
     *
     * @param string $quinta
     * @return Domicilio
     */
    public function setQuinta($quinta)
    {
        $this->quinta = $quinta;
    
        return $this;
    }

    /**
     * Get quinta
     *
     * @return string 
     */
    public function getQuinta()
    {
        return $this->quinta;
    }

    /**
     * Set unidadFuncional
     *
     * @param string $unidadFuncional
     * @return Domicilio
     */
    public function setUnidadFuncional($unidadFuncional)
    {
        $this->unidadFuncional = $unidadFuncional;
    
        return $this;
    }

    /**
     * Get unidadFuncional
     *
     * @return string 
     */
    public function getUnidadFuncional()
    {
        return $this->unidadFuncional;
    }

    /**
     * Set tipoDomicilio
     *
     * @param string $tipoDomicilio
     * @return Domicilio
     */
    public function setTipoDomicilio($tipoDomicilio)
    {
        $this->tipoDomicilio = $tipoDomicilio;
    
        return $this;
    }

    /**
     * Get tipoDomicilio
     *
     * @return string 
     */
    public function getTipoDomicilio()
    {
        return $this->tipoDomicilio;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Domicilio
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Domicilio
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set referencias
     *
     * @param string $referencias
     * @return Domicilio
     */
    public function setReferencias($referencias)
    {
        $this->referencias = $referencias;
    
        return $this;
    }

    /**
     * Get referencias
     *
     * @return string 
     */
    public function getReferencias()
    {
        return $this->referencias;
    }

    /**
     * Set localidad
     *
     * @param \BecasMds\PersonaBundle\Entity\Localidad $localidad
     * @return Domicilio
     */
    public function setLocalidad(\BecasMds\PersonaBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return \BecasMds\PersonaBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set departamento
     *
     * @param \BecasMds\PersonaBundle\Entity\Departamento $departamento
     * @return Domicilio
     */
    public function setDepartamento(\BecasMds\PersonaBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \BecasMds\PersonaBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set barrio
     *
     * @param \BecasMds\PersonaBundle\Entity\Barrio $barrio
     * @return Domicilio
     */
    public function setBarrio(\BecasMds\PersonaBundle\Entity\Barrio $barrio = null)
    {
        $this->barrio = $barrio;
    
        return $this;
    }

    /**
     * Get barrio
     *
     * @return \BecasMds\PersonaBundle\Entity\Barrio 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set calle
     *
     * @param \BecasMds\PersonaBundle\Entity\Calle $calle
     * @return Domicilio
     */
    public function setCalle(\BecasMds\PersonaBundle\Entity\Calle $calle = null)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return \BecasMds\PersonaBundle\Entity\Calle 
     */
    public function getCalle()
    {
        return $this->calle;
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
     * @return Domicilio
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
    
    public function __toString() {
        return $this->getLocalidad().' - '.$this->getBarrio().' - '.$this->getCalle().' - '. $this->getNumero().' - '.$this->getReferencias();
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Domicilio
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
     * @return Domicilio
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
     * @return Domicilio
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
     * @return Domicilio
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
