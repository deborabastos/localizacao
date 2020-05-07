<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PetController;
use App\Pet;
use App\Geoloc;
use App\Comment;
use App\User;
use App\Pet_pic;
use Illuminate\Http\Request;
use Image;





class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index_user', compact('users'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());


        return view('user.pagina_user');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $pet = Pet::fin($id);
        return view('user.show', compact('user'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $this->validate($request,[
            'name'=>'required',
            'cpf'=>'required',
            'email'=>'required',
            
        ]);
 
        $user = User::find($id);
 
        $user->name=$request->input('name');
        $user->cpf=$request->input('cpf');
        $user->email=$request->input('email');
 
        $user->save();
 
        return redirect('/user')->with('success');
        
     }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user ->delete();
        
        return redirect('/user')->with('success');
    }

   public function indexUser()
    {
        return view ('user.page');
    }   

    public function userPerfil()
    {
        
        return view ('user.page');
    }
}
