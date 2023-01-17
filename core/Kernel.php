<?php

namespace Core;

class Kernel {

    public static function load ()
    {
        ORM::load();
        $router = new \Bramus\Router\Router();
        $router->setNamespace('\App\Controllers');
        require_once __DIR__.'/helping.php';
        require_once __DIR__.'/../routes/web.php';
        $router->run();
    }

}