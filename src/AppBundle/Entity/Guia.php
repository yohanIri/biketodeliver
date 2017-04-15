<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Guia extends Usuario{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    
    // LA GUIA TAMBIEN PUEDE RESERVAS BICIS Y TIENE SU PROPIO PRECIO 
    
    protected $id;
    /** @ORM\Column(type="string", length=50) */
    protected $empresa;
    /** @ORM\Column(type="float", precision=6, scale=2) */
    protected $precioPorHora;
    /** @ORM\Column(type="string", length=50) */
    protected $titulacion;
    /** @ORM\ManyToMany(targetEntity="Idioma") */
    protected $idioma;
    /**
     * @ORM\ManyToMany(targetEntity="GuiaReservaTour")
     * @ORM\JoinTable(name="guia_guia_reserva_tour",
     *      joinColumns={@ORM\JoinColumn(name="guia_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="guia_reserva_tour_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $guiaReservaTour;
    /**
     * @ORM\ManyToMany(targetEntity="GuiaTour")
     * @ORM\JoinTable(name="guia_guia_tour",
     *      joinColumns={@ORM\JoinColumn(name="guia_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="guia_tour_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $guiaTour;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idioma = new \Doctrine\Common\Collections\ArrayCollection();
        $this->guiaReservaTour = new \Doctrine\Common\Collections\ArrayCollection();
        $this->guiaTour = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set empresa
     *
     * @param string $empresa
     * @return Guia
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set precioPorHora
     *
     * @param float $precioPorHora
     * @return Guia
     */
    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;

        return $this;
    }

    /**
     * Get precioPorHora
     *
     * @return float 
     */
    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    /**
     * Set titulacion
     *
     * @param string $titulacion
     * @return Guia
     */
    public function setTitulacion($titulacion)
    {
        $this->titulacion = $titulacion;

        return $this;
    }

    /**
     * Get titulacion
     *
     * @return string 
     */
    public function getTitulacion()
    {
        return $this->titulacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Guia
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
     * @return Guia
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
     * @return Guia
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
     * @return Guia
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
     * @return Guia
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
     * @return Guia
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
     * Add idioma
     *
     * @param \AppBundle\Entity\Idioma $idioma
     * @return Guia
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

    /**
     * Add guiaReservaTour
     *
     * @param \AppBundle\Entity\GuiaReservaTour $guiaReservaTour
     * @return Guia
     */
    public function addGuiaReservaTour(\AppBundle\Entity\GuiaReservaTour $guiaReservaTour)
    {
        $this->guiaReservaTour[] = $guiaReservaTour;

        return $this;
    }

    /**
     * Remove guiaReservaTour
     *
     * @param \AppBundle\Entity\GuiaReservaTour $guiaReservaTour
     */
    public function removeGuiaReservaTour(\AppBundle\Entity\GuiaReservaTour $guiaReservaTour)
    {
        $this->guiaReservaTour->removeElement($guiaReservaTour);
    }

    /**
     * Get guiaReservaTour
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuiaReservaTour()
    {
        return $this->guiaReservaTour;
    }

    /**
     * Add guiaTour
     *
     * @param \AppBundle\Entity\GuiaTour $guiaTour
     * @return Guia
     */
    public function addGuiaTour(\AppBundle\Entity\GuiaTour $guiaTour)
    {
        $this->guiaTour[] = $guiaTour;

        return $this;
    }

    /**
     * Remove guiaTour
     *
     * @param \AppBundle\Entity\GuiaTour $guiaTour
     */
    public function removeGuiaTour(\AppBundle\Entity\GuiaTour $guiaTour)
    {
        $this->guiaTour->removeElement($guiaTour);
    }

    /**
     * Get guiaTour
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGuiaTour()
    {
        return $this->guiaTour;
    }

    /**
     * Add tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     * @return Guia
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
     * @return Guia
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
