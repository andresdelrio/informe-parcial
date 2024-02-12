<?php

namespace App\Entity;

use App\Repository\EstudianteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstudianteRepository::class)]
class Estudiante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sede = null;

    #[ORM\Column(length: 255)]
    private ?string $grado = null;

    #[ORM\Column(length: 255)]
    private ?string $grupo = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $documento = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $uno = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tres = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cuatro = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cinco = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siete = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ocho = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nueve = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diez = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $once = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $doce = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trece = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $catorce = null;

    #[ORM\Column(length: 255)]
    private ?string $lugar = null;

    #[ORM\Column(length: 255)]
    private ?string $fecha = null;

    #[ORM\Column(length: 255)]
    private ?string $hora = null;

    #[ORM\Column(length: 255)]
    private ?string $periodo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $observaciones = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSede(): ?string
    {
        return $this->sede;
    }

    public function setSede(string $sede): static
    {
        $this->sede = $sede;

        return $this;
    }

    public function getGrado(): ?string
    {
        return $this->grado;
    }

    public function setGrado(string $grado): static
    {
        $this->grado = $grado;

        return $this;
    }

    public function getGrupo(): ?string
    {
        return $this->grupo;
    }

    public function setGrupo(string $grupo): static
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(string $documento): static
    {
        $this->documento = $documento;

        return $this;
    }

    public function getUno(): ?string
    {
        return $this->uno;
    }

    public function setUno(?string $uno): static
    {
        $this->uno = $uno;

        return $this;
    }

    public function getDos(): ?string
    {
        return $this->dos;
    }

    public function setDos(?string $dos): static
    {
        $this->dos = $dos;

        return $this;
    }

    public function getTres(): ?string
    {
        return $this->tres;
    }

    public function setTres(?string $tres): static
    {
        $this->tres = $tres;

        return $this;
    }

    public function getCuatro(): ?string
    {
        return $this->cuatro;
    }

    public function setCuatro(?string $cuatro): static
    {
        $this->cuatro = $cuatro;

        return $this;
    }

    public function getCinco(): ?string
    {
        return $this->cinco;
    }

    public function setCinco(?string $cinco): static
    {
        $this->cinco = $cinco;

        return $this;
    }

    public function getSeis(): ?string
    {
        return $this->seis;
    }

    public function setSeis(?string $seis): static
    {
        $this->seis = $seis;

        return $this;
    }

    public function getSiete(): ?string
    {
        return $this->siete;
    }

    public function setSiete(?string $siete): static
    {
        $this->siete = $siete;

        return $this;
    }

    public function getOcho(): ?string
    {
        return $this->ocho;
    }

    public function setOcho(?string $ocho): static
    {
        $this->ocho = $ocho;

        return $this;
    }

    public function getNueve(): ?string
    {
        return $this->nueve;
    }

    public function setNueve(?string $nueve): static
    {
        $this->nueve = $nueve;

        return $this;
    }

    public function getDiez(): ?string
    {
        return $this->diez;
    }

    public function setDiez(?string $diez): static
    {
        $this->diez = $diez;

        return $this;
    }

    public function getOnce(): ?string
    {
        return $this->once;
    }

    public function setOnce(?string $once): static
    {
        $this->once = $once;

        return $this;
    }

    public function getDoce(): ?string
    {
        return $this->doce;
    }

    public function setDoce(?string $doce): static
    {
        $this->doce = $doce;

        return $this;
    }

    public function getTrece(): ?string
    {
        return $this->trece;
    }

    public function setTrece(?string $trece): static
    {
        $this->trece = $trece;

        return $this;
    }

    public function getCatorce(): ?string
    {
        return $this->catorce;
    }

    public function setCatorce(?string $catorce): static
    {
        $this->catorce = $catorce;

        return $this;
    }

    public function getLugar(): ?string
    {
        return $this->lugar;
    }

    public function setLugar(string $lugar): static
    {
        $this->lugar = $lugar;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(string $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?string
    {
        return $this->hora;
    }

    public function setHora(string $hora): static
    {
        $this->hora = $hora;

        return $this;
    }

    public function getPeriodo(): ?string
    {
        return $this->periodo;
    }

    public function setPeriodo(string $periodo): static
    {
        $this->periodo = $periodo;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): static
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}
