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
    public function home() {
        $pets = Pet::orderBy('pets.id', 'desc')
        ->join('pet_pics', 'pet_pics.pet_id', 'pets.id')
        ->get();
        $i = Pet::count();

        return view('index', [
            'pets' => $pets,
            'i' => $i,
        ]);
    }

    public function index() {
        $especie = request('especie');
        $tipo = request('tipo');
        $adotar = request('adotar');

        if($adotar == "s"){
            if($especie != ''){
                $pets = Pet::where('species',$especie)
                ->where('avaliable_adoption','1')
                ->orderBy('pets.id', 'desc')
                ->get();
            } else {
                $pets = Pet::where('avaliable_adoption','1')
                ->orderBy('pets.id', 'desc')->get();    
            }
        } else {
            if($especie != ''){
                $pets = Pet::where('species',$especie)
                ->where('alert_type', $tipo)
                ->orderBy('pets.id', 'desc')
                ->get();    
            } else {
                $pets = Pet::where('alert_type', $tipo)
                ->orderBy('pets.id', 'desc')->get();    
            }
    
        }
            
            return view('pet.index', [
                'pets' => $pets,
                'especie' => $especie,
                'tipo' => $tipo,
                'adotar' => $adotar,
            ]);
    }

    
    public function show($id){
        $pet = Pet::findOrFail($id);
        $pet_pic = Pet_pic::findOrFail($id);
        $tipo = request('tipo');

        $users = User::all();
        $comments = Comment::all(); 

        // Capturar nome do usuário e passar para página show

        return view('pet.show', [
            'pet' => $pet,
            'pet_pic' => $pet_pic,
            'tipo' => $tipo,
            'comments' => $comments,
            'users'=> $users,
            ]);
        }

        // Verificar com Lu se estava funcionando
        // $comment = Comment::where('id' , $id)
        // ->orderBy('created_at', 'desc')
        // ->get(); 

        // $users = Comment::leftjoin('comments', 'comments.user_id', '=','users.id')
        // ->select('comments.*','users.name')
        // ->where('users.id', '=', 'name')->get();

        // return view('achados.show', [
        //     'pet' => $pet,
        //     'comment' => $comment,
        //     'user' => $users,

   

    public function create(){
        $tipo = request('tipo');
        
        return view('pet.create', [
            'tipo' => $tipo,
        ]);
    }

    public function store(Request $request){

        // $request->validate([
        //     'alert_type' => "required",
        //     'species' => "required",
        //     'sex' => "required",
        //     'coat' => "required",
        //     'primary_color' => "required",
        //     'size' => "required",
        //     'breed' => "required",
        //     'event_date' => "required",
        //     'state' => "required",
        //     'city' => "required",
        //     'nbhood' => "required",
        //     'user_id' => "required"
        //  ]);

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
        $pet->age = request('age');       
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


        return redirect("pet?tipo=$pet->alert_type&especie=$pet->species")->with('msg','Animal cadastrado com sucesso');
    
    }

    public function edit($id){
        $pet = Pet::find($id);
        $users = User::all();
        $pet_pic = Pet_pic::findOrFail($id);


        return view('pet.edit', [
            'pet' => $pet,
            'users' => $users,
            'pet_pic' => $pet_pic,

        ]); 
    }

    public function update(Request $request, $id){
        // $request->validate([
        //     'alert_type' => "required",
        //     'species' => "required",
        //     'sex' => "required",
        //     'coat' => "required",
        //     'primary_color' => "required",
        //     'size' => "required",
        //     'breed' => "required",
        //     'event_date' => "required",
        //     'state' => "required",
        //     'city' => "required",
        //     'nbhood' => "required",
        //  ]);
        
        
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


        return view('pet.show', [
            'pet' => $pet,
            'users' => $users,
            'pet_pic' => $pet_pic,
        ])->with('msg','Cadastro atualizado com sucesso');
    }


    public function destroy($id){
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect("pet?tipo=$pet->alert_type&especie=$pet->species")->with('msg','Registro deletado com sucesso');

        }


    //SALVANDO COMENTARIO NO BD//
    public function commentStore(Request $request){

        $newComment = new Comment();

        $newComment->comment = request('comment');
        $newComment->pet_id = request('id');;
        $newComment->user_id = 1;
        
        // auth()->user()->id;

        $newComment->save();

        return redirect()->route('show', 
            [$newComment->pet_id]
    );

    }


    // return view('pet.show', [
    //     'pet' => $pet,
    //     'pet_pic' => $pet_pic,
    //     'tipo' => $tipo,
    //     'comments' => $comments,
    //     'users'=> $users,
    //     ]);

    
    public function quemSomos(){
        return view('quem_somos');
    }

    public function sucesso(){
        return view('sucesso');
    }


}
