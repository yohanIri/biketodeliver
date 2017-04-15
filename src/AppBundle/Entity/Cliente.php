<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Cliente extends Usuario{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=50) */
    protected $apellido;
    /** @ORM\Column(type="boolean") */
    protected $permisoMandarEmail;
    /**
     * @ORM\ManyToMany(targetEntity="Comentario")
     * @ORM\JoinTable(name="cliente_comentario",
     *      joinColumns={@ORM\JoinColumn(name="cliente_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="comentario_id", referencedColumnName="id", unique=true)}
     *  )
     */
    protected $comentario;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set apellido
     *
     * @param string $apellido
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set permisoMandarEmail
     *
     * @param boolean $permisoMandarEmail
     * @return Cliente
     */
    public function setPermisoMandarEmail($permisoMandarEmail)
    {
        $this->permisoMandarEmail = $permisoMandarEmail;

        return $this;
    }

    /**
     * Get permisoMandarEmail
     *
     * @return boolean 
     */
    public function getPermisoMandarEmail()
    {
        return $this->permisoMandarEmail;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Add comentario
     *
     * @param \AppBundle\Entity\Comentario $comentario
     * @return Cliente
     */
    public function addComentario(\AppBundle\Entity\Comentario $comentario)
    {
        $this->comentario[] = $comentario;

        return $this;
    }

    /**
     * Remove comentario
     *
     * @param \AppBundle\Entity\Comentario $comentario
     */
    public function removeComentario(\AppBundle\Entity\Comentario $comentario)
    {
        $this->comentario->removeElement($comentario);
    }

    /**
     * Get comentario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Add tarifa
     *
     * @param \AppBundle\Entity\Tarifa $tarifa
     * @return Cliente
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
     * @return Cliente
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
