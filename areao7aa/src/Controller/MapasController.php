<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('mapas')]
class MapasController extends AbstractController
{
    #[Route('/', name: 'mapas')]
    public function index(): Response
    {
        return $this->render('mapas/index.html.twig', [
            'controller_name' => 'MapasController',
        ]);
    }
}
