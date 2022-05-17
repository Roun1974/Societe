<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignageController extends AbstractController
{
    #[Route('/temoignage', name: 'app_temoignage')]
    public function index(): Response
    {
        return $this->render('home/temoignage.html.twig', [
            'controller_name' => 'TemoignageController',
        ]);
    }
}
