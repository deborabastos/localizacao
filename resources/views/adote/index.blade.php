@extends('layouts.layout')

@section('title')
LocalizaCão - Adote
@endsection

@section('content')

<main class="main">

    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

        <section class="container">
        <section class="main-section">

          <!-- Ícones Cachorro e Gato -->
          <section class="icones">
            <div class="row">
                <div class="imagedog">
                    <a class="icone_cao" href="adote?especie=cao">
                        <img src="images/cao1.png" alt="icone de um cachorro">
                </div>
                <div class="imagecat">
                    <a class="icone_gato" href="adote?especie=gato">
                        <img src="images/gato2.png" alt="icone de um gato">
                    </a>
                </div>
            </div>
          </section>

          <!-- Cards -->
            <div class="row">
              @foreach ($pets_adocao as $pet_adote)
                
              <div class="mx-auto">
                  <div class="col-md-6 col-12">
                      <div class="card text-center" style="width: 18rem;">
                          <div class="box">
                            <img class="card-img-top" src="images/pet/{{$pet_adote->id}}.jpg" alt="Imagem de capa do card">
                                <div class="corner corner_adote">  
                                    <span href="#">Adote</span>
                                </div>                                            
                          
                        </div>
                          
                          
                          <div class="card-body">
                              <h5 class="card-title">
                                  @if( $pet_adote['name'] == "")
                                      {{ ucfirst($pet_adote->breed) }}
                                  @else
                                      {{ ucfirst($pet_adote->name) }}
                                  @endif
                              
                              </h5>
                              <div class="text-limit">
                                  <p class="card-text"> {{ ucfirst($pet_adote->description) }}</p>
                              </div>
                              <a href="adote/{{$pet_adote->id}}" class="btn btn-primary mt-3">Visitar</a>
                          </div>
                      </div>
                  </div>
              </div>

          @endforeach
           
                    
            </div>
            
            
            
            </section>


    </section>

</main>

@endsection