@extends('layouts.layout')

@section('title')
LocalizaCão - Perfil
@endsection


@section('content')

<main>
    <a href="javascript:history.back()"> <<-- Voltar </a> 
    
    <section class="container mt-5">
        <div class="row m-0">

            {{-- Linha 1, coluna 1 --}}
            
            <div class="col-md-6 col-12">
                <div class="box">
                    <img src="../{{ $pet_pic->link_pic }}" class="rounded img-thumbnail img-perfil" alt="foto do cachorro {{ $pet->alert_type}}">
                    @if($pet->alert_type == "achado")
                        <div class="corner corner_achado corner_show">
                            <span href="#">Achado</span>
                        </div>
                    @elseif($pet->alert_type == "perdido")
                        <div class="corner corner_perdido corner_show">
                            <span href="#">Perdido</span>
                        </div>
                    @endif
                </div>
            </div>
            {{-- Fim da linha 1, coluna 1 --}}

            
            {{-- Linha 1, coluna 2 --}}

            <div class="col-md-6 col-12">
                <div>
                    <h1 class="text-center text-primary font-weight-bold display-4 ml-3 mb-3">{{ ucfirst($pet->name) }}</h1>
                    <p class="text-center ml-3">
                        {{ ucfirst($pet->description) }}
                    </p>
                </div>

                <div class="text-center mt-5">
                    <button type="button" class="btn btn-primary btn-lg">Entrar em contato</button>
                </div>
            </div>
        </div>
        {{-- Fim da linha 1, coluna 2 --}}


        {{-- Linha 2, coluna 1 --}}
        <div class="row m-0">            
            <div class="col-md-6 col-12 mt-5">
                <h3>Dados do animal</h3>
                <hr>
                <div>
                    <table class="table table-borderless table-sm  ">
                        <tbody>
                            <tr>
                                @if( $pet->name != "")
                                <th scope="row" class="text-primary">Nome:</th>
                                <td>
                                    {{ ucfirst($pet->name)}}
                                </td>
                                @endif
                            </tr>
                            <tr>
                                @if( $pet->age != "")
                                <th scope="row" class="text-primary">Idade:</th>
                                <td>
                                    {{ ucfirst($pet->age)}}
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Sexo:</th>
                                <td colspan="2">
                                    @if( $pet->sex == "f")
                                        Fêmea
                                    @else
                                        Macho
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Tipo de pelo:</th>
                                <td colspan="2">
                                    @if($pet->coat == 1)
                                        Curto
                                    @elseif($pet->coat == 2)
                                        Médio
                                    @else
                                        Longo
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Cor:</th>
                                <td colspan="2">
                                    @if( $pet->primary_color == $pet->secondary_color)
                                        {{ ucfirst($pet->primary_color)}}
                                    @elseif($pet->secondary_color == '')
                                        {{ ucfirst($pet->primary_color)}}
                                    @else
                                        {{ ucfirst($pet->primary_color)}} e {{ucfirst($pet->secondary_color) }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Tamanho</th>
                                <td colspan="2">
                                    @if($pet->size == 1)
                                        Pequeno
                                    @elseif($pet->size == 2)
                                        Médio
                                    @else
                                        Grande
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Raça:</th>
                                <td colspan="2">
                                    @if($pet->breed == "")
                                        Não declarada
                                    @else
                                        {{ ucfirst($pet->breed) }}
                                    @endif
                                </td>
                            </tr>

                        </tbody>

                    </table>

                    <div class="btn-show mt-4">
                        <a href="/pet-edit/{{ $pet->id }}" class="btn btn-primary btn-sm mr-3">Editar</a>
                        <form class="ml-3" action="/pet/{{ $pet->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Fim da coluna 1 --}}



            {{-- Linha 2, coluna 2 --}}
            <div class="col-md-6 col-12 mt-5 mb-5">
                <h3>Onde foi encontrado?</h3>
                <hr>
                <div class="form-group">
                    <table class="table table-borderless table-sm">
                        <tbody>
                            <tr>
                                <th>UF</th>
                                <td>
                                    {{ Str::upper($pet->state) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Cidade</th>
                                <td>
                                    {{ ucfirst($pet->city) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Bairro</th>
                                <td>
                                    {{ ucfirst($pet->nbhood) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Data</th>
                                <td>
                                    {{ $pet->event_date }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="mapa-perfil">
                    <img src="/images/mapa1.jpg" class="rounded float-right img-thumbnail" alt="mapa">
                </div>
            </div>
        </div>
        {{-- Fim da coluna 2 --}}




        {{-- Comentários --}}

        <div class="comentarios">
            {{-- Form comentários --}}
            <form action="../comment-store" method="POST">
                @csrf
                
                <div class="col-md-12">
                    <div class="border rounded">
                        <div class="form-comment">
                            <div class="avatar-comment">

                                {{-- AVATAR DO USER --}}
                                {{-- AVATAR DO USER --}}
                                {{-- AVATAR DO USER --}}
                                <img src="/images/user/2.jpeg" alt="">
                            </div>
                            <div class="input-group">
                                <input type="hidden" name="id" value="{{ $pet->id }}" >

                                <input class="form-control comment-input" id="comment" name="comment" rows="1" placeholder="Deixe aqui seu comentário...">
                                <button class="btn btn-primary btn-sm comment-btn" type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form> 




            {{-- Mostra comentários --}}
            @foreach ($pet->comments as $comment)
            <div class="col-md-12 my-3">
                <div class="show-comment border rounded py-2 px-3">
                    
                    <div class="avatar-comment">
                        <img src="/{{ $comment->user->pic_profile}}" alt="">
                    </div>

                        <div class="comment">
                                <p class="comment-nome">{{ $comment->user->name }} <small>{{ date($comment->created_at) }}</small></p>
                                <p>{{ $comment->comment }}</p>
                        </div>

                </div>

            </div>
            @endforeach





        </div>
    </section>
</main>

@endsection