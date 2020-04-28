<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Geoloc;
use App\Comment;
use App\User;
use App\Pet_pic;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class PetController extends Controller
{
    public function index() {
        $pets = Pet::orderBy('pets.id', 'desc')
        ->join('pet_pics', 'pet_pics.pet_id', 'pets.id')
        ->get();
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
            >join('pet_pics', 'pet_pics.pet_id', 'pets.id')
            ->orderBy('pets.id', 'desc')
            ->get();    
        } else {
            $pets_achados = Pet::where('alert_type','achado')
            ->join('pet_pics', 'pet_pics.pet_id', 'pets.id')
            ->orderBy('pets.id', 'desc')->get(); 
        }
        
        return view('achados.index', [
            'pets_achados' => $pets_achados,
        ]);
    }

    public function achadosPerfil($id){
        $pet = Pet::findOrFail($id);
        $pet_pic = Pet_pic::findOrFail($id);
        $users = User::all();
        $comments = Comment::all();

        return view('achados.show', [
            'pet' => $pet,
            'pet_pic' => $pet_pic,
            'comments' => $comments,
            'users'=> $users,
        ]);
    }

    public function achadosCreate(){
        return view('achados.create');
    }


    public function achadosStore(Request $request){

        // Salva dados na tabela PET
        $pet = new Pet();

        $pet->alert_type = request('alert_type');
        $pet->species = request('species');
        $pet->sex = request('sex');
        $pet->coat = request('coat');
        $pet->primary_color = request('primary_color');
        $pet->secondary_color = request('secondary_color');
        $pet->size = request('size');
        $pet->breed = request('breed');
        $pet->name = request('name');
        $pet->event_date = request('event_date');
        $pet->description = request('description');
        $pet->state = request('state');
        $pet->city = request('city');
        $pet->nbhood = request('nbhood');
        $pet->user_id = request('user_id');

        $pet->save();

        // Upload de foto - salva na tabela pet_pics
        $pet_pic = new Pet_pic();
        $pet_id = $pet->id;

        $pet_pic->position_pic = 1; // ALTERAR DEPOIS !!!!!!!!!!!!!!!!!!
        $pet_pic->pet_id = $pet_id; 


        if($request->hasFile('pet_pic')){
            $extension = $request->file('pet_pic')->getClientOriginalExtension();
            
            $fileNameToStore = $pet_id.'.'.$extension;
        
            $pet_pic->link_pic = 'storage/images/pet/'.$fileNameToStore;

            $path = $request->file('pet_pic')->storeAs('public/images/pet', $fileNameToStore);
        } 

        $pet_pic->save();


        return redirect('achados')->with('msg','Animal cadastrado com sucesso');
    }


    public function achadosEdit($id){
        $pet = Pet::find($id);
        $users = User::all();
        $pet_pic = Pet_pic::findOrFail($id);


        return view('achados.edit', [
            'pet' => $pet,
            'users' => $users,
            'pet_pic' => $pet_pic,

        ]); 
    }

    public function achadosUpdate(Request $request, $id){
        $pet = Pet::find($id);
        $users = User::all();
        $pet_pic = Pet_pic::findOrFail($id);

        $pet->alert_type = request('alert_type');
        $pet->species = request('species');
        $pet->sex = request('sex');
        $pet->coat = request('coat');
        $pet->primary_color = request('primary_color');
        $pet->secondary_color = request('secondary_color');
        $pet->size = request('size');
        $pet->breed = request('breed');
        $pet->name = request('name');
        $pet->age = request('age');       
        $pet->event_date = request('event_date');
        $pet->description = request('description');
        $pet->state = request('state');
        $pet->city = request('city');
        $pet->nbhood = request('nbhood');

        $pet->save();


        // Upload de foto - salva na tabela pet_pics
        $pet_id = $pet->id;
        $pet_pic = Pet_pic::find($pet_id);

        $pet_pic->position_pic = 1; // ALTERAR DEPOIS !!!!!!!!!!!!!!!!!!
        $pet_pic->pet_id = $pet_id; 


        if($request->hasFile('pet_pic')){
            $extension = $request->file('pet_pic')->getClientOriginalExtension();
            
            $fileNameToStore = $pet_id.'.'.$extension;
        
            $pet_pic->link_pic = 'storage/images/pet/'.$fileNameToStore;

            $path = $request->file('pet_pic')->storeAs('public/images/pet', $fileNameToStore);
        } 

        $pet_pic->save();


        return view('achados.show', [
            'pet' => $pet,
            'users' => $users,
            'pet_pic' => $pet_pic,


        ])->with('msg','Cadastro atualizado com sucesso');

        
    }


    public function achadosDestroy($id){
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('achados')->with('msg','Registro deletado com sucesso');

        }

    ///tentando criar a logica de salvar comentario//

    public function commentStore(Request $request, $id){
        

        $newComment = new Comment();

        $newComment->fill($request->all());
        $newComment->pet_id = $id;
        $newComment->user_id = auth()->user()->id;

        $newComment->save();

        return redirect()->route('perfil', 
            [$newComment->pet_id]
    );

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
