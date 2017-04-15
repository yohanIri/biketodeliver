<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Tour{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="datetime")*/
    protected $fechaAlta;
    /** @ORM\Column(type="datetime")*/
    protected $fechaBaja;
    /** @ORM\Column(type="string", length=100) */
    protected $nombre;    
    /** @ORM\Column(type="text") */
    protected $descripcion;
    /** @ORM\Column(type="text") */
    protected $imagen;
    /** @ORM\Column(type="float", precision=3, scale=1) */
    protected $duracion;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioTotal;
    /** @ORM\ManyToMany(targetEntity="Idioma") */
    protected $idioma;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idioma = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Tour
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
     * @return Tour
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
     * Set nombre
     *
     * @param string $nombre
     * @return Tour
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tour
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
     * Set imagen
     *
     * @param string $imagen
     * @return Tour
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set duracion
     *
     * @param float $duracion
     * @return Tour
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return float 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     * @return Tour
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;

        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return float 
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Add idioma
     *
     * @param \AppBundle\Entity\Idioma $idioma
     * @return Tour
     */
    public function addIdioma(\AppBundle\Entity\Idioma $idioma)
    {
        $this->idioma[] = $idioma;

        return $this;
    }

    /**
     * Remove idioma
     *
     * @param \AppBundle\Entity\Idioma $idioma
     */
    public function removeIdioma(\AppBundle\Entity\Idioma $idioma)
    {
        $this->idioma->removeElement($idioma);
    }

    /**
     * Get idioma
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }
}
