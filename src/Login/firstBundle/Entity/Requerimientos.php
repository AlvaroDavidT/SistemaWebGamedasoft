<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requerimientos
 *
 * @ORM\Table(name="requerimientos", indexes={@ORM\Index(name="fk_Requerimientos_Clientes1", columns={"Clientes_id"}), @ORM\Index(name="fk_Requerimientos_Estados1", columns={"Estados_id"}), @ORM\Index(name="fk_Requerimientos_Empleados", columns={"AsignadoEmp_id"}), @ORM\Index(name="fk_Requerimientos_SubMenus1", columns={"SubMenus_id"})})
 * @ORM\Entity
 */
class Requerimientos
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Captura", type="blob", length=65535, nullable=true)
     */
    private $captura;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Clientes_id", referencedColumnName="id")
     * })
     */
    private $clientes;

    /**
     * @var \Empleados
     *
     * @ORM\ManyToOne(targetEntity="Empleados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AsignadoEmp_id", referencedColumnName="id")
     * })
     */
    private $asignadoemp;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Estados_id", referencedColumnName="id")
     * })
     */
    private $estados;

    /**
     * @var \Submenus
     *
     * @ORM\ManyToOne(targetEntity="Submenus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubMenus_id", referencedColumnName="id")
     * })
     */
    private $submenus;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Requerimientos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Requerimientos
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
     * Set captura
     *
     * @param string $captura
     *
     * @return Requerimientos
     */
    public function setCaptura($captura)
    {
        $this->captura = $captura;

        return $this;
    }

    /**
     * Get captura
     *
     * @return string
     */
    public function getCaptura()
    {
        return $this->captura;
    }

    /**
     * Set clientes
     *
     * @param \Login\firstBundle\Entity\Clientes $clientes
     *
     * @return Requerimientos
     */
    public function setClientes(\Login\firstBundle\Entity\Clientes $clientes = null)
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * Get clientes
     *
     * @return \Login\firstBundle\Entity\Clientes
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * Set asignadoemp
     *
     * @param \Login\firstBundle\Entity\Empleados $asignadoemp
     *
     * @return Requerimientos
     */
    public function setAsignadoemp(\Login\firstBundle\Entity\Empleados $asignadoemp = null)
    {
        $this->asignadoemp = $asignadoemp;

        return $this;
    }

    /**
     * Get asignadoemp
     *
     * @return \Login\firstBundle\Entity\Empleados
     */
    public function getAsignadoemp()
    {
        return $this->asignadoemp;
    }

    /**
     * Set estados
     *
     * @param \Login\firstBundle\Entity\Estados $estados
     *
     * @return Requerimientos
     */
    public function setEstados(\Login\firstBundle\Entity\Estados $estados = null)
    {
        $this->estados = $estados;

        return $this;
    }

    /**
     * Get estados
     *
     * @return \Login\firstBundle\Entity\Estados
     */
    public function getEstados()
    {
        return $this->estados;
    }

    /**
     * Set submenus
     *
     * @param \Login\firstBundle\Entity\Submenus $submenus
     *
     * @return Requerimientos
     */
    public function setSubmenus(\Login\firstBundle\Entity\Submenus $submenus = null)
    {
        $this->submenus = $submenus;

        return $this;
    }

    /**
     * Get submenus
     *
     * @return \Login\firstBundle\Entity\Submenus
     */
    public function getSubmenus()
    {
        return $this->submenus;
    }
}
