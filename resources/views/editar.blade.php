@extends('layouts.main')

@section('titulo')
  Editando: {{ $post->titulo }}
@endsection

@section('contenido')
  <h1>Editar entrada</h1>
  <form action="{{ url('editar') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $post->id }}">
    <!-- <div class="modal-body"> -->
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="{{ $post->titulo }}">
      </div>
      <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea name="contenido" class="form-control" rows="12" cols="80">{{ $post->contenido }}</textarea>
      </div>
    <!-- </div> -->
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Guardar">
    </div>

  </form>
@endsection
