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

Route::get('/', function () {
    return view('index');
});


Route::get('/achados_caes', function () {
    return view('achados_caes');
});

Route::get('/achados_gatos', function () {
    return view('achados_gatos');
});

Route::get('/achados_perfil', function () {
    return view('achados_perfil');
});

Route::get('/adote_caes', function () {
    return view('adote_caes');
});

Route::get('/adote_gatos', function () {
    return view('adote_gatos');
});

Route::get('/adote_perfil', function () {
    return view('adote_perfil');
});

Route::get('/perdidos_caes', function () {
    return view('perdidos_caes');
});

Route::get('/perdidos_gatos', function () {
    return view('perdidos_gatos');
});

Route::get('/perdidos_perfil', function () {
    return view('perdidos_perfil');
});

Route::get('/quem_somos', function () {
    return view('quem_somos');
});

Route::get('/sucesso', function () {
    return view('sucesso');
});

Route::get('/pagina_usuario', function () {
    return view('user_page');
});
