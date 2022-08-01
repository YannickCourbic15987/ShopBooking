<?php



use Src\Core\Main;



require "../vendor/autoload.php";

// on définie une constante contenant le dossier racine du projet;
// define('ROOT', dirname(__DIR__));
// $dir = ROOT . "/vendor/autoload.php";
// $dirRoot = join('/', explode("\\", $dir));
// dump($dirRoot);

// on va instancier main 
$src = new Main();

//on démarre l'application
$src->start();
