<?php

namespace Src\Core;

use Src\Controllers\IndexController;


class Main
{
    /**
     * Routeur principal 
     *
     */
    public function start()
    {
        // echo "ok";
        // http:/nom-domaine/controller/methode/params;
        // view user => http:shopBoooking.fr/product/details/one-piece-t-43;
        //réécriture d'url 
        //http:shopBooking.fr//index.php?p=product/details/one-piece-43
        //.htaccess permet de réecrire les urls 
        //*d'abord on récup notre url 
        $uri = $_SERVER['REQUEST_URI'];
        //*on retire le traing slash éventuelle 
        // dump($_SERVER['REQUEST_URI']);
        //* on va vérifier uri n'est pas vide et se termine par un /
        if (!empty($uri) && $uri != '/' && $uri[-1] === "/") {
            //*on élève le / 
            $uri = substr($uri, 0,  -1);

            // echo $uri;
            // on envoie un code de redirection permanente 
            http_response_code(301);
            //on redige vers l'url sans /
            header('location:' . $uri);
        }
        //! on va gérer nos paramètre  d'URL 
        //p=controlleur/methode/paramètres
        // on sépare les paramètres dans un tableau 
        $params = explode('/', $uri);
        // unset($params[0]);
        array_shift($params);
        if ($params[0] != '') {
            // on a au moins 1 paramètre 
            // on récupère le nom du controlleur à instancier
            //on doit fabriquer son names 
            //on met une majuscules en 1ère lettre , on ajoute 
            //le namespace complet avant et on ajoute "controller" après
            $controller = "\\Src\\Controllers\\" . ucfirst(array_shift($params)) . 'Controller';
            //on instancie le controlleur
            $controller = new $controller();

            //on récupère le 2ème paramèrtre d'url
            if (isset($params[0])) {
                $action = array_shift($params);
            } else {
                $action = 'index';
            }




            // dd($controller, $action);
            if (method_exists($controller, $action)) {
                // si il reste des paramètres on les passe à la méthode

                if (isset($params[0])) {
                    // $controller->$action($params);
                    call_user_func_array([$controller, $action], $params);
                    // dd($controller);
                } else {

                    $controller->$action();
                }

                // dump($params);
            } else {
                http_response_code(404);
                echo "La page recherché n'existe pas";
            }
            // dump($controller);
            // die();
        } else {
            //controller par défaut , qui sera dans controller et qui va rédiger dans index
            //on n'a pas de paramètres 
            //on instancie le contrôleur
            //on appelle la méthode index 
            $controller = new IndexController();

            $controller->index();
        }
    }
}
