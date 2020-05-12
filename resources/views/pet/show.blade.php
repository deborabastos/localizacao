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
                    <h1 class="text-center text-primary font-weight-bold display-4 ml-3 mb-3">
                    
                        @if ($pet->name != "")

                        {{ ucfirst($pet->name) }}

                        @else

                        {{ ucfirst($pet->breed) }}
                        
                        @endif
                    
                    </h1>
                    <p class="text-center ml-3">
                        {{ ucfirst($pet->description) }}
                    </p>
                </div>


                @if (Auth::check())
                    <div class="text-center mt-5">
                        <a href="https://wa.me/55{{$pet->user->phone}}" type="button" class="btn btn-primary btn-lg" target="_blank">Entrar em contato <img src="/images/social-media.svg" class="img-btn-contato" alt=""></a>
                    </div>
                @else
                    <div class="text-center mt-5">
                        <a href="/login" type="button" class="btn btn-primary btn-lg" target="_blank">Entrar em contato <img src="/images/whatsapp.svg" class="img-btn-contato" alt=""></a>
                    </div>
                @endif




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
                            <tr>
                                @if($pet->avaliable_adoption == 1)
                                    <th scope="row" class="text-primary">Disponível para adoção?</th>
                                    <td colspan="2">Sim</td>
                                @endif
                            </tr>

                        </tbody>

                    </table>


                    @if (Auth::check())

                        @if ($pet->user_id == Auth::user()->id) 

                            <div class="btn-show mt-4">
                                <a href="/pet-edit/{{ $pet->id }}" class="btn btn-primary btn-sm mr-3">Editar</a>
                                <form class="ml-3" action="/pet/{{ $pet->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </div>

                        @endif
                    @endif

                </div>
            </div>
            {{-- Fim da linha 2, coluna 1 --}}



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
                                        {{ $pet->event_date->format('d/m/Y') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div id="mapid">
                    
                </div>
            </div>
        </div>
        {{-- Fim da coluna 2 --}}




        {{-- Comentários --}}

       


        <div class="comentarios">
            {{-- Form comentários --}}



            @if (Auth::check())
                <form action="../comment-store" method="POST">
                    @csrf
                    
                    <div class="col-md-12">
                        <div class="border rounded">
                            <div class="form-comment">
                                <div class="avatar-comment">
                                    <img src="/storage/images/user/{{ Auth::user()->avatar }}" alt="">
                                </div>
                                <div class="input-group">
                                    <input type="hidden" name="id" value="{{ $pet->id }}" >

                                    <input class="form-control" id="comment" name="comment" placeholder="Deixe aqui seu comentário..." required>
                                    <button class="btn btn-primary btn-sm comment-btn" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 

            @endif

            



            {{-- Mostra comentários --}}

            @for($i = count($pet->comments)-1; $i >= 0; $i--)
                <div class="col-md-12 my-3">
                    <div class="show-comment border rounded py-2 px-3">
                        
                        <div class="avatar-comment">
                            <img src="/storage/images/user/{{ $pet->comments[$i]->user->avatar}}" alt="">
                        </div>
                        
                        <div class="show-comment-btns">
                            <div>
                                <p class="comment-nome">{{ $pet->comments[$i]->user->name }} <small>{{ $pet->comments[$i]->created_at->diffForHumans() }}</small></p>
                                <p>{{ $pet->comments[$i]->comment }}</p>
                            </div>

                            @if (Auth::check())

                                @if ($pet->comments[$i]->user_id == Auth::user()->id) 

                                    <div>
                                        <form action="/editComment/{{$pet->comments[$i]->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm ex-comment-btn">Excluir</button>
                                        </form>

                                        <a href="/editComment/{{$pet->comments[$i]->id}}" class="btn btn-primary btn-sm ed-comment-btn">Editar</a>

                                    </div>
                                @endif
                            @endif

                        </div>
                    </div>
                </div>

            @endfor


        </div>
    </section>
</main>

@endsection