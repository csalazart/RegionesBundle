<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio" )
 * @ORM\Entity
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
    private $idciudad;

    /**
     * @var \SysEstado
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
     * @return Municipio
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
     * Set idciudad
     *
     * @param integer $idciudad
     * @return Municipio
     */
    public function setIdciudad($idciudad)
    {
        $this->idciudad = $idciudad;

        return $this;
    }

    /**
     * Get idciudad
     *
     * @return integer 
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }

    /**
     * Set estado
     *
     * @param \SfVen\Bundle\RegionesBundle\Entity\Estado $estado
     * @return Municipio
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
