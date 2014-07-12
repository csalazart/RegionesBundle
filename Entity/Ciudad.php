<?php

namespace SfVen\Bundle\RegionesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad" )
 * @ORM\Entity
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
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoarea", type="string", length=4, nullable=false)
     */
    private $codigoarea;

    /**
     * @var string
     *
     * @ORM\Column(name="codigopostal", type="string", length=4, nullable=false)
     */
    private $codigopostal;

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
     * @return Ciudad
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
     * Set codigoarea
     *
     * @param string $codigoarea
     * @return Ciudad
     */
    public function setCodigoarea($codigoarea)
    {
        $this->codigoarea = $codigoarea;

        return $this;
    }

    /**
     * Get codigoarea
     *
     * @return string 
     */
    public function getCodigoarea()
    {
        return $this->codigoarea;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     * @return Ciudad
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string 
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set estado
     *
     * @param \SfVen\Bundle\RegionesBundle\Entity\Estado $estado
     * @return Ciudad
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
