<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class GuiaReservaTour {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioPorHora;
    /** @ORM\OneToOne(targetEntity="ReservaTour") */
    protected $reservaTour;

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
     * Set precioPorHora
     *
     * @param float $precioPorHora
     * @return GuiaReservaTour
     */
    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;

        return $this;
    }

    /**
     * Get precioPorHora
     *
     * @return float 
     */
    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    /**
     * Set reservaTour
     *
     * @param \AppBundle\Entity\ReservaTour $reservaTour
     * @return GuiaReservaTour
     */
    public function setReservaTour(\AppBundle\Entity\ReservaTour $reservaTour = null)
    {
        $this->reservaTour = $reservaTour;

        return $this;
    }

    /**
     * Get reservaTour
     *
     * @return \AppBundle\Entity\ReservaTour 
     */
    public function getReservaTour()
    {
        return $this->reservaTour;
    }
}
