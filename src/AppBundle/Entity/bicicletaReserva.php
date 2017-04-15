<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BicicletaReserva{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\ManyToMany(targetEntity="Bicicleta") */
    protected $bicicleta;
    /** @ORM\ManyToOne(targetEntity="Tarifa") */
    protected $tarifa;
    /** @ORM\ManyToOne(targetEntity="AccesorioBicicletaReserva") */
    protected $accesorio;
    /** @ORM\ManyToOne(targetEntity="IncidenciaBicicletaReserva") */
    protected $incidencia;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bicicleta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add bicicleta
     *
     * @param \AppBundle\Entity\Bicicleta $bicicleta
     * @return BicicletaReserva
     */
    public function addBicicletum(\AppBundle\Entity\Bicicleta $bicicleta)
    {
        $this->bicicleta[] = $bicicleta;

        return $this;
    }

    /**
     * Remove bicicleta
     *
     * @param \AppBundle\Entity\Bicicleta $bicicleta
     */
    public function removeBicicletum(\AppBundle\Entity\Bicicleta $bicicleta)
    {
        $this->bicicleta->removeElement($bicicleta);
    }

    /**
     * Get bicicleta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBicicleta()
    {
        return $this->bicicleta;
    }

    /**
     * Set tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     * @return BicicletaReserva
     */
    public function setTarifa(\AppBundle\Entity\Tarifa $tarifa = null)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return \AppBundle\Entity\Tarifa 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set accesorio
     *
     * @param \AppBundle\Entity\AccesorioBicicletaReserva $accesorio
     * @return BicicletaReserva
     */
    public function setAccesorio(\AppBundle\Entity\AccesorioBicicletaReserva $accesorio = null)
    {
        $this->accesorio = $accesorio;

        return $this;
    }

    /**
     * Get accesorio
     *
     * @return \AppBundle\Entity\AccesorioBicicletaReserva 
     */
    public function getAccesorio()
    {
        return $this->accesorio;
    }

    /**
     * Set incidencia
     *
     * @param \AppBundle\Entity\IncidenciaBicicletaReserva $incidencia
     * @return BicicletaReserva
     */
    public function setIncidencia(\AppBundle\Entity\IncidenciaBicicletaReserva $incidencia = null)
    {
        $this->incidencia = $incidencia;

        return $this;
    }

    /**
     * Get incidencia
     *
     * @return \AppBundle\Entity\IncidenciaBicicletaReserva 
     */
    public function getIncidencia()
    {
        return $this->incidencia;
    }
}
