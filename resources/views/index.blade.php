@extends('base')

@section('content')
<a href="{{ route ('login-admin.index') }}">Login</a>
<h1 class="text-center green">Lista de Produtos</h1>
<hr class="green">
@foreach ($categorias as $categoria)
<div class="row mb-2 = text-center">
    <h2 class=" mb-3">{{$categoria->categoria}}</h2>
    @foreach ($produtos as $produto)
    @if ($produto->id_categoria == $categoria->id)
    <div class="col-lg-6 col-sm-12 col-xs-12 ">
        <div class="card produto-card-lg produto-card-sm mx-auto mb-4">
            <img src="{{ asset('images/imagem_indisponivel.jpg') }}" class="card-img-top produto-card-img "
            alt="{{ $produto->nome }}" title="{{ $produto->nome }}">
            <div class="card-body ">
                <h5 class="card-title green">{{ $produto->nome }}</h5>
                <p class="card-value">R$ {{$produto->valor}}</p>
                <p class="card-text">{{ $produto->descricao }}</p>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endforeach
@endsection