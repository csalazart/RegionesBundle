<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad" )
 * @ORM\Entity(repositoryClass="CiudadRepository")
 */
class Ciudad
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
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre = 'ciudad';

    /**
     * @var string
     *
     * @ORM\Column(name="codigoarea", type="string", length=4, nullable=false)
     */
    private $codigoarea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="codigopostal", type="string", length=4, nullable=false)
     */
    private $codigopostal = '0';

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     */
    private $estado;

} //End Entity Generar Entities
