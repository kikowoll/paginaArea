<?php

namespace App\Controller;

use App\Models\GrupoModelo;
use App\Repository\GruposRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('grupos', name: 'gru_')]
class GruposController extends AbstractController
{

    #[Route('/', name: 'grupos')]
    public function verGrupos(GruposRepository $gruposRepository): Response
    {
        $grupos = $gruposRepository->ordenarGrupos();

        return $this->render('grupos/index.html.twig', [
            'controller_name' => 'GruposController',
            'grupos' => $grupos,
        ]);
    }

    #[Route('/editar/{id}', name: 'editar')]
    public function editar(
        GruposRepository $gruposRepository,
        int $id) :Response
    {
        $grupo = $gruposRepository->find($id);

        dump($grupo);
        return $this->render('grupos/editarGrupos.html.twig',[
            'grupos' => $grupo,
            'editar' => 'si',
        ]);
    }

    #[Route('/nuevo', name: 'nuevo')]
    public function nuevo() :Response
    {

        return $this->render('grupos/editarGrupos.html.twig', [
            'editar' => 'no',
        ]);
    }

    #[Route('/guardar', name: 'guardar')]
    public function guardar(GrupoModelo $grupoModelo,Request $request):Response
    {
        $idd = $request->request->get('idd');
        $nombre = $request->request->get('nombre');
        $direccion = $request->request->get('direcion');
        $local = $request->request->get('local');
        $zona = $request->request->get('zona');
        $codpos = $request->request->get('codpos');
        $ciudad = $request->request->get('ciudad');
        $sitios = $request->request->get('sitios');
        $cerradas = $request->request->get('cerradas');
        $abiertas = $request->request->get('abiertas');
        $online = $request->request->get('online');
        $otros = $request->request->get('otros');
        $lm = $request->request->get('lm');
        $mm = $request->request->get('mm');
        $xm = $request->request->get('xm');
        $jm = $request->request->get('jm');
        $vm = $request->request->get('vm');
        $sm = $request->request->get('sm');
        $dm = $request->request->get('dm');
        $lt = $request->request->get('lt');
        $mt = $request->request->get('mt');
        $xt = $request->request->get('xt');
        $jt = $request->request->get('jt');
        $vt = $request->request->get('vt');
        $st = $request->request->get('st');
        $dt = $request->request->get('dt');
        $lo = $request->request->get('lo');
        $mo = $request->request->get('mo');
        $xo = $request->request->get('xo');
        $jo = $request->request->get('jo');
        $vo = $request->request->get('vo');
        $so = $request->request->get('so');
        $do = $request->request->get('do');
        $link = $request->request->get('link');
        $servidor1 = $request->request->get('ser1');
        $servidor2 = $request->request->get('ser2');
        $servidor3 = $request->request->get('ser3');
        $lat = $request->request->get('lat');
        $lng = $request->request->get('lng');

        if(empty($idd)) {
            /* guarda nuevo */
            $grupo = $grupoModelo->NuevoGrupo($nombre,$direccion,$local,$zona,$codpos,$ciudad,$sitios,$cerradas,$abiertas,$online,$otros,$lm,$mm,$xm,$jm,$vm,$sm,$dm,$lt,$mt,$xt,$jt,$vt,$st,$dt,$lo,$mo,$xo,$jo,$vo,$so,$do,$link,$servidor1,$servidor2,$servidor3,$lat,$lng);
            $dato = $grupo->getNombre();

            if($dato) {
                $this->addFlash('success', $dato . ' guardado con exito');
            } else {
                $this->addFlash('danger', 'Error al guardar grupo');
            }
        } else {
            /* edita */
            $grupo = $grupoModelo->EditarGrupo($idd,$nombre,$direccion,$local,$zona,$codpos,$ciudad,$sitios,$cerradas,$abiertas,$online,$otros,$lm,$mm,$xm,$jm,$vm,$sm,$dm,$lt,$mt,$xt,$jt,$vt,$st,$dt,$lo,$mo,$xo,$jo,$vo,$so,$do,$link,$servidor1,$servidor2,$servidor3,$lat,$lng);
            $dato = $grupo->getNombre();

            if($dato) {
                $this->addFlash('success', $dato . ' modificado con exito');
            } else {
                $this->addFlash('danger', 'Error al modificar grupo');
            }
        }

        return $this->redirectToRoute('gru_nuevo');
    }

    /* kitar grupos */
    #[Route('/quitar/{id}', name: 'quitar')]
    public function quitar(GrupoModelo $grupoModelo, GruposRepository $gruposRepository, $id):Response
    {
        $kitar = $grupoModelo->kitar($id);
        $respuesta = $kitar->getNombre();

        $grupo = $gruposRepository->ordenarGrupos();

        return $this->render('grupos/index.html.twig', [
            'grupos' => $grupo,
            'dato' => $respuesta,
        ]);
    }

    /* imprimir */
    #[Route('/imprimir', name: 'imprimir')]
    public function imprimir() :Response
    {
        return $this->render('grupos/imprimir.html.twig');
    }
}
