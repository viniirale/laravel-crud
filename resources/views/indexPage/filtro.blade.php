<div class="col-lg-3">
    <form>
        @csrf
        <h4 class="text-center green">Filtrar por Categorias:</h4>
        @foreach ($todasCategorias as $todasCategoria)
        @if($todasCategoria->status == "Ativo")
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="categorias[]" value="{{ $todasCategoria->id }}" id="categoria{{ $todasCategoria->id }}">
            <label class="form-check-label" for="categoria{{ $todasCategoria->id }}">
                {{ $todasCategoria->categoria }}
            </label>
        </div>
        @endif
        @endforeach
        <h4 class="text-center green">Filtrar por Nome do Produto:</h4>
        <div class="mb-3">
            <input type="text" class="form-control" name="busca" placeholder="Digite o nome do produto">
        </div>
        <button type="submit" class="btn btn-success col-12 mb-3">Filtrar</button>
    </form>
</div>