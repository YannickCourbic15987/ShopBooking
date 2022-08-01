<?php

namespace Src\Controllers;

use Src\Model\BookModel;

class IndexController
{
    public function index()
    {
        echo "Ceci est la page d'accueil ";
        $book = new BookModel;
        $livre = $book
            ->setTitle('livre3')
            ->setDescription('desc')
            ->setPicture('img.jpg')
            ->setReleaseDate('15/12/1997');

        $book->create($livre);

        echo "<pre>";
        var_dump($livre);
        echo "<pre/>";




        // var_dump($book->findAll());
        // $livre = $book->findBy(['id_book' => 2]);
        // $livre2 = $book->find('id_book', '1');
        // var_dump($livre);
        // var_dump($livre2);

    }
}
