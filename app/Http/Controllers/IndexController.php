<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Produto;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $todasCategorias = Categoria::all();
        $categoriasSelecionadas = $request->input('categorias', []);
        $termoBusca = $request->input('busca');
        $produtosQuery = Produto::query();
        $categoriasQuery = Categoria::query();
        if (!empty($categoriasSelecionadas)) {
            $produtosQuery->whereIn('id_categoria', $categoriasSelecionadas);
            $categoriasQuery->whereIn('id', $categoriasSelecionadas);
        }
        if (!empty($termoBusca)) {
            $produtosQuery->where('nome', 'like', '%' . $termoBusca . '%');
            $categoriasQuery->whereIn('id', $produtosQuery->get(['id_categoria']));
        }
        $produtos = $produtosQuery->get();
        $categorias = $categoriasQuery->get();
        foreach ($produtos as $produto) {
            $produto->valor_formatado = number_format($produto->valor, 2, ',', '');
        }
        
        return view('indexPage/index', ['produtos' => $produtos, 'categorias' => $categorias, 'todasCategorias' => $todasCategorias])->render();
    }
}
