<?php

namespace Registronetbook\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Orden
 *
 * @ORM\Table(name="orden", indexes={@ORM\Index(name="fk_Orden_app_user1_idx", columns={"app_user_id"})}, indexes={@ORM\Index(name="fk_Orden_maquina_idx", columns={"maquina_id"})})
 * @ORM\Entity
 */
class Orden
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anulado", type="boolean", nullable=true)
     */
    private $anulado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_anulado", type="datetime", nullable=true)
     */
    private $fechaAnulado;

    /**
     * @var \Registronetbook\UserBundle\Entity\AppUser
     *
     * @ORM\ManyToOne(targetEntity="Registronetbook\UserBundle\Entity\AppUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="app_user_id", referencedColumnName="id")
     * })
     */
    private $appUser;

    /**
     * @var \Registronetbook\ControlBundle\Entity\Maquina
     *
     * @ORM\ManyToOne(targetEntity="Registronetbook\ControlBundle\Entity\Maquina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maquina_id", referencedColumnName="id")
     * })
     */
    private $maquina;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finalizado", type="boolean", nullable=true)
     */
    private $finalizado;

    /**
     * @var \Registronetbook\ControlBundle\Entity\DetalleMovimiento
     *
     * @ORM\ManyToOne(targetEntity="Registronetbook\ControlBundle\Entity\DetalleMovimiento", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="detalleMovimiento_id", referencedColumnName="id")
     * })
     */
    private $detalleMovimiento;

    public function getDetalleMovimiento()
    {
        return $this->detalleMovimiento;
    }    

    public function __construct()
    {
        $this->detalleMovimiento = new ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Orden
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set anulado
     *
     * @param boolean $anulado
     * @return Orden
     */
    public function setAnulado($anulado)
    {
        $this->anulado = $anulado;

        return $this;
    }

    /**
     * Get anulado
     *
     * @return boolean 
     */
    public function getAnulado()
    {
        return $this->anulado;
    }

    /**
     * Set fechaAnulado
     *
     * @param \DateTime $fechaAnulado
     * @return Orden
     */
    public function setFechaAnulado($fechaAnulado)
    {
        $this->fechaAnulado = $fechaAnulado;

        return $this;
    }

    /**
     * Get fechaAnulado
     *
     * @return \DateTime 
     */
    public function getFechaAnulado()
    {
        return $this->fechaAnulado;
    }

    /**
     * Set finalizado
     *
     * @param boolean $finalizado
     * @return Orden
     */
    public function setFinalizado($finalizado)
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    /**
     * Get finalizado
     *
     * @return boolean 
     */
    public function getFinalizado()
    {
        return $this->finalizado;
    }


    /**
     * Set appUser
     *
     * @param \Registronetbook\UserBundle\Entity\AppUser $appUser
     * @return Orden
     */
    public function setAppUser(\Registronetbook\UserBundle\Entity\AppUser $appUser = null)
    {
        $this->appUser = $appUser;

        return $this;
    }

    /**
     * Get appUser
     *
     * @return \Registronetbook\UserBundle\Entity\AppUser 
     */
    public function getAppUser()
    {
        return $this->appUser;
    }


    /**
     * Set maquina
     *
     * @param \Registronetbook\ControlBundle\Entity\Maquina $maquina
     * @return Orden
     */
    public function setMaquina(\Registronetbook\ControlBundle\Entity\Maquina $maquina = null)
    {
        $this->maquina = $maquina;

        return $this;
    }

    /**
     * Get maquina
     *
     * @return \Registronetbook\ControlBundle\Entity\Maquina 
     */
    public function getMaquina()
    {
        return $this->maquina;
    }

    /**
     * Get string
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getFecha().$this.get;
    }

    public function addDetalleMovimiento(DetalleMovimiento $detalleMovimiento)
    {
        //$this->detalleMovimiento->add($detalleMovimiento);
        if(!)
    }

    public function removeDetalleMovimiento(DetalleMovimiento $detalleMovimiento)
    {
        $this->detalleMovimiento->removeElement($detalleMovimiento);
    }
}