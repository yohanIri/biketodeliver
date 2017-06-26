<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Bicicleta{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="datetime")*/
    protected $fechaAlta;
    /** @ORM\Column(type="datetime", nullable=true)*/
    protected $fechaBaja;
    /** @ORM\Column(type="string", length=20)*/
    protected $tipo;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioCompra;
    /** @ORM\Column(type="float", precision=6, scale=2, nullable=true) */
    protected $precioVenta;
    /** @ORM\Column(type="integer") */
    protected $alturaMaxima;
    /** @ORM\Column(type="integer") */
    protected $alturaMinima;
    /** @ORM\Column(type="string", length=20) */
    protected $numeroBastidor;
    /** @ORM\ManyToMany(targetEntity="Accesorio") */
    protected $accesorio;
    /** @ORM\ManyToOne(targetEntity="Tarifa") */
    protected $tarifa;
    /**
     * @ORM\ManyToMany(targetEntity="IncidenciaBicicleta")
     * @ORM\JoinTable(name="bicicleta_incidencia_incidencia",
     *      joinColumns={@ORM\JoinColumn(name="bicicleta_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="incidencia_bicicleta_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $incidencia;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accesorio = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Bicicleta
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
     * @return Bicicleta
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
     * Set tipo
     *
     * @param string $tipo
     * @return Bicicleta
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
     * Set precioCompra
     *
     * @param float $precioCompra
     * @return Bicicleta
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
     * @return Bicicleta
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

    /**
     * Set alturaMaxima
     *
     * @param integer $alturaMaxima
     * @return Bicicleta
     */
    public function setAlturaMaxima($alturaMaxima)
    {
        $this->alturaMaxima = $alturaMaxima;

        return $this;
    }

    /**
     * Get alturaMaxima
     *
     * @return integer 
     */
    public function getAlturaMaxima()
    {
        return $this->alturaMaxima;
    }

    /**
     * Set alturaMinima
     *
     * @param integer $alturaMinima
     * @return Bicicleta
     */
    public function setAlturaMinima($alturaMinima)
    {
        $this->alturaMinima = $alturaMinima;

        return $this;
    }

    /**
     * Get alturaMinima
     *
     * @return integer 
     */
    public function getAlturaMinima()
    {
        return $this->alturaMinima;
    }

    /**
     * Set numeroBastidor
     *
     * @param string $numeroBastidor
     * @return Bicicleta
     */
    public function setNumeroBastidor($numeroBastidor)
    {
        $this->numeroBastidor = $numeroBastidor;

        return $this;
    }

    /**
     * Get numeroBastidor
     *
     * @return string 
     */
    public function getNumeroBastidor()
    {
        return $this->numeroBastidor;
    }

    /**
     * Add accesorio
     *
     * @param \AppBundle\Entity\Accesorio $accesorio
     * @return Bicicleta
     */
    public function addAccesorio(\AppBundle\Entity\Accesorio $accesorio)
    {
        $this->accesorio[] = $accesorio;

        return $this;
    }

    /**
     * Remove accesorio
     *
     * @param \AppBundle\Entity\Accesorio $accesorio
     */
    public function removeAccesorio(\AppBundle\Entity\Accesorio $accesorio)
    {
        $this->accesorio->removeElement($accesorio);
    }

    /**
     * Get accesorio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccesorio()
    {
        return $this->accesorio;
    }

    /**
     * Set tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     * @return Bicicleta
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
     * Add incidencia
     *
     * @param \AppBundle\Entity\IncidenciaBicicleta $incidencia
     * @return Bicicleta
     */
    public function addIncidencium(\AppBundle\Entity\IncidenciaBicicleta $incidencia)
    {
        $this->incidencia[] = $incidencia;

        return $this;
    }

    /**
     * Remove incidencia
     *
     * @param \AppBundle\Entity\IncidenciaBicicleta $incidencia
     */
    public function removeIncidencium(\AppBundle\Entity\IncidenciaBicicleta $incidencia)
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
