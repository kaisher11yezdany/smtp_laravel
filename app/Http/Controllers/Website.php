<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Website extends Controller
{

   public function index (){



    $data=['name'=>"Vishal",'data2'=>"HelloVishal"];
    $user['to']='ctotechisor@gmail.com';

    Mail::send('mail2',$data,function($messages)use($user){
    $messages->to($user['to']);
    $messages->subject('Hello');
    });



       // echo "Hello";
    }


}
