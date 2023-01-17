<?php

namespace App\Controllers;

use App\Models\User as Model;
use Core\view;

class User {

    public function showProfile($param)
    {
        $user = Model::where('user_name',$param);
        $check = $user->exists();
        if ($check){
            $user_data = $user->first();
            view::load('userProfile',['name'=>$user_data->name]);
        }
    }

}