<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Entity
 * @Assert\Callback(methods = { "esFechaEntregaValida", "esFechaRecogidaValida" })
 */
class Reserva{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $fechaCreacion;
    /** @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $fechaEntrega;
    /** @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     * @Assert\DateTime()
     */
    protected $fechaRecogida;
    /** @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank()
     */
    protected $direccionDeEntrega;
    /** @ORM\Column(type="text") 
     * @Assert\NotBlank()
     */
    protected $direccionDeRecogida;
    /** @ORM\Column(type="integer") */
    protected $numeroBicis;
    /** @ORM\Column(type="boolean",nullable=TRUE) */
    protected $seguroRobo;
    /** @ORM\Column(type="boolean",nullable=TRUE) */
    protected $seguroLLuvia;
    /** @ORM\Column(type="boolean") */
    protected $aceptarContratDeUso;
    /** @ORM\Column(type="string", length=30) */
    protected $tipoDePago;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioTotal;
    /**
     * @ORM\ManyToMany(targetEntity="ReservaEstadoReserva", cascade={"persist"})
     * @ORM\JoinTable(name="reserva_reserva_estado_reserva",
     *      joinColumns={@ORM\JoinColumn(name="reserva_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="reserva_estado_reserva_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $reservaEstado;
    
//    No estoy seguro si la relacion entre reserva y bicicleta reserva es 1/1 o n/1 Tambien se le podria
//    cambien el nombre a la propiedad par algo mas intuitivo como Articulos o Productos ....
    
    
    /** @ORM\OneToOne(targetEntity="BicicletaReserva") */
    protected $biclcetaReserva;
    /**
     * @ORM\ManyToMany(targetEntity="ReservaTour")
     * @ORM\JoinTable(name="reserva_reserva_tour",
     *      joinColumns={@ORM\JoinColumn(name="reserva_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="reserva_tour_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $reservaTour;
//                                                METODOS DE VALIDACION
    
    public function esFechaEntregaValida(ExecutionContextInterface $context)
    {
        $fechaEntrega = $this->getFechaEntrega();
        
        if($fechaEntrega < new \DateTime('today')){
            $context->buildViolation('La fecha de entrega no puede ser inferior a la actual')
            ->atPath('fechaEntrega')
            ->addViolation();
            return;
        }
    }
    
    public function esFechaRecogidaValida(ExecutionContextInterface $context)
    {
        $fechaRecogida = $this->getFechaRecogida();
        $fechaEntrega = $this->getFechaEntrega();
        
        if($fechaRecogida < new \DateTime('today')){
            $context->buildViolation('La fecha de recogida no puede ser inferior a la actual')
            ->atPath('fechaRecogida')
            ->addViolation();
            return;
        }
        
        if($fechaEntrega > $fechaRecogida){
            $context->buildViolation('La fecha de recogida no puede ser inferior a la fecha de entrega')
            ->atPath('fechaRecogida')
            ->addViolation();
            return;
        }
    } 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservaEstado = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservaTour = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fechaCreacion = new  \DateTime();
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Reserva
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Reserva
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set fechaRecogida
     *
     * @param \DateTime $fechaRecogida
     * @return Reserva
     */
    public function setFechaRecogida($fechaRecogida)
    {
        $this->fechaRecogida = $fechaRecogida;

        return $this;
    }

    /**
     * Get fechaRecogida
     *
     * @return \DateTime 
     */
    public function getFechaRecogida()
    {
        return $this->fechaRecogida;
    }

    /**
     * Set direccionDeEntrega
     *
     * @param string $direccionDeEntrega
     * @return Reserva
     */
    public function setDireccionDeEntrega($direccionDeEntrega)
    {
        $this->direccionDeEntrega = $direccionDeEntrega;

        return $this;
    }

    /**
     * Get direccionDeEntrega
     *
     * @return string 
     */
    public function getDireccionDeEntrega()
    {
        return $this->direccionDeEntrega;
    }

    /**
     * Set direccionDeRecogida
     *
     * @param string $direccionDeRecogida
     * @return Reserva
     */
    public function setDireccionDeRecogida($direccionDeRecogida)
    {
        $this->direccionDeRecogida = $direccionDeRecogida;

        return $this;
    }

    /**
     * Get direccionDeRecogida
     *
     * @return string 
     */
    public function getDireccionDeRecogida()
    {
        return $this->direccionDeRecogida;
    }

    /**
     * Set numeroBicis
     *
     * @param integer $numeroBicis
     * @return Reserva
     */
    public function setNumeroBicis($numeroBicis)
    {
        $this->numeroBicis = $numeroBicis;

        return $this;
    }

