@extends('layouts.layout')

@section('title')
LocalizaCão - Achado
@endsection


@section('content')

<main>
    <a href="javascript:history.back()">
        <<-- Voltar</a> <section class="container mt-5">
            <div class="row">

                <div class="col-md-6 col-12">
                    <div class="box">
                    <img src="../{{ $pet_pic->link_pic }}" class="rounded img-thumbnail img-perfil" alt="foto do cachorro achado">
                        <div class="corner corner_achado corner_show">
                            <span href="#">Achado</span>
                        </div>

                    </div>
                </div>

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


            <div class="row">
                {{-- Linha 2, coluna 1 --}}

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
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
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
                                        SRD
                                        @else
                                        {{ ucfirst($pet->breed) }}
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                                
                            </tbody>

                        </table>

                        <div class="btn-show mt-4">
                            <a href="/achados-edit/{{ $pet->id }}" class="btn btn-primary btn-sm mr-3">Editar</a>

                            <form class="ml-3" action="/achados/{{ $pet->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>



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




            {{-- Comentários --}}
            <form method="POST">
                @csrf

                <div class="col-md-6 mt-6">
                    <div class="border rounded px-3">
                        <h1 class="display-6 text-primary mt-5">Deixe seu comentário!</h1>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tem alguma informação que possa nos ajudar?</label>
                            <form>
                                <div class="row mt-3 mb-4">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Nome">
                                    </div>
                                </div>
                            </form>
                            <textarea class="form-control mb-4" id="exampleFormControlTextarea1" name="comment" rows="7">

                    </textarea>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
            </form>
        </div>

        @foreach ($pet->comments as $comment)
        <div class="mt-5 mb-5">
            <div class="border rounded px-3">
                <div class="form-group">
                    <label class="mt-5" for="exampleFormControlTextarea1">
                        
                    </label>
                    
                    <div class="comment">
                        <h5 class="mb-4">
                            
                               <h3>
                                    {{$comment->user->name}}
                                </h3>
                                <h6>
                                    
                                    {{ $comment->comment }}
                                </h6>
                            
                        </h5>
                    </div>
                    
                </div>
            </div> --}}

            </div>
        </div>
        @endforeach 
                    
                </div>

            </div>
            </section>




</main>

@endsection