@extends('layouts.layout')

@section('title')
LocalizaCão - Perdidos
@endsection

@section('content')

<main>
    <section class="icones">
        <div class="row">
            <div class="imagedog">
                <a class="icone_cao" href="perdidos?especie=cao">
                    <img src="images/cao1.png" alt="icone de um cachorro">
            </div>
            <div class="imagecat">
                <a class="icone_gato" href="perdidos?especie=gato">
                    <img src="images/gato2.png" alt="icone de um gato">
                </a>
            </div>
        </div>
    </section>

    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

    <section class="container">
        <div class="row">
            @foreach ($pets_perdidos as $pet_perdido)
                
                <div class="mx-auto">
                    <div class="col-md-6 col-12">
                        <div class="card text-center" style="width: 18rem;">                            
                            <div class="box">
                                <img class="card-img-top" src="images/pet/{{$pet_perdido->id}}.jpg" alt="Imagem de capa do card">
                                @if( $pet_perdido->alert_type == "achado")
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
                                    @if( $pet_perdido['name'] == "")
                                        {{ ucfirst($pet_perdido->breed) }}
                                    @else
                                        {{ ucfirst($pet_perdido->name) }}
                                    @endif
                                
                                </h5>
                                <div class="text-limit">
                                    <p class="card-text"> {{ ucfirst($pet_perdido->description) }}</p>
                                </div>
                                <a href="perdidos/{{$pet_perdido->id}}" class="btn btn-primary mt-3">Visitar</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

    </section>
</main>

@endsection