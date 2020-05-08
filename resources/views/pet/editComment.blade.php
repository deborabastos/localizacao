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
        <div class="col-md-12">
            <div class="ed-comentarios border rounded py-2 px-3">
                    
                <div class="avatar-comment">
                    <img src="/storage/images/user/{{ Auth::user()->pic_profile }}" alt="">
                </div>
                
                <div class="show-comment-btns">
                            
                    <div class="w-100">
                        <p class="comment-nome">{{ $comment->user->name }} <small>{{ $comment->created_at->diffForHumans() }}</small></p>
                        <div class="w-100">

                        <form action="../editComment/{{$comment->id}}" method="POST" class="d-flex w-100">
                            @csrf
                            @method('PUT')        

                                <input class="form-control" id="comment" name="comment" value="{{$comment->comment}}" required>               
                                <button class="btn btn-primary btn-sm comment-btn" type="submit">Editar </button>
                        </form>
                    </div>

                    </div>    
                </div>                              
            </div>             
        </div>
    </section>
</main>




@endsection