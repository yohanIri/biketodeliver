<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"fijo" = "DescuentoFijo", "unidades" = "DescuentoUnidades"})
 */
class Descuento {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="text") */
    protected $descripcion;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioMinimo;
    /** @ORM\Column(type="integer") */
    protected $unidadesMinimas;
    /** @ORM\Column(type="datetime") */
    protected $fechaInicio;
    /** @ORM\Column(type="datetime") */
    protected $fechaFin;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Descuento
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
     * Set precioMinimo
     *
     * @param float $precioMinimo
     * @return Descuento
     */
    public function setPrecioMinimo($precioMinimo)
    {
        $this->precioMinimo = $precioMinimo;

        return $this;
    }

    /**
     * Get precioMinimo
     *
     * @return float 
     */
    public function getPrecioMinimo()
    {
        return $this->precioMinimo;
    }

    /**
     * Set unidadesMinimas
     *
     * @param integer $unidadesMinimas
     * @return Descuento
     */
    public function setUnidadesMinimas($unidadesMinimas)
    {
        $this->unidadesMinimas = $unidadesMinimas;

        return $this;
    }

    /**
     * Get unidadesMinimas
     *
     * @return integer 
     */
    public function getUnidadesMinimas()
    {
        return $this->unidadesMinimas;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Descuento
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
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Descuento
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
}
