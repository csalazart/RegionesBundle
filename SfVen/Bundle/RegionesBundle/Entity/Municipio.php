<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio" )
 * @ORM\Entity(repositoryClass="MunicipioRepository")
 */
class Municipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=90, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idciudad", type="integer", nullable=true)
     */
    private $idciudad = '0';

    /**
     * @var \SysEstado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     */
    private $estado;


}
