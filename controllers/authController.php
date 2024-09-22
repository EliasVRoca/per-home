<?php

use Kint\Kint;

class authController
{
    function __construct() {}
    public function login()
    {
        if (existeSesion()) {
            Flight::redirect('/sis/inicio');
            exit();
        }
        $blade = blade();
        echo $blade->run('src/login.blade.php');
    }
    public function validateLogin()
    {
        $email = Flight::request()->data['email'];
        $pass = Flight::request()->data['password'];
        $users = new UsuariosModel();
        $usuario = $users->obtenerUsuarioPorEmail($email);
        if (count($usuario) == 0) {
            Flight::redirect(base() . "/auth/login?error");
        }
        if ($pass != $usuario[0]['clave']) {
            Flight::redirect(base() . "/auth/login?error");
        } else {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $usuario[0]['id'];
            Flight::redirect('/sis/inicio');
        }
    }
    public function destroyLogin()
    {
        session_start();
        $_SESSION['id'] = '';
        $_SESSION['email'] = '';
        session_destroy();
        Flight::redirect('/auth/login');
    }
}
