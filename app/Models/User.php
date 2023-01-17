<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'user_name','name','email','password'
   ];
   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [

   ];
   
 }