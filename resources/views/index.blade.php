@extends('layouts.main')

@section('titulo')
  Portada
@endsection

@section('contenido')
  <!-- LEER LOS ARTICULOS DE LA DDBB E IR RECORRIÉNDOLOS Y MOSTRÁNDOLOS -->
  @forelse ($posts as $post)
    <div class="card">

      <div class="card-header">
        <div class="row justify-content-between">
          <div class="col-9">
            <h5>
              <a href="{{ url('post', [$post->id]) }}">
                  {{ $post->titulo }}
              </a>
            </h5>
          </div>
          <div class="col-3 text-right">
            <a href="{{ url('editar', [$post->id]) }}" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i></a>
            <a href="{{ url('borrar', [$post->id]) }}" class="btn btn-link btn-sm"><i class="fa fa-times"></i></i></a>
          </div>
        </div>
      </div>



      <div class="card-body">
        <!-- la expresión usada a continuación es para que me respete los saltos de línea y demás del texto -->
        <p class="card-text">{!! nl2br($post->contenido) !!}</p>
      </div>
    </div>
  @empty
    <h1 class="display-4">No hay entradas para mostrar</h1>
  @endforelse
@endsection