    /**
     * Get numeroBicis
     *
     * @return integer 
     */
    public function getNumeroBicis()
    {
        return $this->numeroBicis;
    }

    /**
     * Set seguroRobo
     *
     * @param boolean $seguroRobo
     * @return Reserva
     */
    public function setSeguroRobo($seguroRobo)
    {
        $this->seguroRobo = $seguroRobo;

        return $this;
    }

    /**
     * Get seguroRobo
     *
     * @return boolean 
     */
    public function getSeguroRobo()
    {
        return $this->seguroRobo;
    }

    /**
     * Set aceptarContratDeUso
     *
     * @param boolean $aceptarContratDeUso
     * @return Reserva
     */
    public function setAceptarContratDeUso($aceptarContratDeUso)
    {
        $this->aceptarContratDeUso = $aceptarContratDeUso;

        return $this;
    }

    /**
     * Get aceptarContratDeUso
     *
     * @return boolean 
     */
    public function getAceptarContratDeUso()
    {
        return $this->aceptarContratDeUso;
    }

    /**
     * Set tipoDePago
     *
     * @param string $tipoDePago
     * @return Reserva
     */
    public function setTipoDePago($tipoDePago)
    {
        $this->tipoDePago = $tipoDePago;

        return $this;
    }

    /**
     * Get tipoDePago
     *
     * @return string 
     */
    public function getTipoDePago()
    {
        return $this->tipoDePago;
    }

    /**
     * Add reservaEstado
     *
     * @param \AppBundle\Entity\ReservaEstadoReserva $reservaEstado
     * @return Reserva
     */
    public function addReservaEstado(\AppBundle\Entity\ReservaEstadoReserva $reservaEstado)
    {
        $this->reservaEstado[] = $reservaEstado;

        return $this;
    }

    /**
     * Remove reservaEstado
     *
     * @param \AppBundle\Entity\ReservaEstadoReserva $reservaEstado
     */
    public function removeReservaEstado(\AppBundle\Entity\ReservaEstadoReserva $reservaEstado)
    {
        $this->reservaEstado->removeElement($reservaEstado);
    }

    /**
     * Get reservaEstado
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservaEstado()
    {
        return $this->reservaEstado;
    }

    /**
     * Set reservaBicicleta
     *
     * @param \AppBundle\Entity\BicicletaReserva $reservaBicicleta
     * @return Reserva
     */
    public function setReservaBicicleta(\AppBundle\Entity\BicicletaReserva $reservaBicicleta = null)
    {
        $this->reservaBicicleta = $reservaBicicleta;

        return $this;
    }

    /**
     * Get reservaBicicleta
     *
     * @return \AppBundle\Entity\BicicletaReserva 
     */
    public function getReservaBicicleta()
    {
        return $this->reservaBicicleta;
    }

    /**
     * Add reservaTour
     *
     * @param \AppBundle\Entity\ReservaTour $reservaTour
     * @return Reserva
     */
    public function addReservaTour(\AppBundle\Entity\ReservaTour $reservaTour)
    {
        $this->reservaTour[] = $reservaTour;

        return $this;
    }

    /**
     * Remove reservaTour
     *
     * @param \AppBundle\Entity\ReservaTour $reservaTour
     */
    public function removeReservaTour(\AppBundle\Entity\ReservaTour $reservaTour)
    {
        $this->reservaTour->removeElement($reservaTour);
    }

    /**
     * Get reservaTour
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservaTour()
    {
        return $this->reservaTour;
    }

    /**
     * Set biclcetaReserva
     *
     * @param \AppBundle\Entity\BicicletaReserva $biclcetaReserva
     * @return Reserva
     */
    public function setBiclcetaReserva(\AppBundle\Entity\BicicletaReserva $biclcetaReserva = null)
    {
        $this->biclcetaReserva = $biclcetaReserva;

        return $this;
    }

    /**
     * Get biclcetaReserva
     *
     * @return \AppBundle\Entity\BicicletaReserva 
     */
    public function getBiclcetaReserva()
    {
        return $this->biclcetaReserva;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     * @return Reserva
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
     * Set seguroLLuvia
     *
     * @param boolean $seguroLLuvia
     * @return Reserva
     */
    public function setSeguroLLuvia($seguroLLuvia)
    {
        $this->seguroLLuvia = $seguroLLuvia;

        return $this;
    }

    /**
     * Get seguroLLuvia
     *
     * @return boolean 
     */
    public function getSeguroLLuvia()
    {
        return $this->seguroLLuvia;
    }
}
