<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function index($name){
      
        return view('index',['name'=>$name,'user'=>$name]);
        
    }
}
