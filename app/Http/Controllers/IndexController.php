<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Produto;

class IndexController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();
        //$produtos = Produto::select('produto.*', 'categoria.nome')->join('categoria', 'produto.id_categoria', '=', 'categoria.id');
        return view('index', ['produtos' => $produtos, 'categorias' => $categorias]);
    }
}
