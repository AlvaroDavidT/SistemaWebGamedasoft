<?php

namespace Login\firstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menus
 *
 * @ORM\Table(name="menus", indexes={@ORM\Index(name="fk_Menus_Modulos1", columns={"Modulos_id"})})
 * @ORM\Entity
 */
class Menus
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
     * @ORM\Column(name="Nombre", type="string", length=25, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var \Modulos
     *
     * @ORM\ManyToOne(targetEntity="Modulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Modulos_id", referencedColumnName="id")
     * })
     */
    private $modulos;



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
     * @return Menus
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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Menus
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set modulos
     *
     * @param \Login\firstBundle\Entity\Modulos $modulos
     *
     * @return Menus
     */
    public function setModulos(\Login\firstBundle\Entity\Modulos $modulos = null)
    {
        $this->modulos = $modulos;

        return $this;
    }

    /**
     * Get modulos
     *
     * @return \Login\firstBundle\Entity\Modulos
     */
    public function getModulos()
    {
        return $this->modulos;
    }
}
