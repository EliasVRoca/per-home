<?php
spl_autoload_register(function ($controller) {
    $path = __DIR__ . '/../controllers/' . $controller . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
spl_autoload_register(function ($model) {
    $path = __DIR__ . '/../models/' . $model . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
