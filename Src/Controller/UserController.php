<?php

namespace Src\Controllers;

use Src\Core\Form;

class UserController extends Controller
{

    public function index()
    {



        $form = new Form;
        $form->startform('GET', 'test', ['class' => 'form-group'])
            ->addlabel('name', 'votre nom')
            ->addInput('name', 'text', ['class' => 'form-control', 'id' => 'name', 'required' => true])
            ->addBtn('valider', ['class' => 'btn btn-primary'])
            ->endform();







        $this->twig->display('users/login.html.twig', [
            'form' => $form->create(),
        ]);
    }
}
