<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);
    }
}
