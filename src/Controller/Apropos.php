<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Apropos extends AbstractController
{
    #[Route('/about')]
    public function index(): Response
    {
        return $this->render('pages/apropos.html.twig');
    }
}