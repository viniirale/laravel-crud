
<div class=" box-shadow green col-lg-9 listaProdutos">
    <h1 class="text-center green">Lista de Produtos Admin</h1>
    <hr class="green">
    @foreach ($categorias as $categoria)
    <div class="row mb-2 text-center">
        <h2 class="mb-3">{{$categoria->categoria}}</h2>
        @foreach ($produtos as $produto)
        @if ($produto->id_categoria == $categoria->id)
        <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="card produto-card-md produto-card-lg produto-card-sm mx-auto mb-4">
                <div class="d-flex justify-content-between align-items-start">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $produto->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    @include('adminPage/produtos/editProdutoModalAdmin')
                    <form action="{{ route('excluir.produto', $produto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </div>
                @if($produto->imagem != NULL)
                <img src="{{ asset($produto->imagem) }}" class="card-img-top produto-card-img" alt="{{ $produto->nome }}" title="{{ $produto->nome }}">
                @else
                <img src="{{ asset('/storage/images/imagem_indisponivel.jpg') }}" class="card-img-top produto-card-img" alt="{{ $produto->nome }}" title="{{ $produto->nome }}">
                @endif
                <div class="card-body ">
                    <h5 class="card-title green">{{ $produto->nome }}</h5>
                    <p class="card-value">R$ {{$produto->valor_formatado}}</p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#my{{ $produto->id }}">
                        Descrição
                    </button>
                    <div class="modal fade" id="my{{ $produto->id }}">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header d-flex justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div>
                                    <h4 class="modal-title ">{{ $produto->nome }}</h4>  
                                </div>
                                <div class="modal-body card-text">
                                    {{ $produto->descricao }}
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>