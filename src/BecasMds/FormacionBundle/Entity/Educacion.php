<?php

namespace BecasMds\FormacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Educacion
 *
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="tipo_educacion", type="string")
 * @ORM\DiscriminatorMap({"educacion" = "Educacion", "universidad" = "Universidad", "terciario" = "Terciario", "secundario" = "Secundario", "primario"="Primario"})
 */
class Educacion
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
     * @ORM\Column(name="institucion", type="string", length=255)
     */
    protected $institucion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoeducacion", type="string", length=255)
     */
    protected $tipoEducacion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    protected $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set institucion
     *
     * @param string $institucion
     * @return Educacion
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
     * Set titulo
     *
     * @param string $titulo
     * @return Educacion
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Educacion
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
     * Set tipoEducacion
     *
     * @param string $tipoEducacion
     * @return Educacion
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
}