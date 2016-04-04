<?php

namespace BecasMds\FormacionBundle\Entity;

use BecasMds\FormacionBundle\Entity\Educacion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terciario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\FormacionBundle\Entity\TerciarioRepository")
 */
class Terciario extends Educacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=255)
     */
    protected $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel", type="string", length=255)
     */
    protected $nivel;

    /**
     * @ORM\OneToMany(targetEntity="Formacion", mappedBy="formacion")
     */
    protected $formacion;
    
    public function __construct() {
        $this->formacion=new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set carrera
     *
     * @param string $carrera
     * @return Terciario
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    
        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Terciario
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    
    public function __toString() {
        return $this->getInstitucion().'-'.$this->getTipoEducacion().'-'.$this->getCarrera().'-'.$this->getNivel().'-'.$this->getTitulo();
    }
    /**
     * @var string
     */
    protected $institucion;

    /**
     * @var string
     */
    protected $tipoEducacion;

    /**
     * @var string
     */
    protected $titulo;


    /**
     * Set institucion
     *
     * @param string $institucion
     * @return Terciario
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;
    
        return $this;
    }

    /**
     * Get institucion
     *
     * @return string 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set tipoEducacion
     *
     * @param string $tipoEducacion
     * @return Terciario
     */
    public function setTipoEducacion($tipoEducacion)
    {
        $this->tipoEducacion = $tipoEducacion;
    
        return $this;
    }

    /**
     * Get tipoEducacion
     *
     * @return string 
     */
    public function getTipoEducacion()
    {
        return $this->tipoEducacion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Terciario
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Add formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     * @return Terciario
     */
    public function addFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {
        $this->formacion[] = $formacion;
    
        return $this;
    }

    /**
     * Remove formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     */
    public function removeFormacion(\BecasMds\FormacionBundle\Entity\Formacion $formacion)
    {
        $this->formacion->removeElement($formacion);
    }

    /**
     * Get formacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormacion()
    {
        return $this->formacion;
    }
    
    public function getTerciarioLista(){
        return $this->getInstitucion().'-'.$this->getTipoEducacion().'-'.$this->getCarrera().'-'.$this->getNivel().'-'.$this->getTitulo();

    }
}