<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ],
        ['password.min'=> 'A senha precisa ter no minimo :min caracteres'
    ]);

    $credentials = $request -> only('email', 'password');

    $autenthicated = Auth::attempt($credentials);
    dd($credentials);
    die();
    if(!$autenthicated) {
        return redirect()->route('login-admin.index')->withErrors(['error' => 'email ou senha inválidos!']);
    }

    return redirect()->route('login-admin.index')->with('success', 'Logado!');

    }
    public function destroy()
    {
        var_dump('logout');
    }
}
