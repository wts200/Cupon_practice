<?php

namespace Cupon\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cupon\UsuarioBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=false)
     */
    private $apellidos;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var text $direccion
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     */
    private $direccion;

    /**
     * @var boolean $permiteEmail
     *
     * @ORM\Column(name="permite_email", type="boolean", nullable=false)
     */
    private $permiteEmail;

    /**
     * @var datetime $fechaAlta
     *
     * @ORM\Column(name="fecha_alta", type="datetime", nullable=false)
     */
    private $fechaAlta;

    /**
     * @var datetime $fechaNacimiento
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string $dni
     *
     * @ORM\Column(name="dni", type="string", length=9, nullable=false)
     */
    private $dni;

    /**
     * @var string $numeroTarjeta
     *
     * @ORM\Column(name="numero_tarjeta", type="string", length=20, nullable=false)
     */
    private $numeroTarjeta;

    /**
     * @var Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Cupon\CiudadBundle\Entity\Ciudad")
     */
    private $ciudad;

    public function __construct()
    {
        $this->fechaAlta = new \DateTime();
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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set permiteEmail
     *
     * @param boolean $permiteEmail
     */
    public function setPermiteEmail($permiteEmail)
    {
        $this->permiteEmail = $permiteEmail;
    }

    /**
     * Get permiteEmail
     *
     * @return boolean
     */
    public function getPermiteEmail()
    {
        return $this->permiteEmail;
    }

    /**
     * Set fechaAlta
     *
     * @param datetime $fechaAlta
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    }

    /**
     * Get fechaAlta
     *
     * @return datetime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaNacimiento
     *
     * @param datetime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * Get fechaNacimiento
     *
     * @return datetime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
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
     * Set numeroTarjeta
     *
     * @param string $numeroTarjeta
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    /**
     * Get numeroTarjeta
     *
     * @return string
     */
    public function getNumeroTarjeta()
    {
        return $this->numeroTarjeta;
    }

    /**
     * Set ciudad
     *
     * @param Cupon\UsuarioBundle\Entity\Ciudad $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return Cupon\UsuarioBundle\Entity\Ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function __toString()
    {
        return $this->getNombre()." ".$this->getApellidos();
    }

}
