<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControllers extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginReq(Request $request){
        $validated = $request->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('etudiants')->with('status', 'Inscription avec succéess');
    }
    
}
