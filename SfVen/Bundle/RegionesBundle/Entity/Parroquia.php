<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parroquia
 *
 * @ORM\Table(name="parroquia" )
 * @ORM\Entity(repositoryClass="ParroquiaRepository"
 */
class Parroquia
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
     * @ORM\Column(name="nombre", type="string", length=90, nullable=true)
     */
    private $nombre;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumn(name="idmunicipio", referencedColumnName="id")
     */
    private $municipio;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     */
    private $estado;

} //End Entity Generara Entities
