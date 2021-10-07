<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function afficherAccueil(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/cgu', name: 'cgu')]
    public function afficherCGU(): Response
    {
        return $this->render('home/cgu.html.twig');
    }
}
