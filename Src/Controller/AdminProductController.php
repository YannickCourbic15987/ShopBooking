<?php

namespace Src\Controllers;



class AdminProductController extends Controller
{
    public function index()
    {

        // dump($_POST['id']);
        // $book = new BookModel();
        // $books = $book->find('id_book', $_POST['id']);
        // dd($books);
        $this->twig->display('Admin/adminProduct.html.twig');
    }
}
