<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


//        ESTA TABLA TENDRIA QUE ESTAR RELACIONADA CON BICICLETA?
//            PARA SABER QUE BICIS TIENEN INCIDENCIAS


/**
 * @ORM\Entity
 */
class IncidenciaBicicletaReserva {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="datetime") */
    protected $fechaInicio;
    /** @ORM\Column(type="datetime") */
    protected $fechaSolucion;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $costeReparacion;
    /** @ORM\Column(type="text") */
    protected $descripcion;
    /** @ORM\Column(type="boolean") */
    protected $gratiuto;
    /**
     * @ORM\ManyToMany(targetEntity="Incidencia")
     * @ORM\JoinTable(name="incidencia_bicicleta_reserva_incidencia",
     *      joinColumns={@ORM\JoinColumn(name="incidencia_bicicleta_reserva_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="incidencia_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $incidencia;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidencia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return IncidenciaBicicletaReserva
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     * @return IncidenciaBicicletaReserva
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;

        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime 
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set costeReparacion
     *
     * @param float $costeReparacion
     * @return IncidenciaBicicletaReserva
     */
    public function setCosteReparacion($costeReparacion)
    {
        $this->costeReparacion = $costeReparacion;

        return $this;
    }

    /**
     * Get costeReparacion
     *
     * @return float 
     */
    public function getCosteReparacion()
    {
        return $this->costeReparacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return IncidenciaBicicletaReserva
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
     * Set gratiuto
     *
     * @param boolean $gratiuto
     * @return IncidenciaBicicletaReserva
     */
    public function setGratiuto($gratiuto)
    {
        $this->gratiuto = $gratiuto;

        return $this;
    }

    /**
     * Get gratiuto
     *
     * @return boolean 
     */
    public function getGratiuto()
    {
        return $this->gratiuto;
    }

    /**
     * Add incidencia
     *
     * @param \AppBundle\Entity\Incidencia $incidencia
     * @return IncidenciaBicicletaReserva
     */
    public function addIncidencium(\AppBundle\Entity\Incidencia $incidencia)
    {
        $this->incidencia[] = $incidencia;

        return $this;
    }

    /**
     * Remove incidencia
     *
     * @param \AppBundle\Entity\Incidencia $incidencia
     */
    public function removeIncidencium(\AppBundle\Entity\Incidencia $incidencia)
    {
        $this->incidencia->removeElement($incidencia);
    }

    /**
     * Get incidencia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncidencia()
    {
        return $this->incidencia;
    }
}
