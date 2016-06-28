<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hojastiempo
 *
 * @ORM\Table(name="hojastiempo", indexes={@ORM\Index(name="fk_HojasTiempo_Empleados1", columns={"Empleados_id"})})
 * @ORM\Entity
 */
class Hojastiempo
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
     * @var \Empleados
     *
     * @ORM\ManyToOne(targetEntity="Empleados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Empleados_id", referencedColumnName="id")
     * })
     */
    private $empleados;



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
     * @return Hojastiempo
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
     * Set empleados
     *
     * @param \Login\firstBundle\Entity\Empleados $empleados
     *
     * @return Hojastiempo
     */
    public function setEmpleados(\Login\firstBundle\Entity\Empleados $empleados = null)
    {
        $this->empleados = $empleados;

        return $this;
    }

    /**
     * Get empleados
     *
     * @return \Login\firstBundle\Entity\Empleados
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }
}
