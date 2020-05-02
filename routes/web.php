<?php

use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@index');
Route::get('/achados', 'PetController@achados'); 
Route::post('/achados/store', 'PetController@achadosStore'); 
Route::get('/achados/create', 'PetController@achadosCreate');

Route::get('/achados/{id}', 'PetController@achadosPerfil')->where('id', '[0-9]+');
Route::delete('/achados/{id}', 'PetController@achadosDestroy')->where('id', '[0-9]+');

// Route::post('/achados/{id}', 'PetController@commentStore')->name('perfil');

Route::get('/achados-edit/{id}', 'PetController@achadosEdit');
Route::put('/achados-update/{id}', 'PetController@achadosUpdate');


//Verificar
// Route::post('/achados', 'PetController@achadosStore'); 
// Route::get('/achados/{id}', 'PetController@achadosPerfil');
// Route::put('/achados/{id}/edit', 'PetController@achadosEdit');
// Route::put('/achados/{id}', 'PetController@achadosUpdate');
// Route::delete('/achados/{id}', 'PetController@achadosDestroy');

// Route::post('/achados/{id}', 'PetController@commentStore')->name('perfil');

Route::get('/perdidos', 'PetController@perdidos');
Route::get('/perdidos/create', 'PetController@perdidosCreate');
Route::get('/perdidos/{id}', 'PetController@perdidosPerfil'); 

Route::get('/adote', 'PetController@adote');
Route::get('/adote/create', 'PetController@adoteCreate');
Route::get('/adote/{id}', 'PetController@adotePerfil');

Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');


Route::resource('/user', 'UserController');
Route::get('/page', 'UserController@userPerfil');
//Route::get('/user/create', 'UserController');
//Route::get('/pagina_usuario', 'UserController');
//Route::get('/user/create', 'UserController@userCreate');




Route::auth();

//Route::get('/', 'HomeController@index')->name('home');
//Está dando pau quando ativo esta rota, caso alguém for utiliza-la. Dar um toque no grupo!

