<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Idioma {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** @ORM\Column(type="string", length=50) */
    protected $nombre;
    /** @ORM\Column(type="string", length=50) */
    protected $Nivel;
    /** @ORM\Column(type="boolean") */
    protected $nativo;    

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
     * @return Idioma
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
     * Set Nivel
     *
     * @param string $nivel
     * @return Idioma
     */
    public function setNivel($nivel)
    {
        $this->Nivel = $nivel;

        return $this;
    }

    /**
     * Get Nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->Nivel;
    }

    /**
     * Set nativo
     *
     * @param boolean $nativo
     * @return Idioma
     */
    public function setNativo($nativo)
    {
        $this->nativo = $nativo;

        return $this;
    }

    /**
     * Get nativo
     *
     * @return boolean 
     */
    public function getNativo()
    {
        return $this->nativo;
    }
}
