<?php

namespace ScalofrioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencias
 *
 * @ORM\Table(name="incidencias")
 * @ORM\Entity(repositoryClass="ScalofrioBundle\Repository\IncidenciasRepository")
 */
class Incidencias
{

    /**
     *
     * @ORM\ManyToOne(targetEntity="Comercial", inversedBy="incidencias")
     * @ORM\JoinColumn(name="comercial_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $comercial;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="incidencias")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $cliente;


    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion", inversedBy="incidencias")
     * @ORM\JoinColumn(name="gestion_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $gestion;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Maquinas", inversedBy="incidencias")
     * @ORM\JoinColumn(name="maquinas_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $maquinas;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Repuestos", inversedBy="incidencias")
     * @ORM\JoinColumn(name="repuestos_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $repuestos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Establecimientos", inversedBy="incidencias")
     * @ORM\JoinColumn(name="establecimientos_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $establecimientos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Subestablecimientos", inversedBy="incidencias")
     * @ORM\JoinColumn(name="subestablecimientos_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $subestablecimientos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="IncidenciasCliente", inversedBy="incidencias")
     * @ORM\JoinColumn(name="numinccliente", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $numinccliente;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Rutas", inversedBy="incidencias")
     * @ORM\JoinColumn(name="ruta", referencedColumnName="id", onDelete="CASCADE")
     */

    private $ruta;

    /**
     * @var int
     *
     * @ORM\Column(name="tiempo", type="integer")
     */
    private $tiempo;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cargocliente", inversedBy="incidencias")
     * @ORM\JoinColumn(name="cargocliente", referencedColumnName="id", onDelete="CASCADE")
     */
    private $cargocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecliente", type="string", length=255)
     */
    private $nombrecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="firma", type="text", nullable=true)
     */
    private $firma;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Resultados", inversedBy="incidencias")
     * @ORM\JoinColumn(name="resultado", referencedColumnName="id", onDelete="CASCADE")
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Incidencias
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
     * Set tiempo
     *
     * @param integer $tiempo
     *
     * @return Incidencias
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return int
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * @return \ScalofrioBundle\Entity\Cargocliente
     */
    public function getCargocliente()
    {
        return $this->cargocliente;
    }

    /**
     * @param \ScalofrioBundle\Entity\Cargocliente $cargocliente
     * @return Incidencias
     */
    public function setCargocliente($cargocliente)
    {
        $this->cargocliente = $cargocliente;
    }


    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     *
     * @return Incidencias
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    /**
     * Get nombrecliente
     *
     * @return string
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set firma
     *
     * @param string $firma
     *
     * @return Incidencias
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;

        return $this;
    }

    /**
     * Get firma
     *
     * @return string
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * @return \ScalofrioBundle\Entity\Resultados
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param \ScalofrioBundle\Entity\Resultados $resultado
     * @return Incidencias
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \ScalofrioBundle\Entity\Rutas
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * @param \ScalofrioBundle\Entity\Rutas $ruta
     * @return Incidencias
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * @return \ScalofrioBundle\Entity\Comercial
     */
    public function getComercial()
    {
        return $this->comercial;
    }

    /**
     * @param \ScalofrioBundle\Entity\Comercial $comercial
     * @return Incidencias
     */
    public function setComercial($comercial)
    {
        $this->comercial = $comercial;
    }

    /**
     * @return \ScalofrioBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param \ScalofrioBundle\Entity\Cliente $cliente
     * @return Incidencias
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


    /**
     * @return \ScalofrioBundle\Entity\Gestion
     */
    public function getGestion()
    {
        return $this->gestion;
    }

    /**
     * @param \ScalofrioBundle\Entity\Gestion $gestion
     * @return Incidencias
     */
    public function setGestion($gestion)
    {
        $this->gestion = $gestion;
    }

    /**
     * @return \ScalofrioBundle\Entity\Maquinas
     */
    public function getMaquinas()
    {
        return $this->maquinas;
    }

    /**
     * @param \ScalofrioBundle\Entity\Maquinas $maquinas
     * @return Incidencias
     */
    public function setMaquinas($maquinas)
    {
        $this->maquinas = $maquinas;
    }

    /**
     * @return \ScalofrioBundle\Entity\Repuestos
     */
    public function getRepuestos()
    {
        return $this->repuestos;
    }

    /**
     * @param \ScalofrioBundle\Entity\Repuestos $repuestos
     * @return Incidencias
     */
    public function setRepuestos($repuestos)
    {
        $this->repuestos = $repuestos;
    }

    /**
     * @return \ScalofrioBundle\Entity\Establecimientos
     */
    public function getEstablecimientos()
    {
        return $this->establecimientos;
    }

    /**
     * @param \ScalofrioBundle\Entity\Establecimientos $establecimientos
     * @return Incidencias
     */
    public function setEstablecimientos($establecimientos)
    {
        $this->establecimientos = $establecimientos;
    }

    /**
     * @return \ScalofrioBundle\Entity\Subestablecimientos
     */
    public function getSubestablecimientos()
    {
        return $this->subestablecimientos;
    }

    /**
     * @param \ScalofrioBundle\Entity\Subestablecimientos $subestablecimientos
     * @return Incidencias
     */
    public function setSubestablecimientos($subestablecimientos)
    {
        $this->subestablecimientos = $subestablecimientos;
    }

    /**
     * @return \ScalofrioBundle\Entity\IncidenciasCliente
     */
    public function getNumIncCliente()
    {
        return $this->numinccliente;
    }

    /**
     * @param \ScalofrioBundle\Entity\IncidenciasCliente $numinccliente
     * @return Incidencias
     */
    public function setNumIncCliente($numinccliente)
    {
        $this->numinccliente = $numinccliente;
    }


}

