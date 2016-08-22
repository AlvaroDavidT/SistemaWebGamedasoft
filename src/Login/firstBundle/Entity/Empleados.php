<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleados
 *
 * @ORM\Table(name="empleados", indexes={@ORM\Index(name="fk_Empleados_Perfiles1", columns={"Perfiles_id"}), @ORM\Index(name="fk_Empleados_Departamentos1", columns={"Departamentos_id"})})
 * @ORM\Entity
 */
class Empleados
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
     * @ORM\Column(name="Apellido", type="string",length=45, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="Foto", type="blob", length=65535, nullable=true)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=45, nullable=false)
     */
    private $direccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Genero", type="boolean", nullable=true)
     */
    private $genero;

    /**
     * @var \Departamentos
     *
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Departamentos_id", referencedColumnName="id")
     * })
     */
    private $departamentos;

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
     * @return Empleados
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
     * @return Empleados
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
     * @return Empleados
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
     * @return Empleados
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
     * @return Empleados
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
     * @return Empleados
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Empleados
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleados
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set genero
     *
     * @param boolean $genero
     *
     * @return Empleados
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return boolean
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set departamentos
     *
     * @param \Login\firstBundle\Entity\Departamentos $departamentos
     *
     * @return Empleados
     */
    public function setDepartamentos(\Login\firstBundle\Entity\Departamentos $departamentos = null)
    {
        $this->departamentos = $departamentos;

        return $this;
    }

    /**
     * Get departamentos
     *
     * @return \Login\firstBundle\Entity\Departamentos
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }

    /**
     * Set perfiles
     *
     * @param \Login\firstBundle\Entity\Perfiles $perfiles
     *
     * @return Empleados
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
