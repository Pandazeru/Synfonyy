<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Services extends AbstractController
{
    #[Route('/services')]
    public function index(): Response
    {
        return $this->render('pages/services.html.twig');
    }
}