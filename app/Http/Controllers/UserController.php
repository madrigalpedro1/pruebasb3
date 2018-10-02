<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Usuarios

    public function index(){
        if(request()->has('empty')){
            $users = [];
        }else {
        $users = [
            'Pedro',
            'Paco',
            'Pancho',
        ];
    }
        $title = 'Listado de usuario';

        //dd(compact('title','users'));
        return view('users',compact('title','users'));
    }

    //Ver Detalles de usuarios
    
    public function show($id){
        return "Detalle del usuario {$id}";
    }

    //Nuevo usuario
    
    public function create(){
        return "Crear nuevo usuario ";
    }
}
