<?php

require __DIR__ . "/../../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Core\ORM;

ORM::load();

Capsule::schema()->create('users', function ($table) {
    $table->string('user_name');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});