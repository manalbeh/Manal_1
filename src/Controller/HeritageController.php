<?php

namespace App\Controller;

use App\Form\BookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Book;

class HeritageController extends AbstractController
{
    #[Route('/heritage', name: 'app_heritage')]
    public function index(): Response
    {
        $text="Hello This is home!";
        $tabYear=[2020,2021,2022,2023];
        return $this->render('heritage/index.html.twig', [
            'controller_name' => 'HeritageController',
            "text" => $text,
            "years"=> $tabYear,
        ]);
    }
    #[Route('/add-book', name: 'app_book_add')]
    public function addBook(): Response
    {
        $book= new Book();
        $bookForm= $this->createForm(type:BookType::class, data: $book);
        return $this->render(view: 'heritage/dummy.html.twig', parameters:["bookForm"=>$bookForm]);
    }
}
