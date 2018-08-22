<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;


class LoginController_1 extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('email', 'password');
        if(Auth::attemp($credenciales))
        {
            return 'Tu sesion iniciada correctamente';
        }
        return back()->withError(['email' => 'Error de autenticacion']);
    }
}
