@extends('layouts.layout')

@section('title')
LocalizaCão - Achado 
@endsection


@section('content')

<main>
        <section class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    
                    <div class="box">

                        <img src="/images/pet/{{ $pet->id }}.jpg" class="rounded img-thumbnail" alt="foto de um cachorro perdido">
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
                <div class="col-md-6 col-12 mt-5">
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
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5 mb-5">
                    <img src="/images/mapa1.jpg" class="rounded float-right img-thumbnail" alt="foto de um cachorro perdido">
                </div>
            </div>

            <form action="/achados' method="POST">
                
            <div class="col-md-6">
                <h1 class="display-6 text-primary mt-5">Deixe seu comentário!</h1>
            <div class="comentarios">

                    <div class="form-group ">
                    <label for="exampleFormControlTextarea1">Tem alguma informação que possa nos ajudar?</label>
                    <form>
                        <div class="row mt-3 mb-4">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Sobrenome">
                            </div>
                        </div>
                        </form>
                    <textarea class="form-control mb-4" id="exampleFormControlTextarea1" name="comment" rows="7">
                     
                    </textarea>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                  </div>
            </form>

                  <div class="form-group">
                      <label class="mt-5" for="exampleFormControlTextarea1">
                          @foreach ($user as $use)
                          
                          {{ $use->name }}
                          
                          @endforeach
                        </label>
                        <textarea class="comment form-control mb-4" id="exampleFormControlTextarea1" rows="7">
                            @foreach ($comment as $commen)
                            
                            
                            {{ $commen->comment }}
                            
                            @endforeach 
                        </textarea>
                    </div>
                    
                </div>

            </div>
        </section>       




    </main>

@endsection