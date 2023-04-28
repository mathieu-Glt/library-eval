<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home", methods={"GET"})
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('home/welcome.html.twig', [
            'welcome' => 'Welcome on my web app library !',
        ]);
    }
}
