@extends('base')

@section('content')
<div class="row border-top-green">
    @include('adminPage/produtos/adicionarProdutoAdmin')
    @include('adminPage/produtos/listaProdutosAdmin')
</div>
<div class="row border-top-green">
    @include('adminPage/categorias/adicionarCategoriaAdmin')
    @include('adminPage/categorias/listaCategoriasAdmin')
</div>
@endsection
