<?php

use Kint\Kint;

class MainController
{
    public function __construct()
    {
    }

    public function main()
    {
        echo blade()->run('welcome');
        // $users = new UsuariosModel();
        // $res =  $users->obtenerTodosUsuarios();
        // Kint::dump($res);
    }
}
