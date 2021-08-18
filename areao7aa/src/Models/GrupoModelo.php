<?php

namespace App\Models;

use App\Entity\Grupos;
use App\Repository\GruposRepository;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\ORM\EntityManagerInterface;
use Exception as GlobalException;

class GrupoModelo {

    private GruposRepository $gr;
    private EntityManagerInterface $entityManagerInterface;

    public function __construct(
        GruposRepository $gr,
        EntityManagerInterface $entityManagerInterface)
    {
        $this->gr = $gr;
        $this->entityManagerInterface = $entityManagerInterface;
    }

    public function NuevoGrupo(String $nombre,String $direccion,String $local,String $zona,String $codpos,String $ciudad,String $sitios,String $cerradas,String $abiertas,String $online,String $otros,String $lm,String $mm,String $xm,String $jm,String $vm,String $sm,String $dm,String $lt,String $mt,String $xt,String $jt,String $vt,String $st,String $dt,String $lo,String $mo,String $xo,String $jo,String $vo,String $so,String $do,String $link,String $servidor1,String $servidor2,String $servidor3,String $lat,String $lng)
    {
        $grupo = new Grupos();
        $grupo->setNombre($nombre);
        $grupo->setDireccion($direccion);
        $grupo->setLocal($local);
        $grupo->setZona($zona);
        $grupo->setCodpos($codpos);
        $grupo->setCiudad($ciudad);
        $grupo->setSitios($sitios);
        $grupo->setCerradas($cerradas);
        $grupo->setAbiertas($abiertas);
        $grupo->setOnline($online);
        $grupo->setOtros($otros);
        $grupo->setLm($lm);
        $grupo->setMm($mm);
        $grupo->setXm($xm);
        $grupo->setJm($jm);
        $grupo->setVm($vm);
        $grupo->setSm($sm);
        $grupo->setDm($dm);
        $grupo->setLt($lt);
        $grupo->setMt($mt);
        $grupo->setXt($xt);
        $grupo->setJt($jt);
        $grupo->setVt($vt);
        $grupo->setSt($st);
        $grupo->setDt($dt);
        $grupo->setLo($lo);
        $grupo->setMo($mo);
        $grupo->setXo($xo);
        $grupo->setJo($jo);
        $grupo->setVo($vo);
        $grupo->setSo($so);
        $grupo->setDo($do);
        $grupo->setLink($link);
        $grupo->setServidor1($servidor1);
        $grupo->setServidor2($servidor2);
        $grupo->setServidor3($servidor3);
        $grupo->setLat($lat);
        $grupo->setLng($lng);
        dump($grupo);
        try {
            $this->entityManagerInterface->persist($grupo);
            $this->entityManagerInterface->flush();

        } catch (Exception $ex) {
            return 'Error al guardar ' . $ex->getMessage();
        }

        return $grupo;
    }

    /* editar */
    public function EditarGrupo(int $id,String $nombre,String $direccion,String $local,String $zona,String $codpos,String $ciudad,String $sitios,String $cerradas,String $abiertas,String $online,String $otros,String $lm,String $mm,String $xm,String $jm,String $vm,String $sm,String $dm,String $lt,String $mt,String $xt,String $jt,String $vt,String $st,String $dt,String $lo,String $mo,String $xo,String $jo,String $vo,String $so,String $do,String $link,String $servidor1,String $servidor2,String $servidor3,String $lat,String $lng)
    {
        $grupo = $this->gr->find($id);
        $grupo->setNombre($nombre);
        $grupo->setDireccion($direccion);
        $grupo->setLocal($local);
        $grupo->setZona($zona);
        $grupo->setCodpos($codpos);
        $grupo->setCiudad($ciudad);
        $grupo->setSitios($sitios);
        $grupo->setCerradas($cerradas);
        $grupo->setAbiertas($abiertas);
        $grupo->setOnline($online);
        $grupo->setOtros($otros);
        $grupo->setLm($lm);
        $grupo->setMm($mm);
        $grupo->setXm($xm);
        $grupo->setJm($jm);
        $grupo->setVm($vm);
        $grupo->setSm($sm);
        $grupo->setDm($dm);
        $grupo->setLt($lt);
        $grupo->setMt($mt);
        $grupo->setXt($xt);
        $grupo->setJt($jt);
        $grupo->setVt($vt);
        $grupo->setSt($st);
        $grupo->setDt($dt);
        $grupo->setLo($lo);
        $grupo->setMo($mo);
        $grupo->setXo($xo);
        $grupo->setJo($jo);
        $grupo->setVo($vo);
        $grupo->setSo($so);
        $grupo->setDo($do);
        $grupo->setLink($link);
        $grupo->setServidor1($servidor1);
        $grupo->setServidor2($servidor2);
        $grupo->setServidor3($servidor3);
        $grupo->setLat($lat);
        $grupo->setLng($lng);
        dump($grupo);
        try {
            $this->entityManagerInterface->persist($grupo);
            $this->entityManagerInterface->flush();

        } catch (Exception $ex) {
            return 'Error al guardar ' . $ex->getMessage();
        }

        return $grupo;
    }

    /* eliminar grupo */
    public function kitar(int $idd)
    {
        $grupo = $this->gr->find($idd);

        try {
            $this->entityManagerInterface->remove($grupo);
            $this->entityManagerInterface->flush();
        } catch (GlobalException $ex) {
            return 'Error al eliminar ' . $ex->getMessage();
        }

        return $grupo;
    }
}