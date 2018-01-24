<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="menu_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=30, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=100, nullable=true)
     */
    private $ruta;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sistema", type="integer", nullable=false)
     */
    private $idSistema;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="texto_nivel_padre", type="string", length=30, nullable=true)
     */
    private $textoNivelPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="icono", type="string", length=30, nullable=true)
     */
    private $icono;



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
     * Set texto
     *
     * @param string $texto
     *
     * @return Menu
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Menu
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Menu
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Menu
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idSistema
     *
     * @param integer $idSistema
     *
     * @return Menu
     */
    public function setIdSistema($idSistema)
    {
        $this->idSistema = $idSistema;

        return $this;
    }

    /**
     * Get idSistema
     *
     * @return integer
     */
    public function getIdSistema()
    {
        return $this->idSistema;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Menu
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set textoNivelPadre
     *
     * @param string $textoNivelPadre
     *
     * @return Menu
     */
    public function setTextoNivelPadre($textoNivelPadre)
    {
        $this->textoNivelPadre = $textoNivelPadre;

        return $this;
    }

    /**
     * Get textoNivelPadre
     *
     * @return string
     */
    public function getTextoNivelPadre()
    {
        return $this->textoNivelPadre;
    }

    /**
     * Set icono
     *
     * @param string $icono
     *
     * @return Menu
     */
    public function setIcono($icono)
    {
        $this->icono = $icono;

        return $this;
    }

    /**
     * Get icono
     *
     * @return string
     */
    public function getIcono()
    {
        return $this->icono;
    }
}
