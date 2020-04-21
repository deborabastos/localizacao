<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function index() {
        $pets = Pet::orderBy('id', 'desc')->get();    

        $i = Pet::count();
        
        return view('index', [
            'pets' => $pets,
            'i' => $i,
        ]);
    }

    public function achados() {
        $especie = request('especie');

        if($especie != ''){
            $pets_achados = Pet::where('species',$especie)
            ->where('alert_type','achado')
            ->orderBy('id', 'desc')
            ->get();    
        } else {
            $pets_achados = Pet::where('alert_type','achado')
            ->orderBy('id', 'desc')->get();    
        }
        
        return view('achados.index', [
            'pets_achados' => $pets_achados,
        ]);
    }

    public function achadosPerfil($id){
        $pet = Pet::findOrFail($id);

        return view('achados.show', [
            'pet' => $pet,
        ]);
    }

    public function achadosCreate(){
        return view('achados.create');
    }

    public function perdidos() {
        $especie = request('especie');

        if($especie != ''){
            $pets_perdidos = Pet::where('species',$especie)
            ->where('alert_type','perdido')
            ->orderBy('id', 'desc')
            ->get();    
        } else {
            $pets_perdidos = Pet::where('alert_type','perdido')
            ->orderBy('id', 'desc')->get();    
        }
        
        return view('perdidos.index', [
            'pets_perdidos' => $pets_perdidos,
        ]);
    }

    public function perdidosPerfil($id){
        $pet = Pet::findOrFail($id);

        return view('perdidos.show', [
            'pet' => $pet,
        ]);
    }

    public function perdidosCreate(){
        return view('perdidos.create');
    }

    public function adote() {
    $especie = request('especie');

        if($especie != ''){
            $pets_adocao = Pet::where('species',$especie)
            ->where('avaliable_adoption',1)
            ->orderBy('id', 'desc')
            ->get();    
        } else {
            $pets_adocao = Pet::where('avaliable_adoption',1)
            ->orderBy('id', 'desc')
            ->get();    
        }
        
        return view('adote.index', [
            'pets_adocao' => $pets_adocao,
        ]);



        return view('adote.index');
    }

    public function adotePerfil($id){
        $pet = Pet::findOrFail($id);

        return view('adote.show', [
            'pet' => $pet,
        ]);
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
