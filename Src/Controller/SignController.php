<?php

namespace Src\Controllers;

use Src\Core\Checking;
use Src\Model\UsersModel;

class SignController extends Controller
{

    public function index()
    {
        $check = new Checking([]);
        $check->clean($_POST);

        //vérification des passwords
        $var = $check->getNewclean();

        if ($check->passwordConfirm($var[3], $var[4])) {
            if ($check->validateEmail($var[2])) {
                $user = new UsersModel();
                $users = $user->setFirstname($var[0])
                    ->setLastname($var[1])
                    ->setEmail($var[2])
                    ->setPassword(password_hash($var[3], PASSWORD_ARGON2I))
                    ->setRole("user");
                $user->create($users);
            }
        }




        $this->twig->display('sign/sign.html.twig');
    }
    /**
     * Inscription des utilisateurs 
     *
     * @return void
     */
    public function register()
    {



        // $checking->clean();
    }
}
