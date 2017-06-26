<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Accesorio{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=20) */
    protected $nombre;    
    /** @ORM\Column(type="string", length=20) */
    protected $tipo;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precio;
    /** @ORM\Column(type="text") */
    protected $restricciones;
    /** @ORM\Column(type="datetime")*/
    protected $fechaAlta;
    /** @ORM\Column(type="datetime", nullable=TRUE)*/
    protected $fechaBaja;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioCompra;
    /** @ORM\Column(type="float", precision=6, scale=2, nullable=TRUE) */
    protected $precioVenta;

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
     * @return Accesorio
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
     * Set tipo
     *
     * @param string $tipo
     * @return Accesorio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Accesorio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set restricciones
     *
     * @param string $restricciones
     * @return Accesorio
     */
    public function setRestricciones($restricciones)
    {
        $this->restricciones = $restricciones;

        return $this;
    }

    /**
     * Get restricciones
     *
     * @return string 
     */
    public function getRestricciones()
    {
        return $this->restricciones;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Accesorio
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return Accesorio
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set precioCompra
     *
     * @param float $precioCompra
     * @return Accesorio
     */
    public function setPrecioCompra($precioCompra)
    {
        $this->precioCompra = $precioCompra;

        return $this;
    }

    /**
     * Get precioCompra
     *
     * @return float 
     */
    public function getPrecioCompra()
    {
        return $this->precioCompra;
    }

    /**
     * Set precioVenta
     *
     * @param float $precioVenta
     * @return Accesorio
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }
}
