<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
    #[Route('/')]
    public function index(): Response
    {
        $utilisateurs = [
            ['nom' => 'John ninja', 'email' => 'JohnNinja@kungfu.com', 'bio' => 'Maître d\'art.'],
            ['nom' => 'ElFuego', 'email' => 'ElFuego@gmail.com', 'bio' => 'Catcheur pro.'],
            ['nom' => 'Patric', 'email' => 'Patric@gmail.com', 'bio' => 'Habitué du PMU.'],
        ];

        return $this->render('home/index.html.twig', [
            'message' => 'Fiche de presentation d\'utilisateurs fictif',
            'utilisateurs' => $utilisateurs,
        ]);
    }
}
