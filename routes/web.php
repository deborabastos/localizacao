<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@index');

Route::get('/achados', 'PetController@achados'); // alterar para pegar ?especie=gato ou ?especie=cao
Route::get('/achados/create', 'PetController@achadosCreate');
Route::get('/achados/{id}', 'PetController@achadosPerfil'); //alterar para achados/{id}

Route::get('/perdidos', 'PetController@perdidos');
Route::get('/perdidos/create', 'PetController@perdidosCreate');
Route::get('/perdidos/{id}', 'PetController@perdidosPerfil'); //alterar para perdidos/{id}

Route::get('/adote', 'PetController@adote');
Route::get('/adote/create', 'PetController@adoteCreate');
Route::get('/adote/{id}', 'PetController@adotePerfil'); //alterar para adote/{id}

Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');

Route::get('/pagina_usuario', 'UserController@user');
Route::get('/user/create', 'UserController@userCreate');
 
Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
