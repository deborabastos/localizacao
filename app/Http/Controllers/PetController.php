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

    
    public function showPet($id){
        $pet = Pet::findOrFail($id);
        $pet_pic = Pet_pic::findOrFail($id);
        $tipo = request('tipo');

        $users = User::all();

        // Capturar nome do usuário e passar para página show

        return view('pet.show', [
            'pet' => $pet,
            'pet_pic' => $pet_pic,
            'tipo' => $tipo,
            'users'=> $users,

            ]);
        }



    public function create(){
        $tipo = request('tipo');
        
        return view('pet.create', [
            'tipo' => $tipo,
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'alert_type' => "required",
            'species' => "required",
            'sex' => "required",
            'coat' => "required",
            'primary_color' => "required",
            'size' => "required",
            'event_date' => "required",
            'state' => "required",
            'city' => "required",
            'nbhood' => "required",
            'pet_pic' => "required"
         ]);

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
        $pet->avaliable_adoption = request('avaliable_adoption');
        $pet->user_id = auth()->user()->id;

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


        return redirect("pet?tipo=$pet->alert_type&especie=$pet->species")->with('success','Animal cadastrado com sucesso');
    
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
        $request->validate([
            'alert_type' => "required",
            'species' => "required",
            'sex' => "required",
            'coat' => "required",
            'primary_color' => "required",
            'size' => "required",
            'event_date' => "required",
            'state' => "required",
            'city' => "required",
            'nbhood' => "required",
         ]);
        
        
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
        $pet->avaliable_adoption = request('avaliable_adoption');

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


        return redirect("pet/$pet->id")->with([
            'success' => 'Registro atualizado com sucesso',
            'pet' => $pet,
            'pet_pic' => $pet_pic,
            ]);

    }


    public function destroy($id){
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect("pet?tipo=$pet->alert_type&especie=$pet->species")->with('success','Registro deletado com sucesso');

        }


    //SALVANDO COMENTARIO NO BD//
    public function commentStore(Request $request){

        $newComment = new Comment();

        $newComment->comment = request('comment');
        $newComment->pet_id = request('id');;
        $newComment->user_id = auth()->user()->id;

        $newComment->save();

        return redirect()->route('showPet', 
            [$newComment->pet_id]
    );

    }   

     //EDITANDO UM COMENTARIO// 

     public function editComment($id){
     
        $comment = Comment::find($id);
        $comment -> pet_id;
        $pet = Pet::find($id);
        $users = User::all();
        return view('pet.editComment', compact('comment','users','pet'));
        
        // $comment = Comment::find($id);
        // $pet = Pet::find($id);
        // $users = User::all();
        
        
        // return view('pet.editComment', [
        //     'pet' => $pet,
        //     'users' => $users,
        //     'comment' => $comment,
            
        //     ]); 
            //DUAS FORMAS DE FAZER //

    }

    public function updateComment(Request $request, $id){
        $request->validate([
            'comment' => 'required',
            // 'pet_id' => 'required',
            // 'user_id' => 'required',
         ]);

         $comment = Comment::find($id);
        //  $pet = Pet::find($comment -> pet_id);
         
        //  $users = User::all();
            // dd($request -> all(),$comment);
         $comment->comment = request('comment');
        //  $comment->pet_id = request('pet_id');
        //  $comment->user_id = request('user_id');

         $comment -> save();

         return redirect("pet/$comment->pet_id")->with([
            'success' => 'Comentário atualizado com sucesso! :)',
            // 'pet' => $pet,
            // 'users' => $users,
            ]);

    }

    public function deleteComment ($id){
        
        $comment = Comment::findOrFail($id);
        $pet = Pet::find($id);
        $comment -> delete();

        return redirect("pet/$comment->pet_id")->with([
            'success' => 'Comentário excluido com sucesso! :)'
        ]);
    }

    
    public function quemSomos(){
        return view('quem_somos');
    }

    public function sucesso(){
        return view('sucesso');
    }


}
