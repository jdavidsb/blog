@extends('layouts.main')

@section('titulo', $post->titulo)
@section('contenido')
  <h1 class="display-4">{{ $post->titulo }}</h1>
  <hr>
  <div>
    {!! nl2br($post->contenido) !!}
  </div>
  <p>&nbsp;</p>
  <div class="card">
    <div class="card-block">
      <div class="row">
        <div class="col-6"> <small>0 Comentarios</small> </div>
        <div class="col-6 text-right">
          <small>{{ $post->created_at }}</small>
        </div>
      </div>
    </div>
  </div>
@endsection
