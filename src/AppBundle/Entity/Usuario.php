<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"cliente" = "Cliente", "empresa" = "Empresa", "guia" = "Guia"})
 */
class Usuario{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=50) */
    protected $nombre;
    /** @ORM\Column(type="string", length=50) */
    protected $dni;
    /** @ORM\Column(type="string", length=50) */
    protected $password;
    /** @ORM\Column(type="string", length=50) */
    protected $telefono;
    /** @ORM\Column(type="text") */
    protected $direccion;
    /** @ORM\Column(type="datetime") */
    protected $fecha_creacion;
    /** @ORM\ManyToMany(targetEntity="Tarifa") */
    protected $tarifa;
    protected $permisoMandarEmail;
    /**
     * @ORM\ManyToMany(targetEntity="Reserva")
     * @ORM\JoinTable(name="usuario_reserva",
     *      joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="reserva_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $reserva;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tarifa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reserva = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set dni
     *
     * @param string $dni
     * @return Usuario
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fecha_creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Usuario
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_creacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fecha_creacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Add tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     * @return Usuario
     */
    public function addTarifa(\AppBundle\Entity\Tarifa $tarifa)
    {
        $this->tarifa[] = $tarifa;

        return $this;
    }

    /**
     * Remove tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     */
    public function removeTarifa(\AppBundle\Entity\Tarifa $tarifa)
    {
        $this->tarifa->removeElement($tarifa);
    }

    /**
     * Get tarifa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Add reserva
     *
     * @param \AppBundle\Entity\Reserva $reserva
     * @return Usuario
     */
    public function addReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reserva[] = $reserva;

        return $this;
    }

    /**
     * Remove reserva
     *
     * @param \AppBundle\Entity\Reserva $reserva
     */
    public function removeReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reserva->removeElement($reserva);
    }

    /**
     * Get reserva
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReserva()
    {
        return $this->reserva;
    }
}
