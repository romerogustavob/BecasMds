<?php

namespace BecasMds\FormacionBundle\Entity;

use BecasMds\FormacionBundle\Entity\Educacion;
use Doctrine\ORM\Mapping as ORM;

/**
 * Primario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BecasMds\FormacionBundle\Entity\PrimarioRepository")
 */
class Primario extends Educacion
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Formacion", mappedBy="formacion")
     */
    protected $formacion;
    
    public function __construct() {
        $this->formacion=new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->getInstitucion().'-'.$this->getInstitucion().'-'.$this->getTitulo();
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
     * @return Primario
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
     * @return Primario
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
     * @return Primario
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
     * @return Primario
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
    
    public function getPrimarioLista(){
        return $this->getInstitucion().'-'.$this->getInstitucion().'-'.$this->getTitulo();
    }
}