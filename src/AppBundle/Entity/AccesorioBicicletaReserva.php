<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AccesorioBicicletaReserva{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioPorDia;
    /** @ORM\OneToOne(targetEntity="Accesorio") */
    protected $accesorio;

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
     * Set precioPorDia
     *
     * @param float $precioPorDia
     * @return AccesorioBicicletaReserva
     */
    public function setPrecioPorDia($precioPorDia)
    {
        $this->precioPorDia = $precioPorDia;

        return $this;
    }

    /**
     * Get precioPorDia
     *
     * @return float 
     */
    public function getPrecioPorDia()
    {
        return $this->precioPorDia;
    }

    /**
     * Set accesorio
     *
     * @param \AppBundle\Entity\Accesorio $accesorio
     * @return AccesorioBicicletaReserva
     */
    public function setAccesorio(\AppBundle\Entity\Accesorio $accesorio = null)
    {
        $this->accesorio = $accesorio;

        return $this;
    }

    /**
     * Get accesorio
     *
     * @return \AppBundle\Entity\Accesorio 
     */
    public function getAccesorio()
    {
        return $this->accesorio;
    }
}
