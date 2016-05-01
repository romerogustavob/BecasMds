<?php

namespace BecasMds\UsuarioBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank(message="Debe ingresar un Nro. de Documento para el usuario", groups={"Registration", "Profile"})
     * @var integer
     */
    protected $dni;
    
    /**
     * @ORM\Column(type="string", length=40, nullable=false)
     * @Assert\NotBlank(message="Debe ingresar el Apellido/s del usuario", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     max=255,
     *     maxMessage="Ingrese como máximo 40 caracteres para el Apellido/s",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $apellidos;
    
    /**
     *@ORM\Column(type="string", length=50, nullable=false)
     *@Assert\NotBlank(message="Debe ingresar el Nombre/s del usuario", groups={"Registration", "Profile"}) 
     *@Assert\Length(
     *     max=255,
     *     maxMessage="Ingrese como máximo 50 caracteres para el Nombre/s",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nombres;
    
    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $created_at;
    
    /**
     * @ORM\Column(type="datetime")
     * @var datetime
     */
    protected $updated_at;
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * Set dni
     *
     * @param integer $dni
     * @return User
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return integer 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return User
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return User
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function addRole($role) {
        if($role==0){
            array_push($this->roles, 'ROLE_USER');
        }
        if($role==1){
            array_push($this->roles, 'ROLE_ADMIN');
        }
    }
}
