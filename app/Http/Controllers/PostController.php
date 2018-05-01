<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function index(){
    // Ordenar la recogida
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('index', ['posts' => $posts]);
    // return view('index')->with('posts', $posts);
  }
  # request es un objeto que contiene los datos del formulario que nos interesan (titulo y contenido)
  public function crearPost(Request $request){
    $post = new Post;
    # el $post->titulo es el titulo de la base de datos y el $request->titulo es el del formulario
    $post->titulo = $request->titulo;
    $post->contenido = $request->contenido;
    $post->save();

    # redireccionar
    return redirect('/');
    // return view('index');
  }

  public function verPost($id = null){
    if(!isset($id)){
      return redirect('/');
    }
    # Lo siguiente nos hace la consulta y recoge los datos del id que le pasamos
    $post = Post::find($id);
    return view('post', ['post' => $post]);
  }

  public function getBorrar($id = null){
    if(!isset($id)){
      return redirect('/');
    }
    ###
    ### validaciones de todo tipo. que hay permiso para borrar las publicaciones
    ###
    $post = Post::find($id); # con esta línea creamos un objeto $post con las propiedades del $id que le pasamos
    $post->delete();
    return redirect('/');
  }

  public function getEditar($id = null){
    if(!isset($id)){
      return redirect('/');
    }
    ###
    ### validaciones
    ###
    $post = Post::find($id);
    return view('editar', ['post' => $post]);
  }

  public function postEditar(Request $request){
    # instanciar un post que coincida con el id que nos pasa el formulario
    $post = Post::find($request->id);
    # Por un lado tenemos el array que nos viene por post del formulario. $request
    # Por otro lado tenemos el contenido de la base de datos en otro array $post
    # lo que hacemos es meter el contenido del array $request en el contenido del $post para que se modifique
    $post->titulo = $request->titulo;
    $post->contenido = $request->contenido;
    $post->save(); # esto me guarda los cambios en la base de datos
    return redirect('/');
  }

}
