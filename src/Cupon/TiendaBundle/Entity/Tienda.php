<?php

namespace Cupon\TiendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tienda")
 **/
class Tienda
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     **/
    protected $id;

    /** @ORM\Column(type="string", length=100) **/
    protected $nombre;

    /** @ORM\Column(type="string", length=100) **/
    protected $slug;

    /** @ORM\Column(type="string", length=10) **/
    protected $login;

    /** @ORM\Column(type="string", length=255) **/
    protected $password;

    /** @ORM\Column(type="string", length=255) **/
    protected $salt;

    /** @ORM\Column(type="text") **/
    protected $descripcion;

    /** @ORM\Column(type="text") **/
    protected $direccion;

    /** @ORM\ManyToOne(TargetEntity="Cupon\CiudadBundle\Entity\Ciudad") **/
    protected $ciudad;

}
