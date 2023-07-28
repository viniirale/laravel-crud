<div class="modal fade" id="editCategoria{{ $categoria->id }}">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex ">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div>
                <h4 class="modal-title text-center">Editar Categoria</h4>  
            </div>
            <div class="modal-body card-text">
                <form class="green" id="editarCategoriaForm" action="{{ route('editar.categoria', $categoria->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="categoria_id" value="{{ $categoria->id }}">
                    <div class="mb-3">
                        <label for="nome-categoria-form-edit-modal" class="form-label"><h5>Nome da Categoria </h5></label>
                        <input name="nome-categoria-form-edit-modal" type="text" class="form-control" id="nome-categoria-form-edit-modal" value="{{$categoria->categoria}}" required>
                        @error('nome-categoria-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select class="form-select mb-5" aria-label="" name="status-categoria-form-edit-modal" required>
                            <option value="">Selecione um status</option>
                            @if($categoria->status == "Ativo")
                            <option value="Ativo" selected>Ativo</option>
                            <option value="Inativo">Inativo</option>
                            @elseif($categoria->status == "Inativo")
                            <option value="Ativo" >Ativo</option>
                            <option value="Inativo" selected>Inativo </option>
                            @endif
                        </select>
                        @error('status-categoria-form-edit-modal')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success col-12 mb-3">Editar Categoria</button>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>