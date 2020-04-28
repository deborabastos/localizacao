@extends('layouts.layout')

@section('title')
LocalizaCão - Achado
@endsection


@section('content')

<main>
    <a href="javascript:history.back()"> <<-- Voltar </a>

<form action="../achados-update/{{ $pet->id }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        @csrf
            @method('PUT')

        <section class="container mt-5">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box">
                            <img src="../{{ $pet_pic->link_pic }}" class="rounded img-thumbnail" alt="foto do cachorro achado">
                            <div class="corner corner_achado corner_show">
                                <span href="#">Achado</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div>
                            <h1 class="text-center text-primary font-weight-bold display-4 ml-3 mb-3"> {{ ucfirst($pet->name) }}</h1>

                            <div class="form-group">
                                <p class="text-center ml-3">
                                    <textarea name="description" id="description" class="form-control" rows="8">{{ ucfirst($pet->description) }}</textarea>
                                </p>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-primary btn-lg">Entrar em contato</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12 mt-5">
                        <h3>Dados do Animal</h3>
                        <hr>
                        <div class="form-group">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-primary">Tipo de Alerta:</th>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="alert_type" id="achado" value="achado" {{ $pet->alert_type == "achado" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="achado">Achado</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="alert_type" id="perdido" value="perdido" {{ $pet->alert_type == "perdido" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="perdido">Perdido</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-primary">Espécie:</th>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="species" id="gato" value="gato" {{ $pet->species == "gato" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="gato">Gato</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="species" id="cao" value="cao" {{ $pet->species == "cao" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="cao">Cachorro</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <th scope="row" class="text-primary">Nome:</th>
                                        <td>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ ucfirst($pet->name)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-primary">Idade:</th>
                                        <td>
                                            <input type="text" class="form-control" name="age" id="age" value="{{ ucfirst($pet->age)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-primary">Sexo:</th>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="sex" id="femea" value="f" {{ $pet->sex == "f" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="femea">Fêmea</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio" name="sex" id="macho" value="m" {{ $pet->sex == "m" ? 'checked' : '' }}>
                                                        <label class="custom-control-label mr-2" for="macho">Macho</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-primary">Tipo de pelo:</th>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <div class="">
                                                    <select class="form-control" name="coat" id="coat">
                                                        <option disabled selected value="0">Escolha</option>
                                                        <option value=1 {{ $pet->coat == 1 ? 'selected' : '' }}>Curto</option>
                                                        <option value=2 {{ $pet->coat == 2 ? 'selected' : '' }}>Médio</option>
                                                        <option value=3 {{ $pet->coat == 3 ? 'selected' : '' }}>Longo</option>
                                                    </select>
                                                </div>
                                            </div>
                                    
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-primary">Cor:</th>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <label for="primary_color" class="control-label">Cor Primária</label>
                                                <div class="">
                                                    <select class="form-control" name="primary_color" id="primary_color">
                                                        <option disabled selected value="0" {{ $pet->primary_color == 0 ? 'selected' : '' }}>Escolha</option>
                                                        <option value="preto" {{ $pet->primary_color == "preto" ? 'selected' : '' }}>Preto</option>
                                                        <option value="marrom" {{ $pet->primary_color == "marrom" ? 'selected' : '' }}>Marrom</option>
                                                        <option value="bege" {{ $pet->primary_color == "bege" ? 'selected' : '' }}>Bege</option>
                                                        <option value="branco" {{ $pet->primary_color == "branco" ? 'selected' : '' }}>Branco</option>
                                                        <option value="cinza" {{ $pet->primary_color == "cinza" ? 'selected' : '' }}>Cinza</option>
                                                        <option value="caramelo" {{ $pet->primary_color == "caramelo" ? 'selected' : '' }}>Caramelo</option>
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="secondary_color" class="control-label">Cor Secundária (opcional)</label>
                                                <div class="">
                                                    <select class="form-control" name="secondary_color" id="secondary_color">
                                                        <option disabled selected value="0" {{ $pet->primary_color == 0 ? 'selected' : '' }}>Escolha</option>
                                                        <option value="preto" {{ $pet->secondary_color == "preto" ? 'selected' : '' }}>Preto</option>
                                                        <option value="marrom" {{ $pet->secondary_color == "marrom" ? 'selected' : '' }}>Marrom</option>
                                                        <option value="bege" {{ $pet->secondary_color == "bege" ? 'selected' : '' }}>Bege</option>
                                                        <option value="branco" {{ $pet->secondary_color == "branco" ? 'selected' : '' }}>Branco</option>
                                                        <option value="cinza" {{ $pet->secondary_color == "cinza" ? 'selected' : '' }}>Cinza</option>
                                                        <option value="caramelo" {{ $pet->secondary_color == "caramelo" ? 'selected' : '' }}>Caramelo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th>Tamanho</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="">
                                                    <select class="form-control" name="size" id="size">
                                                        <option selected value="0" {{ $pet->size == 0 ? 'selected' : '' }}>Escolha</option>
                                                        <option value=1 {{ $pet->size == 1 ? 'selected' : '' }}>Pequeno</option>
                                                        <option value=2 {{ $pet->size == 2 ? 'selected' : '' }}>Médio</option>
                                                        <option value=3 {{ $pet->size == 3 ? 'selected' : '' }}>Grande</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-primary">Raça:</th>
                                        <td colspan="2">
                                            <input type="text" class="form-control" name="breed" id="breed" value="{{ ucfirst($pet->breed) }}">
                                
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Atualizar foto</th>
                                        <td>
                                            <div class="form-group custom-file altura_file mb-2">
                                                <label for="pet_pic" class="custom-file-label">Selecione a foto</label>
                                                <input type="file" name="pet_pic" id="pet_pic" class="custom-file-input" accept="image/*"><br> 
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                            <div class="form-group">
                                                <div class="">
                                                    <select class="form-control" name="state" id="state">
                                                            <option disabled selected value="0">Escolha</option>
                                                            <option value="ac" {{ $pet->state == "ac" ? 'selected' : '' }}>AC</option>
                                                            <option value="al" {{ $pet->state == "al" ? 'selected' : '' }}>AL</option>
                                                            <option value="am" {{ $pet->state == "am" ? 'selected' : '' }}>AM</option>
                                                            <option value="ap" {{ $pet->state == "ap" ? 'selected' : '' }}>AP</option>
                                                            <option value="ba" {{ $pet->state == "ba" ? 'selected' : '' }}>BA</option>
                                                            <option value="ce" {{ $pet->state == "ce" ? 'selected' : '' }}>CE</option>
                                                            <option value="df" {{ $pet->state == "df" ? 'selected' : '' }}>DF</option>
                                                            <option value="es" {{ $pet->state == "es" ? 'selected' : '' }}>ES</option>
                                                            <option value="go" {{ $pet->state == "go" ? 'selected' : '' }}>GO</option>
                                                            <option value="ma" {{ $pet->state == "ma" ? 'selected' : '' }}>MA</option>
                                                            <option value="mg" {{ $pet->state == "mg" ? 'selected' : '' }}>MG</option>
                                                            <option value="ms" {{ $pet->state == "ms" ? 'selected' : '' }}>MS</option>
                                                            <option value="mt" {{ $pet->state == "mt" ? 'selected' : '' }}>MT</option>
                                                            <option value="pa" {{ $pet->state == "pa" ? 'selected' : '' }}>PA</option>
                                                            <option value="pe" {{ $pet->state == "pe" ? 'selected' : '' }}>PE</option>
                                                            <option value="pi" {{ $pet->state == "pi" ? 'selected' : '' }}>PI</option>
                                                            <option value="pr" {{ $pet->state == "pr" ? 'selected' : '' }}>PR</option>
                                                            <option value="rj" {{ $pet->state == "rj" ? 'selected' : '' }}>RJ</option>
                                                            <option value="rn" {{ $pet->state == "rn" ? 'selected' : '' }}>RN</option>
                                                            <option value="ro" {{ $pet->state == "ro" ? 'selected' : '' }}>RO</option>
                                                            <option value="rr" {{ $pet->state == "rr" ? 'selected' : '' }}>RR</option>
                                                            <option value="rs" {{ $pet->state == "rs" ? 'selected' : '' }}>RS</option>
                                                            <option value="sc" {{ $pet->state == "sc" ? 'selected' : '' }}>SC</option>
                                                            <option value="se" {{ $pet->state == "se" ? 'selected' : '' }}>SE</option>
                                                            <option value="sp" {{ $pet->state == "sp" ? 'selected' : '' }}>SP</option>
                                                            <option value="to" {{ $pet->state == "to" ? 'selected' : '' }}>TO</option>
                                                        </select>
                                                </div>
                                            </div>                                       
                                        </td>                                     
                                    </tr>
                                    <tr>
                                        <th>Cidade</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="">
                                                    <input type="text" class="form-control" name="city" id="city" value="{{ ucfirst($pet->city)}}">
                                                </div>
                                            </div>                                       
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th>Bairro</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="">
                                                    <input type="text" class="form-control" name="nbhood" id="nbhood" value="{{ ucfirst($pet->nbhood)}}">
                                                </div>
                                            </div>                                            
                                       </td>                                    
                                    </tr>
                                    <tr>
                                        <th>Data</th>
                                        <td>
                                            <div class="form-group">
                                                <div class="">
                                                    <input type="date" class="form-control" name="event_date" id="event_date" value="{{ ucfirst($pet->event_date)}}">
                                                </div>
                                            </div>    
                                        
                                        </td>    
                                    
                                    </tr>    
                            
                                </tbody>                                

                            </table>                 

                        </div>


                        
                        <img src="/images/mapa1.jpg" class="rounded float-right img-thumbnail" alt="foto de um cachorro perdido">
                    </div>
                </div>

                <div class="row btn-show my-3">
                    <input type="submit" class="btn-cadastro btn btn-primary" value="Editar">
                </div>

        </section>
    </form>
</main>

@endsection
