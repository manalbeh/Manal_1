<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #routage par attribut
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return new Response(content: "Hello World !");
    }
    #[Route('/about/{entier}', name: 'app_about', requirements: ['entier' => '\d+'])]
    public function about(int $entier = 776): Response
    {
        return new Response(content: "Hello ".$entier."!");
    }
    #[Route('/about/contact', name: 'contact_about')]
    public function contact(): Response
    {
        return new Response(content: "Bienvenue");
    }
}
