<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        ],  [
            'password.min'=> 'A senha precisa ter no minimo :min caracteres'
            ]
        );
        $credentials = $request -> only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        if(!$authenticated)
        {
            return redirect()->route('login-admin.index')->with('error', 'Email ou senha invalido!');
        }
        return redirect()->route('admin.index')->with('success', 'Logado!');
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login-admin.index')->with('success', 'Logado!');
    }
}
