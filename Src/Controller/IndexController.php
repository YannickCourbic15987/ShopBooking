<?php

namespace Src\Controllers;

use Src\Model\BookModel;
use Src\Model\UsersModel;

class IndexController extends Controller
{
    public function index()
    {

        // $path = dirname(dirname(__DIR__));
        // $root = explode('\\', $path);
        // $root = join('/', $root);
        // define('ROOT', $root);
        // $donnees = ['a ', 'b'];
        // include_once ROOT . "/templates/home/index.php";

        $this->twig->display('home/home.html.twig');

        //*  Mon controller va automatiquement  transférer , puisqu'on fait qu'on fait un include du index.php dans le controller , 
        //*donc la variable données existe , donc j'ai accés depuis le fichier php que j'inclue après   */
        // $book = new BookModel;
        // $livre = $book
        //     ->setTitle('livre5')
        //     ->setDescription('description modifiée')
        //     ->setPicture('test.jpg')
        //     ->setReleaseDate('15/12/2020');
        // $book->create($livre);
        // $book->update(12, "id_book", $livre);
        // $book->delete(14, 'id_book');
        // $donnees = [
        //     'title' => 'livre hydratée',
        //     'description' => 'desc hydrater',
        //     'picture' => 'eau.png',
        //     'releaseDate' => '15/12/2027'
        // ];

        // $livre2 = $book->hydrate($donnees);
        // $book->create($livre2);
        // $user = new UsersModel();
        // $users = $user
        //     ->setFirstname('Yannick')
        //     ->setLastname('Courbic')
        //     ->setEmail('a.yacine2020@laposte.net')
        //     ->setPassword(password_hash('test', PASSWORD_ARGON2I));
        // $user->create($users);
        // echo "<pre>";
        // var_dump($user);
        // echo "<pre/>";
        // var_dump($book->findAll());
        // $livre = $book->findBy(['id_book' => 2]);
        // $livre2 = $book->find('id_book', '1');
        // var_dump($livre);
        // var_dump($livre2);







    }
}
