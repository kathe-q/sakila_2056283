<?php

use App\Categoria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta de categorias
Route::get('categorias', function () {
   $categorias = Categoria::all();
   //Invocar vista
   return view("categorias.index")->with("categorias", $categorias);
});
// Ruta de controladorDB
Route::get ("categorias" , "CategoriaController@index" );
// Ruta de mostrar formulario
Route::get("categorias/create" , "CategoriaController@create" ); 
// Ruta para guardar la nueva categoria  en BD
Route::post('categorias/store' , "CategoriaController@store");
//  ruta para mostrar el formulario para actualizar (cambiar nombre) categoria 
Route::get("categorias/edit/{idcategoria}" , "CategoriaController@edit" );
// Ruta para guardar cambios de categoria 
Route::post('categorias/update' , "CategoriaController@update");
