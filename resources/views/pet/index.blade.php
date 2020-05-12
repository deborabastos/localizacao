@extends('layouts.layout')

@section('title')
LocalizaCão - 

@if($adotar == "s")
    Adote
@else
{{ ucfirst($tipo) }}s

@endif





@endsection

@section('content')

<main>

    {{-- Mensagem de erro ou sucesso --}}
    @include('inc.msg')


    <section class="icones">
        <div class="row">
            <div class="imagedog">
            <a class="icone_cao" href="/pet?tipo={{$tipo}}&adotar={{$adotar}}&especie=cao">
                    <img src="images/icon_cao.png" alt="icone de um cachorro">
            </div>
            <div class="imagecat">
                <a class="icone_gato" href="/pet?tipo={{$tipo}}&adotar={{$adotar}}&especie=gato">
                    <img src="images/icon_gato.png" alt="icone de um gato">
                </a>
            </div>
        </div>
    </section>

    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

    <section class="container">
        <div class="row">
            
            @foreach ($pets as $pet)
                
                <div class="mx-auto">
                    <div class="col-md-6 col-12">
                        <div class="card text-center" style="width: 18rem;">
                            
                            <div class="box">
                                <img class="card-img-top" src="
                                    @foreach ($pet->pet_pic as $pic )
                                        {{$pic->link_pic}}
                                    @endforeach
                                " alt="Imagem de capa do card">
                                

                                @if($adotar == "s")
                                    <div class="corner corner_adote">  
                                        <span href="#">Adote</span>
                                    </div> 
                                @else
                                    @if($pet->alert_type == "achado")
                                        <div class="corner corner_achado">  
                                            <span href="#">Achado</span>
                                        </div>                                            
                                    @elseif($pet->alert_type == "perdido")
                                        <div class="corner corner_perdido">  
                                            <span href="#">Perdido</span>
                                        </div> 
                                    @endif
                                @endif
                              
                            </div>




                            <div class="card-body">
                                <h5 class="card-title">
                                    @if( $pet['name'] == "")
                                        {{ ucfirst($pet->breed) }}
                                    @else
                                        {{ ucfirst($pet->name) }}
                                    @endif
                                
                                </h5>
                                <div class="text-limit">
                                    <p class="card-text"> {{ ucfirst($pet->description) }}</p>
                                </div>
                                <a href="pet/{{$pet->id}}" class="btn btn-primary mt-3">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


   
        </div>
    </section>
</main>

@endsection