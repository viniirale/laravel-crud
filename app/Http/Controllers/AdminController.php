<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;
use App\Models\Produto;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        foreach ($produtos as $produto) {
            $produto->valor_formatado = number_format($produto->valor, 2, ',', '');
        }
        return view('adminPage/indexAdmin', ['produtos' => $produtos, 'categorias' => $categorias])->render();
    }

    public function adicionarProduto(Request $request)
    {
        
        $request->validate([
            'nome-produto-form' => 'required|string|max:255',
            'descricao-produto-form' => 'required|string',
            'valor-produto-form' => 'required|numeric',
            'foto-produto-form' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id-categoria-form' => 'required|exists:categorias,id',
        ]);
        $produto = new Produto();
        $produto->nome = $request->input('nome-produto-form');
        $produto->descricao = $request->input('descricao-produto-form');
        $produto->valor = $request->input('valor-produto-form');
        $produto->id_categoria = $request->input('id-categoria-form');
      
        if ($request->hasFile('foto-produto-form') && $request->file('foto-produto-form')->isValid()) {
            $path = $request->file('foto-produto-form')->store('public/images');
          
            $produto->imagem = Storage::url($path);
        }
        $produto->save();
        return redirect()->route('admin.index')->with('success', 'Produto adicionado com sucesso!');
    }

    public function editarProduto(Request $request, $id){
        $request->validate([
            'nome-produto-form-edit-modal' => 'required|string|max:255',
            'descricao-produto-form-edit-modal' => 'required|string',
            'valor-produto-form-edit-modal' => 'required|numeric',
            'foto-produto-form-edit-modal' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id-categoria-form-edit-modal' => 'required|exists:categorias,id',
        ]);
        
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->input('nome-produto-form-edit-modal');
        $produto->descricao = $request->input('descricao-produto-form-edit-modal');
        $produto->valor = $request->input('valor-produto-form-edit-modal');
        $produto->id_categoria = $request->input('id-categoria-form-edit-modal');
    
        if ($request->hasFile('foto-produto-form-edit-modal') && $request->file('foto-produto-form-edit-modal')->isValid()) {
            $path = $request->file('foto-produto-form-edit-modal')->store('public/images');
            $produto->imagem = Storage::url($path);
        }
    
        $produto->save();
    
        return redirect()->route('admin.index')->with('success', 'Produto editado com sucesso!');
    }

    public function excluirProduto($id) {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('admin.index')->with('success', 'Produto excluido com sucesso!');
    }


    public function adicionarCategoria(Request $request)
    {
        
        $request->validate([
            'nome-categoria-form' => 'required|string|max:255',
            'status-categoria-form' => 'required|string',
        ]);
        $categoria = new Produto();
        $categoria->nome = $request->input('nome-categoria-form');
        $categoria->status = $request->input('status-categoria-form');
        $categoria->save();
        return redirect()->route('admin.index')->with('success', 'Categoria adicionada com sucesso!');
    }

    public function editarCategoria(Request $request, $id){
        $request->validate([
            'nome-categoria-form' => 'required|string|max:255',
            'status-categoria-form' => 'required|string',
        ]);
        
        $categoria = Categoria::findOrFail($id);
        $categoria->nome = $request->input('nome-categoria-form');
        $categoria->status = $request->input('status-categoria-form');
        $categoria->save();
    
        return redirect()->route('admin.index')->with('success', 'Categoria editada com sucesso!');
    }

    public function excluirCategoria($id) {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('admin.index')->with('success', 'Categoria excluida com sucesso!');
    }
}
