<?php
class SisController
{
    function __construct()
    {
        if (!existeSesion()) {
            Flight::redirect('/auth/login');
            exit();
        }
    }
    public function main()
    {
        echo blade()->run('/src/inicio.blade.php');
    }
}
