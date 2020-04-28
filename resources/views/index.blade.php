@extends('layouts.layout')

@section('title')
LocalizaCão
@endsection


@section('content')

<!-- banner -->
<div class="banner"></div>

    <div class="servicos" id="servicos">
        <h1 class="title">Serviços</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quia, porro repellendus dolore
            repudiandae, accusantium corporis harum vel iste suscipit maiores provident ullam itaque libero minus
            nesciunt consequatur iusto numquam asperiores quod fugiat veniam blanditiis.</p>
        <div class="diff_services">
            <div class="diff_services_item">
                <img src="images/mainpage copy.jpg" alt="service_image">
                <h3 class="sub_title">Achados</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="diff_services_item">
                <img src="images/mainpage2 copy.jpg" alt="service_image">
                <h3 class="sub_title">Perdidos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <!-- mapas-->

    <div class="diff_services_item1 m-2">
        <h1 class="title">Mapas</h1>
        <img class="m-2" src="images/mapa1.jpg" width=45%>
        <h3 class="sub_title">Mapas</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                                                @if($pet->position_pic == 1)
                                                    <img class="card-img-top" src="{{$pet->link_pic}}" alt="Imagem de capa do card">
                                                @endif
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
                                                <a href="{{ $pet->alert_type}}s/{{$pet->id}}" class="btn btn-primary mt-3">Visitar</a>
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