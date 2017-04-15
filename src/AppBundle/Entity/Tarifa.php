<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Tarifa {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="integer") */
    protected $duracion;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precio;
    /** @ORM\Column(type="text") */
    protected $descripcion;
    /** @ORM\Column(type="string", length=20) */
    protected $tipo;
    /** @ORM\ManyToMany(targetEntity="Descuento") */
    protected $descuento;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descuento = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set duracion
     *
     * @param integer $duracion
     * @return Tarifa
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Tarifa
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tarifa
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
     * Set tipo
     *
     * @param string $tipo
     * @return Tarifa
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
     * Add descuento
     *
     * @param \AppBundle\Entity\Descuento $descuento
     * @return Tarifa
     */
    public function addDescuento(\AppBundle\Entity\Descuento $descuento)
    {
        $this->descuento[] = $descuento;

        return $this;
    }

    /**
     * Remove descuento
     *
     * @param \AppBundle\Entity\Descuento $descuento
     */
    public function removeDescuento(\AppBundle\Entity\Descuento $descuento)
    {
        $this->descuento->removeElement($descuento);
    }

    /**
     * Get descuento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }
}
