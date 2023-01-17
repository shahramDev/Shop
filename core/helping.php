<?php

use Core\view;

function view ( string $view , array $args = [] )
{
    view::load($view,$args);
}