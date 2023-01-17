<?php

namespace Core;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class view {

    public static function load ( string $view , array $array = [] )
    {
        $loader = new FilesystemLoader(__DIR__.'/../resources/views');
        $twig = new Environment($loader,['cache'=>__DIR__.'/../resources/cache']);
        echo $twig->render($view.'.html.twig', $array );
    }

}