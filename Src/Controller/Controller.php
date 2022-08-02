<?php

namespace Src\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    private $loader;
    protected $twig;



    public function __construct()
    {
        $path = dirname(dirname(__DIR__));
        $root = explode('\\', $path);
        $root = join('/', $root);
        define('ROOT', $root);
        //On paramètre le dossier contenant nos templates

        $this->loader = new FilesystemLoader(ROOT . '/templates');

        $this->twig = new Environment($this->loader);
    }
}
