@extends('layouts.layout')

@section('title')
LocalizaCão - Perfil
@endsection


@section('content')

<main>
    {{-- Mensagem de erro ou sucesso --}}
    @include('inc.msg')

    <a href="javascript:history.back()"> <<-- Voltar </a> 


     <section class="container mt-4">
        <div class="row m-0">
            <div class="ed-comentarios">
                <div class="col-md-12 border rounded">
                    <div class="form-comment">
                        <div class="avatar-comment">
                            <img src="/storage/images/user/{{ Auth::user()->pic_profile }}" alt="">
                        </div>

                        <div>
                            
                            <div>
                                <p class="comment-nome">{{ $comment->user->name }} <small>{{ $comment->created_at->diffForHumans() }}</small></p>
                            </div>


                            <form action="../editComment/{{$comment->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group m-0">
                                    <input class="form-control" id="comment" name="comment" rows="2" value="{{$comment->comment}}">
                                </div> 
                                    
                                <button class="btn btn-primary btn-sm ml-5 mr-3" type="submit">Editar </button>
                            </form>
                        
                        </div>                              
                    </div>
                </div>             
            </div>
        </div>
    </section>
</main>




@endsection