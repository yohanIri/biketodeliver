<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class ReservaEstadoReserva {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * 
     */
    protected $id;
    /** @ORM\Column(type="datetime") */
    protected $fecha;
    /** @ORM\ManyToOne(targetEntity="EstadoReserva") */
    protected $estadoReserva;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fecha = new  \DateTime();
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
     * Set Fecha
     *
     * @param \DateTime $fecha
     * @return ReservaEstadoReserva
     */
    public function setFecha($fecha)
    {
        $this->Fecha = $fecha;

        return $this;
    }

    /**
     * Get Fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set estadoReserva
     *
     * @param \AppBundle\Entity\EstadoReserva $estadoReserva
     * @return ReservaEstadoReserva
     */
    public function setEstadoReserva(\AppBundle\Entity\EstadoReserva $estadoReserva = null)
    {
        $this->estadoReserva = $estadoReserva;

        return $this;
    }

    /**
     * Get estadoReserva
     *
     * @return \AppBundle\Entity\EstadoReserva 
     */
    public function getEstadoReserva()
    {
        return $this->estadoReserva;
    }
}
