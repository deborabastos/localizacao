<?php

use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@home');
Route::get('/pet', 'PetController@index'); 
Route::post('/pet-store', 'PetController@store');
Route::post('/comment-store', 'PetController@commentStore')->middleware('auth'); 

Route::get('/pet-create', 'PetController@create');


Route::get('/pet/{id}', 'PetController@showPet')->where('id', '[0-9]+')->name('showPet');
Route::delete('/pet/{id}', 'PetController@destroy')->where('id', '[0-9]+');
Route::put('/pet/{id}', 'PetController@update')->where('id', '[0-9]+');
Route::put('/editComment/{id}', 'PetController@updateComment')->where('id','[0-9]+');

Route::delete('/editComment/{id}', 'PetController@deleteComment')->where('id', '[0-9]+');



Route::get('/editComment/{id}', 'PetController@editComment')->where('id', '[0-9]+')->middleware('auth');

Route::get('/pet-edit/{id}', 'PetController@edit')->where('id', '[0-9]+');



Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');



Route::resource('/user', 'UserController');
Route::get('/page', 'UserController@userPerfil');
Route::get('/user/{id}', 'UserController@show')->where('id', '[0-9]+')->name('show');

Route::get('/user-edit/{id}', 'UserController@edit')->where('id', '[0-9]+');
Route::put('/user/{id}', 'UserController@update')->where('id', '[0-9]+');

Route::get('/index_user', 'Usercontroller@indexUser');
Route::get('/user-delete/{id}', 'UserController@destroy')->where('id', '[0-9]+');

//Route::get('/user/create', 'UserController');
//Route::get('/pagina_usuario', 'UserController');
//Route::get('/user/create', 'UserController@userCreate');



Route::auth(['verify' => true]);

//Route::get('/', 'HomeController@index')->name('home');