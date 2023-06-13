<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'library')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig');
    }

    #[Route('/library/book/create', name: 'book_create_get', methods: ['GET'])]
    public function showCreateBook(): Response
    {
        return $this->render('book/create.html.twig');
    }

    #[Route('/library/book/create', name: 'book_create_post', methods: ['POST'])]
    public function createBook(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();
        $title = $request->request->get('title');
        $author = $request->request->get('author');
        $isbn = $request->request->get('isbn');
        $image = $request->request->get('image');

        $book = new Book();
        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setIsbn($isbn);
        $book->setImage($image);

        // tell Doctrine you want to (eventually) save the book
        // (no queries yet)
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // $data = [
        //     'title' => $book->getTitle(),
        //     'author' => $book->getAuthor(),
        //     'isbn' => $book->getIsbn(),
        //     'image' => $book->getImage(),
        // ];

        return $this->redirectToRoute('book_show_all');
    }

    #[Route('/library/book/show/{id}', name: 'book_by_id')]
    public function showBookById(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository
            ->find($id);

        // return $this->json($book);
        return $this->render('book/one.html.twig', [ 'book' => $book ]);
    }

    #[Route('/library/book/show', name: 'book_show_all')]
    public function showAllBook(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();
        // var_dump($books);

        // return $this->json($books);
        return $this->render('book/all.html.twig', [ 'books' => $books, 'num_books' => count($books) ]);
    }

    // update details book
    #[Route('/library/book/update/{id}', name: 'book_update_get', methods: ['GET'])]
    public function showUpdateBook(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        // $product->setValue($value);
        // $productRepository->save($product, true);

        // return $this->redirectToRoute('product_show_all');
        return $this->render('book/update.html.twig', [ 'book' => $book ]);
    }

    #[Route('/library/book/update/{id}', name: 'book_update_post', methods: ['POST'])]
    public function updateBook(
        Request $request,
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        $title = $request->request->get('title');
        $author = $request->request->get('author');
        $isbn = $request->request->get('isbn');
        $image = $request->request->get('image');

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setIsbn($isbn);
        $book->setImage($image);
        $bookRepository->save($book, true);

        return $this->redirectToRoute('book_update_get', [ 'id' => $id ]);
        // return $this->render('book/update.html.twig', [ 'book' => $book ]);
    }

    #[Route('/library/book/delete/{id}', name: 'book_delete_get', methods: ['GET'])]
    public function showDeleteBook(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        return $this->render('book/delete.html.twig', [ 'book' => $book ]);
    }

    #[Route('/library/book/delete/{id}', name: 'book_delete_by_id', methods: ['POST'])]
    public function deleteBookById(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $bookRepository->remove($book, true);

        return $this->redirectToRoute('book_show_all');
    }

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