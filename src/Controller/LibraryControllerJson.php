<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

class LibraryControllerJson extends AbstractController
{
    #[Route('api/library/books', name: 'api_book_show_all')]
    public function apiShowAll(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();
        // var_dump($books);

        return $this->json($books);
    }

    #[Route('api/library/book/{isbn}', name: 'api_book_show_isbn')]
    public function apiShowBookByIsbn(
        BookRepository $bookRepository,
        string $isbn
    ): Response {
        $book = $bookRepository->findBy([ 'isbn' => $isbn ]);

        return $this->json($book);
    }
}
