<?php

namespace App\Entity;

use App\Repository\GruposRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GruposRepository::class)
 */
class Grupos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $local;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $zona;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codpos;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $sitios;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cerradas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $abiertas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $online;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otros;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $lm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $mm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $xm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $jm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $vm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $sm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $dm;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $lt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $mt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $xt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $jt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $vt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $st;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $dt;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $lo;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $mo;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $xo;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $jo;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $vo;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $so;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     */
    private $do;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $servidor1;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $servidor2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $servidor3;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lng;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getZona(): ?string
    {
        return $this->zona;
    }

    public function setZona(?string $zona): self
    {
        $this->zona = $zona;

        return $this;
    }

    public function getCodpos(): ?string
    {
        return $this->codpos;
    }

    public function setCodpos(?string $codpos): self
    {
        $this->codpos = $codpos;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(?string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getSitios(): ?string
    {
        return $this->sitios;
    }

    public function setSitios(?string $sitios): self
    {
        $this->sitios = $sitios;

        return $this;
    }

    public function getCerradas(): ?string
    {
        return $this->cerradas;
    }

    public function setCerradas(?string $cerradas): self
    {
        $this->cerradas = $cerradas;

        return $this;
    }

    public function getAbiertas(): ?string
    {
        return $this->abiertas;
    }

    public function setAbiertas(?string $abiertas): self
    {
        $this->abiertas = $abiertas;

        return $this;
    }

    public function getOnline(): ?string
    {
        return $this->online;
    }

    public function setOnline(?string $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getOtros(): ?string
    {
        return $this->otros;
    }

    public function setOtros(?string $otros): self
    {
        $this->otros = $otros;

        return $this;
    }

    public function getLm(): ?string
    {
        return $this->lm;
    }

    public function setLm(?string $lm): self
    {
        $this->lm = $lm;

        return $this;
    }

    public function getMm(): ?string
    {
        return $this->mm;
    }

    public function setMm(?string $mm): self
    {
        $this->mm = $mm;

        return $this;
    }

    public function getXm(): ?string
    {
        return $this->xm;
    }

    public function setXm(?string $xm): self
    {
        $this->xm = $xm;

        return $this;
    }

    public function getJm(): ?string
    {
        return $this->jm;
    }

    public function setJm(?string $jm): self
    {
        $this->jm = $jm;

        return $this;
    }

    public function getVm(): ?string
    {
        return $this->vm;
    }

    public function setVm(?string $vm): self
    {
        $this->vm = $vm;

        return $this;
    }

    public function getSm(): ?string
    {
        return $this->sm;
    }

    public function setSm(?string $sm): self
    {
        $this->sm = $sm;

        return $this;
    }

    public function getDm(): ?string
    {
        return $this->dm;
    }

    public function setDm(?string $dm): self
    {
        $this->dm = $dm;

        return $this;
    }

    public function getLt(): ?string
    {
        return $this->lt;
    }

    public function setLt(?string $lt): self
    {
        $this->lt = $lt;

        return $this;
    }

    public function getMt(): ?string
    {
        return $this->mt;
    }

    public function setMt(?string $mt): self
    {
        $this->mt = $mt;

        return $this;
    }

    public function getXt(): ?string
    {
        return $this->xt;
    }

    public function setXt(?string $xt): self
    {
        $this->xt = $xt;

        return $this;
    }

    public function getJt(): ?string
    {
        return $this->jt;
    }

    public function setJt(?string $jt): self
    {
        $this->jt = $jt;

        return $this;
    }

    public function getVt(): ?string
    {
        return $this->vt;
    }

    public function setVt(?string $vt): self
    {
        $this->vt = $vt;

        return $this;
    }

    public function getSt(): ?string
    {
        return $this->st;
    }

    public function setSt(?string $st): self
    {
        $this->st = $st;

        return $this;
    }

    public function getDt(): ?string
    {
        return $this->dt;
    }

    public function setDt(?string $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getLo(): ?string
    {
        return $this->lo;
    }

    public function setLo(?string $lo): self
    {
        $this->lo = $lo;

        return $this;
    }

    public function getMo(): ?string
    {
        return $this->mo;
    }

    public function setMo(?string $mo): self
    {
        $this->mo = $mo;

        return $this;
    }

    public function getXo(): ?string
    {
        return $this->xo;
    }

    public function setXo(?string $xo): self
    {
        $this->xo = $xo;

        return $this;
    }

    public function getJo(): ?string
    {
        return $this->jo;
    }

    public function setJo(?string $jo): self
    {
        $this->jo = $jo;

        return $this;
    }

    public function getVo(): ?string
    {
        return $this->vo;
    }

    public function setVo(?string $vo): self
    {
        $this->vo = $vo;

        return $this;
    }

    public function getSo(): ?string
    {
        return $this->so;
    }

    public function setSo(?string $so): self
    {
        $this->so = $so;

        return $this;
    }

    public function getDo(): ?string
    {
        return $this->do;
    }

    public function setDo(?string $do): self
    {
        $this->do = $do;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getServidor1(): ?string
    {
        return $this->servidor1;
    }

    public function setServidor1(?string $servidor1): self
    {
        $this->servidor1 = $servidor1;

        return $this;
    }

    public function getServidor2(): ?string
    {
        return $this->servidor2;
    }

    public function setServidor2(?string $servidor2): self
    {
        $this->servidor2 = $servidor2;

        return $this;
    }

    public function getServidor3(): ?string
    {
        return $this->servidor3;
    }

    public function setServidor3(?string $servidor3): self
    {
        $this->servidor3 = $servidor3;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(?string $lng): self
    {
        $this->lng = $lng;

        return $this;
    }
}
