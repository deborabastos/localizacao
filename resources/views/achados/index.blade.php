@extends('layouts.layout')

@section('title')
LocalizaCão - Achados
@endsection

@section('content')

<main>
<div class="msg">{{ session('msg') }}</div>
    <section class="icones">
        <div class="row">
            <div class="imagedog">
                <a class="icone_cao" href="achados?especie=cao">
                    <img src="images/cao1.png" alt="icone de um cachorro">
            </div>
            <div class="imagecat">
                <a class="icone_gato" href="achados?especie=gato">
                    <img src="images/gato2.png" alt="icone de um gato">
                </a>
            </div>
        </div>
    </section>

    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

    <section class="container">
        <div class="row">

            @foreach ($pets_achados as $pet_achado)
                
                <div class="mx-auto">
                    <div class="col-md-6 col-12">
                        <div class="card text-center" style="width: 18rem;">
                            
                            <div class="box">
                                <img class="card-img-top" src="images/pet/{{$pet_achado->id}}.jpg" alt="Imagem de capa do card">
                                
                                @if( $pet_achado->alert_type == "achado")
                                    <div class="corner corner_achado">  
                                        <span href="#">Achado</span>
                                    </div>                                            
                                @else
                                    <div class="corner corner_perdido">  
                                        <span href="#">Perdido</span>
                                    </div>                                            
                                @endif                                      
                              
                            </div>




                            <div class="card-body">
                                <h5 class="card-title">
                                    @if( $pet_achado['name'] == "")
                                        {{ ucfirst($pet_achado->breed) }}
                                    @else
                                        {{ ucfirst($pet_achado->name) }}
                                    @endif
                                
                                </h5>
                                <div class="text-limit">
                                    <p class="card-text"> {{ ucfirst($pet_achado->description) }}</p>
                                </div>
                                <a href="achados/{{$pet_achado->id}}" class="btn btn-primary mt-3">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


   
        </div>
    </section>
</main>

@endsection