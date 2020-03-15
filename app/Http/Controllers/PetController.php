<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index() {
        return view('index');
    }

    public function achadosCaes() {
        return view('achados_caes');
    }

    public function achadosGatos(){
        return view('achados_gatos');
    }

    public function achadosPerfil(){
        return view('achados_perfil');
    }

    public function adoteCaes() {
        return view('adote_caes');
    }

    public function adoteGatos(){
        return view('adote_gatos');
    }

    public function adotePerfil($id){
        return view('adote_perfil', ['id' => $id]);
    }

    public function perdidosCaes() {
        return view('perdidos_caes');
    }

    public function perdidosGatos(){
        return view('perdidos_gatos');
    }

    public function perdidosPerfil($id){
        return view('perdidos_perfil', ['id' => $id]);
    }

    public function quemSomos(){
        return view('quem_somos');
    }

    public function sucesso(){
        return view('sucesso');
    }


}
