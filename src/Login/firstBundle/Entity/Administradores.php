<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administradores
 *
 * @ORM\Table(name="administradores", indexes={@ORM\Index(name="fk_Administradores_Perfiles", columns={"Perfiles_id"})})
 * @ORM\Entity
 */
class Administradores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="CIdentidad", type="string",length=10, nullable=false)
     */
    private $cidentidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=20, nullable=false)
     */
    private $telefono;

    /**
     * @var \Perfiles
     *
     * @ORM\ManyToOne(targetEntity="Perfiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Perfiles_id", referencedColumnName="id")
     * })
     */
    private $perfiles;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Administradores
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Administradores
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cidentidad
     *
     * @param integer $cidentidad
     *
     * @return Administradores
     */
    public function setCidentidad($cidentidad)
    {
        $this->cidentidad = $cidentidad;

        return $this;
    }

    /**
     * Get cidentidad
     *
     * @return integer
     */
    public function getCidentidad()
    {
        return $this->cidentidad;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Administradores
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Administradores
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Administradores
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set perfiles
     *
     * @param \Login\firstBundle\Entity\Perfiles $perfiles
     *
     * @return Administradores
     */
    public function setPerfiles(\Login\firstBundle\Entity\Perfiles $perfiles = null)
    {
        $this->perfiles = $perfiles;

        return $this;
    }

    /**
     * Get perfiles
     *
     * @return \Login\firstBundle\Entity\Perfiles
     */
    public function getPerfiles()
    {
        return $this->perfiles;
    }
}
