<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index() {
        return view('index');
    }

    public function achados() {
        return view('achados.index');
    }

    public function achadosPerfil(){
        return view('achados.show');
    }

    public function achadosCreate(){
        return view('achados.create');
    }

    public function perdidos() {
        return view('perdidos.index');
    }

    public function perdidosPerfil($id){
        return view('perdidos.show', ['id' => $id]);
    }

    public function perdidosCreate(){
        return view('perdidos.create');
    }

    public function adote() {
        return view('adote.index');
    }

    public function adotePerfil($id){
        return view('adote.show', ['id' => $id]);
    }

    public function adoteCreate(){
        return view('adote.create');
    }

    public function quemSomos(){
        return view('quem_somos');
    }

    public function sucesso(){
        return view('sucesso');
    }

}
