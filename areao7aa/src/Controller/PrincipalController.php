<?php

namespace App\Controller;

use App\Repository\GruposRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'pri_')]
class PrincipalController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(GruposRepository $gr): Response
    {
        $ciudad = $gr->distintos();
        $municipios = $gr->distintosMunicipios();
        $orden = $gr->ordenarGrupos();
        $grupos = $gr->findAll();
        dump($municipios);
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'ciudades' => $ciudad,
            'municipios' => $municipios,
            'ordenar' => $orden,
            'grupos' => $grupos,
        ]);
    }

    #[Route('/verGrupo/{id}', name: 'verGrupo')]
    public function verGrupo(GruposRepository $gr, int $id) : Response
    {
        $grupo = $gr->find($id);

        return $this->render('principal/grupo.html.twig', [
            'grupos' => $grupo,
        ]);
    }


}
