<div class="modal fade" id="edit{{ $produto->id }}">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex ">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div>
                <h4 class="modal-title ">{{ $produto->nome }}</h4>  
            </div>
            <div class="modal-body card-text">
                <form class="green" id="editarProdutoForm" action="{{ route('editar.produto', $produto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="produto_id" value="{{ $produto->id }}">
                    <div class="mb-3">
                        <label for="nome-produto-form-edit-modal" class="form-label"><h5>Nome do Produto </h5></label>
                        <input name="nome-produto-form-edit-modal" type="text" class="form-control" id="nome-produto-form-edit-modal" value="{{$produto->nome}}" required>
                        @error('nome-produto-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descricao-produto-form-edit-modal" class="form-label"><h5>Descrição do Produto </h5></label>
                        <input name="descricao-produto-form-edit-modal" type="text" class="form-control" id="descricao-produto-form-edit-modal" value="{{$produto->descricao}}" required>
                        @error('descricao-produto-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="valor-produto-form-edit-modal" class="form-label"><h5>Valor do Produto</h5></label>
                        <input name="valor-produto-form-edit-modal" type="number" step="0.01" class="form-control" id="valor-produto-form-edit-modal" value="{{$produto->valor}}" required>
                        @error('valor-produto-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto-produto-form-edit-modal" class="form-label"><h5>Foto do Produto</h5></label>
                        <input name="foto-produto-form-edit-modal" class="form-control" type="file" multiple accept="image/*" value="{{$produto->imagem}}" id="foto-produto-form-edit-modal" onchange="previewImageEditModal()">
                        @error('foto-produto-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                        <img id="frameEditModal" src="{{ asset($produto->imagem) }}" class="img-fluid my-2"/>
                    </div>
                    <select class="form-select mb-5" aria-label="Default select example" name="id-categoria-form-edit-modal" required>
                        <option value="">Selecione uma categoria</option>
                        @foreach ($categorias as $categoria)
                        @if($produto->id_categoria == $categoria->id)
                        <option value="{{$categoria->id}}" selected>{{$categoria->categoria}} </option>
                        @else
                        <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('id-categoria-form-edit-modal')
                    <span>{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-success col-12 mb-3">Editar Produto</button>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>