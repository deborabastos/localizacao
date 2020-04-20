@extends('layouts.layout')

@section('title')
LocalizaCão - Adote (nome do animal)
@endsection

@section('content')

<main>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-12">
                <img src="/images/pet/{{ $pet->id }}.jpg" class="rounded img-thumbnail" alt="foto de um cachorro perdido">
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
                                <td colspan="2">{{ ucfirst($pet->coat) }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Cor:</th>
                                <td colspan="2">
                                    @if( $pet->primary_color == $pet->secondary_color)
                                        {{ ucfirst($pet->primary_color)}}
                                    @elseif($pet->secondary_color == 'NULL')
                                        {{ ucfirst($pet->primary_color)}}
                                    @else
                                        {{ ucfirst($pet->primary_color)}} e {{ucfirst($pet->secondary_color) }}
                                    @endif
                                                                        
                                
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Raça:</th>
                                <td colspan="2">{{ ucfirst($pet->breed) }}</td>
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

</main>


@endsection