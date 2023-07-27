@extends('base')

@section('content')
<div class="row border-top-green">
    
    @include('indexListaProdutos/filtro')
    @include('indexListaProdutos/listaProdutos')
</div>
@endsection
