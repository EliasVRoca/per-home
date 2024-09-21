<?php
class App
{
    public function __construct()
    {
        Flight::route('/public/', function(){
            echo 'Hola';
        });
        
        require_once __DIR__ . '/../routers/api.php';
        require_once __DIR__ . '/../routers/web.php';
        Flight::start();
    }
}
