<?php
### RUTAS GET
Route::get('/', 'PostController@index');
Route::get('post/{id?}', 'PostController@verPost');
Route::get('editar/{id?}', 'PostController@getEditar');
Route::get('borrar/{id?}', 'PostController@getBorrar');
### RUTAS POST
# la ruta crear va a recoger los datos del formulario, se indica metodo post porque los datos me vienen por ese método
# el segundo parámetro le indicamos el nombre del controlador
Route::post('crear', 'PostController@crearPost');
Route::post('editar', 'PostController@postEditar');

### RUTAS ANY

# DEFINIMOS RUTAS WEB
# Hay que hacer referencia a la clase
/*
PUEDO TENER DOS RUTAS crear
la Post y la get
Route::get('crear', function(){

});

SE PUEDE USAR UN MÉTODO any
TIPO: con any conseguimos que responda a cualquier petición, ya sea get o post
Route::any('crear', function)(){

});

*/
