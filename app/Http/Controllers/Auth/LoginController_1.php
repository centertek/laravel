<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;


class LoginController_1 extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        if(Auth::attemp($credentials))
        {
            return 'Tu sesion iniciada correctamente';
        }
        return back()->withError(['email' => 'Error de autenticacion']);
    }
}
