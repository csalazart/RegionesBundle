<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parroquia
 *
 * @ORM\Table(name="parroquia")
 * @ORM\Entity
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
     */
    private $municipio;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     */
    private $estado;


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
     * @return Parroquia
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
     * Set municipio
     *
     * @param \SfVen\Bundle\RegionesBundle\Entity\Municipio $municipio
     * @return Parroquia
     */
    public function setMunicipio(\SfVen\Bundle\RegionesBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \SfVen\Bundle\RegionesBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set estado
     *
     * @param \SfVen\Bundle\RegionesBundle\Entity\Estado $estado
     * @return Parroquia
     */
    public function setEstado(\SfVen\Bundle\RegionesBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \SfVen\Bundle\RegionesBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
