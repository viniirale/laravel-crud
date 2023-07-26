<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
        //var_dump('login');  
    }

    public function store()
    {
        var_dump('entrei neste login');   
    }
    public function destroy()
    {
        var_dump('logout');
    }
}
