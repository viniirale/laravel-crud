<div class=" box-shadow green col-lg-9 listaProdutos">
    <h1 class="text-center green">Lista de Categorias Admin</h1>
    <hr class="green">
    @foreach ($categorias as $categoria)
    <div class="row mb-2 d-flex justify-content-start align-items-start">
        <div class="col">
        <h2 class="mb-3">
            {{$categoria->categoria}}
        </h2>
    </div>
        <div class="col">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $categoria->id }}">
                <i class="bi bi-pencil-square"></i>
            </button></h2>
            @include('adminPage/categorias/editCategoriaModalAdmin')
        </div>
        <div class="col">
            <form action="{{ route('excluir.categoria', $categoria->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
            </form>
        </div>
    </div>
    @endforeach
</div>