<div class="col-lg-3">
    <form class="green" id="adicionarCategoriaForm" action="{{ route('adicionar.categoria') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="text-center green" action="{{ route('adicionar.categoria') }}" method="POST" enctype="multipart/form-data">Adicionar Categoria:</h4>
        <div class="mb-3">
            <label for="nome-categoria-form" class="form-label">Nome da Categoria</label>
            <input name="nome-categoria-form" type="text" class="form-control" id="nome-categoria-form" placeholder="Insira o nome da categoria" required>
            @error('nome-categoria-form')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select mb-5" aria-label="" name="status-categoria-form" required>
                <option value="" selected>Selecione um status</option>
                <option value="Ativo" >Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
            @error('status-categoria-form')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success col-12 mb-3">Adicionar Categoria</button>
    </form>
</div>