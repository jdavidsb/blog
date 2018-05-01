<div class="modal fade" id="crearPost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ url('crear') }}" method="post">
        <!-- Todas las peticiones post de formularios tienen que tener un token asociado -->
        {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control">
          </div>
          <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea name="contenido" class="form-control" rows="12" cols="80"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary" value="Publicar">
        </div>

      </form>
    </div>
  </div>
</div>
