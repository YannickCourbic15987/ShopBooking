<?php

namespace Src\Controllers;

use Src\Model\BookModel;

class BookController extends Controller
{
    public function index()
    {
        $book = new BookModel();
        $books = $book->findAll();
        $this->twig->display('book/book.html.twig', [
            'books' => $books
        ]);
    }
}
