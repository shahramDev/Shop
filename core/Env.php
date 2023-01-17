<?php

namespace Core;

class Env {
    public static function load () 
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/..');
        $dotenv->safeLoad();
    }
}