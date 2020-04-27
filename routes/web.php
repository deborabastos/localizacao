<?php

use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@index');
Route::get('/achados', 'PetController@achados'); 
Route::post('/achados/store', 'PetController@achadosStore'); 
Route::get('/achados/create', 'PetController@achadosCreate');
Route::put('/achados/update', 'PetController@achadosUpdate');


Route::get('/achados/{id}', 'PetController@achadosPerfil')->where('id', '[0-9]+');
Route::delete('/achados/{id}', 'PetController@achadosDestroy')->where('id', '[0-9]+');

Route::post('/achados/{id}', 'PetController@commentStore')->name('perfil');


Route::get('/achados-edit/{id}', 'PetController@achadosEdit');






Route::get('/perdidos', 'PetController@perdidos');
Route::get('/perdidos/create', 'PetController@perdidosCreate');
Route::get('/perdidos/{id}', 'PetController@perdidosPerfil'); 

Route::get('/adote', 'PetController@adote');
Route::get('/adote/create', 'PetController@adoteCreate');
Route::get('/adote/{id}', 'PetController@adotePerfil');

Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');


Route::resource('/user', 'UserController');
//Route::post('/user/create', 'UserController');
//Route::get('/user/create', 'UserController');
//Route::get('/pagina_usuario', 'UserController');
//Route::get('/user/create', 'UserController@userCreate');




Route::auth();

//Route::get('/home', 'HomeController@index')->name('home');
