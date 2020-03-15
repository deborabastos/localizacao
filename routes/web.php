<?php

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

Route::get('/', 'PetController@index');
Route::get('/achados_caes', 'PetController@achadosCaes');
Route::get('/achados_gatos', 'PetController@achadosGatos');
Route::get('/achados_perfil', 'PetController@achadosPerfil'); //alterar para {id}
Route::get('/adote_caes', 'PetController@adoteCaes');
Route::get('/adote_gatos', 'PetController@adoteGatos');
Route::get('/adote_perfil/{id}', 'PetController@adotePerfil');
Route::get('/perdidos_caes', 'PetController@perdidosCaes');
Route::get('/perdidos_gatos', 'PetController@perdidosGatos');
Route::get('/perdidos_perfil/{id}', 'PetController@perdidosPerfil');
Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');
Route::get('/pagina_usuario', 'UserController@paginaUsuario');
 