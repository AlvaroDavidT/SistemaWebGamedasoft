<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detallehojas
 *
 * @ORM\Table(name="detallehojas", indexes={@ORM\Index(name="fk_DetalleHojas_HojasTiempo1", columns={"HojasTiempo_id"}), @ORM\Index(name="fk_DetalleHojas_Clientes1", columns={"Clientes_id"})})
 * @ORM\Entity
 */
class Detallehojas
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
     * @ORM\Column(name="Actividad", type="string", length=45, nullable=false)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Tiempo", type="string",length=45, nullable=false)
     */
    private $tiempo;

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
     * @var \Hojastiempo
     *
     * @ORM\ManyToOne(targetEntity="Hojastiempo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="HojasTiempo_id", referencedColumnName="id")
     * })
     */
    private $hojastiempo;



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
     * @return Detallehojas
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
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Detallehojas
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set tiempo
     *
     * @param string $tiempo
     *
     * @return Detallehojas
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return string
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set clientes
     *
     * @param \Login\firstBundle\Entity\Clientes $clientes
     *
     * @return Detallehojas
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
     * Set hojastiempo
     *
     * @param \Login\firstBundle\Entity\Hojastiempo $hojastiempo
     *
     * @return Detallehojas
     */
    public function setHojastiempo(\Login\firstBundle\Entity\Hojastiempo $hojastiempo = null)
    {
        $this->hojastiempo = $hojastiempo;

        return $this;
    }

    /**
     * Get hojastiempo
     *
     * @return \Login\firstBundle\Entity\Hojastiempo
     */
    public function getHojastiempo()
    {
        return $this->hojastiempo;
    }
}
