<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    //
    //Usuarios

    public function __invoke($name,$nickname = null){    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
        } else{
            return "Bienvenido {$name}, no tienes apodo";
        }
    }
}
