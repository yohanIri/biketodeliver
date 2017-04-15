<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Empresa extends Usuario{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=50) */
    protected $tipo;
    /** @ORM\Column(type="string", length=50) */
    protected $personaContacto;
    /** @ORM\Column(type="string", length=150) */
    protected $nombrePersonal;
    /** @ORM\Column(type="boolean") */
    protected $colaborador;
    /** @ORM\Column(type="string", length=50) */
    protected $relacion;
    /** @ORM\Column(type="float", precision=5, scale=2) */
    protected $comision;
    /** @ORM\Column(type="string", length=50) */
    protected $empresa;
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
     * Set tipo
     *
     * @param string $tipo
     * @return Empresa
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
     * Set personaContacto
     *
     * @param string $personaContacto
     * @return Empresa
     */
    public function setPersonaContacto($personaContacto)
    {
        $this->personaContacto = $personaContacto;

        return $this;
    }

    /**
     * Get personaContacto
     *
     * @return string 
     */
    public function getPersonaContacto()
    {
        return $this->personaContacto;
    }

    /**
     * Set nombrePersonal
     *
     * @param string $nombrePersonal
     * @return Empresa
     */
    public function setNombrePersonal($nombrePersonal)
    {
        $this->nombrePersonal = $nombrePersonal;

        return $this;
    }

    /**
     * Get nombrePersonal
     *
     * @return string 
     */
    public function getNombrePersonal()
    {
        return $this->nombrePersonal;
    }

    /**
     * Set colaborador
     *
     * @param boolean $colaborador
     * @return Empresa
     */
    public function setColaborador($colaborador)
    {
        $this->colaborador = $colaborador;

        return $this;
    }

    /**
     * Get colaborador
     *
     * @return boolean 
     */
    public function getColaborador()
    {
        return $this->colaborador;
    }

    /**
     * Set relacion
     *
     * @param string $relacion
     * @return Empresa
     */
    public function setRelacion($relacion)
    {
        $this->relacion = $relacion;

        return $this;
    }

    /**
     * Get relacion
     *
     * @return string 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Set comision
     *
     * @param float $comision
     * @return Empresa
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return float 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return Empresa
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
     * Set nombre
     *
     * @param string $nombre
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
