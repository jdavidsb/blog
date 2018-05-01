<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $tabla){
          $tabla->increments('id');
          $tabla->string('titulo');
          $tabla->text('contenido');
          $tabla->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     * drop intenta eliminar una Si no existe lanzaría un error
     * droIfExists elimina la tabla si existe, si no existe no lanzaría error
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
