@extends('layouts.layout')

@section('title')
LocalizaCão
@endsection


@section('content')

<!-- banner -->
<div class="banner"></div>

    <div class="servicos" id="servicos">
        <h1 class="title">Serviços</h1>
        <h5>Oferecemos serviços para facilitar o contato entre o tutor e seu pet perdido. Através da nossa comunidade de usuários críamos uma grande rede capaz de facilitar a localização de animais perdidos, encontrar seus tutores e dar um novo lar para os que estão abandonados.
        </h5>
        <div class="diff_services">
            <div class="diff_services_item">
                <img src="images/mainpage copy.jpg" alt="service_image">
                <h3 class="sub_title">Achados</h3>
                <h5>Nos empenhamos em tentar localizar o tutor dos pets achados ou se possível garantir um novo lar para os mesmos!  </h5>
            </div>
            <div class="diff_services_item">
                <img src="images/mainpage2 copy.jpg" alt="service_image">
                <h3 class="sub_title">Perdidos</h3>
                <h5>Através de nossa comunidade o seu pet pode ser encontrado com maior precisão, facilitando a sua localização!</h5>
            </div>
        </div>
    </div>

    <!-- mapas-->
    <div id="maps">
    <div class="diff_services_item1 m-2">
        <h1 class="title">Mapas</h1>
        <div id="mapid"></div>
        <h3 class="sub_title">Mapas</h3>
        <p>Utilizamos a geolocalização para agilizar as buscas!</p>
    </div>
    </div>

    <!-- mapas termina-->

    <!-- cards com últimos cadastros-->
    <main>
        <div class="adote" id="adote">
            <h1 class="title">Últimos cadastros</h1>
            <section class="container">
                <div class="row">             
       
                    @foreach ($pets as $i => $pet)
                        @if($i < 6)
                            <div class="mx-auto">
                                <div class="col-md-6 col-12">
                                    <div class="card text-center" style="width: 18rem;">
                                        <div class="box">      
                                                
                                            <img class="card-img-top" src=" {{ $pet->link_pic }}" alt="Imagem de capa do card">

                                            @if( $pet->alert_type == "achado")
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
                                                @if( $pet->name == "")
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
                        @endif
                    @endforeach

                </div>
            </section>
    </main>

@endsection