<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesnameController extends AbstractController
{
    #[Route('/moviesname', name: 'app_moviesname')]
    public function index(): Response
    {
        return $this->render('moviesname/index.html.twig', [
            'controller_name' => 'MoviesnameController',
        ]);
    }
}
