<?php

use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@home');
Route::get('/pet', 'PetController@index'); 
Route::post('/pet-store', 'PetController@store');
Route::post('/comment-store', 'PetController@commentStore'); 

Route::get('/pet-create', 'PetController@create');


Route::get('/pet/{id}', 'PetController@show')->where('id', '[0-9]+');
Route::delete('/pet/{id}', 'PetController@destroy')->where('id', '[0-9]+');
Route::get('/pet-edit/{id}', 'PetController@edit')->where('id', '[0-9]+');
Route::put('/pet-update/{id}', 'PetController@update')->where('id', '[0-9]+');



Route::get('/quem_somos', 'PetController@quemSomos');
Route::get('/sucesso', 'PetController@sucesso');


Route::resource('/user', 'UserController');


Route::auth();
