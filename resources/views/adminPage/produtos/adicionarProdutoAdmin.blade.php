<div class="col-lg-3">
    <form class="green" id="adicionarProdutoForm" action="{{ route('adicionar.produto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="text-center green" action="{{ route('adicionar.produto') }}" method="POST" enctype="multipart/form-data">Adicionar Produto:</h4>
        <div class="mb-3">
            <label for="nome-produto-form" class="form-label">Nome do Produto</label>
            <input name="nome-produto-form" type="text" class="form-control" id="nome-produto-form" placeholder="Insira o nome do produto" required>
            @error('nome-produto-form')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descricao-produto-form" class="form-label">Descrição do Produto</label>
            <input name="descricao-produto-form" type="text" class="form-control" id="descricao-produto-form" placeholder="Insira a descricao do produto" required>
            @error('descricao-produto-form')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="valor-produto-form" class="form-label">Valor do Produto</label>
            <input name="valor-produto-form" type="number" step="0.01" class="form-control" id="valor-produto-form" placeholder="Insira o valor do produto" required>
            @error('valor-produto-form')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="foto-produto-form" class="form-label">Foto do Produto</label>
            <input name="foto-produto-form" class="form-control" type="file" multiple accept="image/*" id="foto-produto-form" onchange="previewImage()">
            @error('foto-produto-form')
            <span>{{ $message }}</span>
            @enderror
            <img id="frame" src="" class="img-fluid my-2"/>
        </div>
        <select class="form-select mb-5" aria-label="Default select example" name="id-categoria-form" required>
            <option value="" selected>Selecione uma categoria</option>
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        @error('id-categoria-form')
        <span>{{ $message }}</span>
        @enderror
        <button type="submit" class="btn btn-success col-12 mb-3">Adicionar Produto</button>
    </form>
</div>