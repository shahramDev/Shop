<?php

$router->get('/(\w+)', 'User@showProfile');

$router->get('/greeting', function () {
    view('userProfile',['the'=>'mmad']);
});

$router->set404('/', function () {
    view('pageNotFound');
});