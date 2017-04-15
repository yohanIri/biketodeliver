<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class DescuentoUnidades extends Descuento {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="integer") */
    protected $cantidadBase;
    /** @ORM\Column(type="integer") */
    protected $cantidadDescuento;

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
     * Set cantidadBase
     *
     * @param integer $cantidadBase
     * @return DescuentoUnidades
     */
    public function setCantidadBase($cantidadBase)
    {
        $this->cantidadBase = $cantidadBase;

        return $this;
    }

    /**
     * Get cantidadBase
     *
     * @return integer 
     */
    public function getCantidadBase()
    {
        return $this->cantidadBase;
    }

    /**
     * Set cantidadDescuento
     *
     * @param integer $cantidadDescuento
     * @return DescuentoUnidades
     */
    public function setCantidadDescuento($cantidadDescuento)
    {
        $this->cantidadDescuento = $cantidadDescuento;

        return $this;
    }

    /**
     * Get cantidadDescuento
     *
     * @return integer 
     */
    public function getCantidadDescuento()
    {
        return $this->cantidadDescuento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return DescuentoUnidades
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
     * @return DescuentoUnidades
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
     * @return DescuentoUnidades
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
     * @return DescuentoUnidades
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
     * @return DescuentoUnidades
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
