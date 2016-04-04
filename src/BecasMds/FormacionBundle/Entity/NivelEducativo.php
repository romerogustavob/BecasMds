<?php

namespace BecasMds\FormacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelEducativo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NivelEducativo
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
     * @ORM\OneToMany(targetEntity="Formacion", mappedBy="formacion")
     */
    private $formacion;

    public function __construct() {
        $this->formacion=new \Doctrine\Common\Collections\ArrayCollection();
    }
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return NivelEducativo
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
     * Add formacion
     *
     * @param \BecasMds\FormacionBundle\Entity\Formacion $formacion
     * @return NivelEducativo
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

    public function __toString() {
        return $this->getDescripcion();
    }
}