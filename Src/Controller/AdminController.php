<?php

namespace Src\Controllers;

use Src\Model\BookModel;

class AdminController extends Controller
{

    public function index()
    {

        $book = new BookModel();
        $books = $book->findAll();

        $this->twig->display('Admin/admin.html.twig', [
            'books' => $books
        ]);
    }
}
