<?php

namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class ORM {

    public static function load()
    {
        Env::load();
        
        $capsule = new Capsule;

        $capsule->addConnection([
            "driver" => $_ENV['DB_DRIVER'],
            "host" => $_ENV['DB_HOST'],
            "database" => $_ENV['DB_NAME'],
            "username" => $_ENV['DB_USER'],
            "password" => $_ENV['DB_PASSWORD'],
            "port" => $_ENV['DB_PORT'],
            'charset'   => $_ENV['DB_CHARSET'],
            'collation' => $_ENV['DB_COLLOCATION'],
        ]);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
    
}