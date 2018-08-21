<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "Listado de Usuarios";
        return view('users', 
        [
            'title'=>$title
        ]);
        
    }
    public  function show($id)
    {
        return "Mostranado detalle usuario: {$id}";
    }
    public function create()
    {
        return "Crear nuevo usuario";
    }
}
