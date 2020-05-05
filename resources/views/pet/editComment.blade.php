@extends('layouts.layout')

@section('title')
LocalizaCão - Perfil
@endsection


@section('content')

<main>
    {{-- Mensagem de erro ou sucesso --}}
    @include('inc.msg')

    <a href="javascript:history.back()"> <<-- Voltar </a> 


     <section class="container mt-5">
        <div class="row m-0">

        {{-- Comentários --}}
        <div class="comentarios">

            <div class="col-md-12">
                {{-- <div class="border rounded"> --}}
                    <div class="form-comment">
                        <div class="avatar-comment">

                            {{-- AVATAR DO USER --}}
                            {{-- AVATAR DO USER --}}
                            {{-- AVATAR DO USER --}}
                            <img src="/images/user/2.jpeg" alt="">
                        </div>

                        <form action="../editComment/{{$comment->id}}" method="POST">
                            @csrf
                                @method('PUT')
                        <div class="form-group">
                            {{-- <label for="exampleFormControlTextarea1"> {{$comment->user->name}} </label> --}}
                            <textarea class="form-control mb-5" id="comment" name="comment" rows="3" >
                                {{$comment->comment}}
                            </textarea>
                          </div>
                               

                            <button class="btn btn-primary btn-sm ml-5 mr-3"" type="submit">Editar </button>
                        </form>
                            <form action="../editComment/{{$comment->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                    </div>
                </div>
            </div>
        </form> 
    </div>



        </div>
    </section>
</main>

@endsection