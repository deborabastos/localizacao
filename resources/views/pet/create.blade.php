@extends('layouts.layout')

@section('title')
LocalizaCão - {{ ucfirst($tipo) }}
@endsection


@section('content')


<main>
    <a href="javascript:history.back()"> <<-- Voltar </a>
    
<div class="container">
    <div class="form-cadastro mb-5">
        <form action="../pet-store" class="form-horizontal" method="POST" enctype="multipart/form-data">
        
        @csrf
        <div class="form-header">
            <div class="logo-pegada">
                <img src="/images/logo_pegada.png" alt="">
            </div>
            <h3 class="titulo-cadastro">Cadastro Pet {{ ucfirst($tipo) }} </h3>
        </div>

        <div class="form-body">
            <h4 class="titulo-form">Dados do animal</h4>

            {{-- PASSA ALERT_TYPE --}}
            <input type="hidden" name="alert_type" value="{{ $tipo }}" >



            <div class="form-group">
                <p class="col-sm-2 p-form">Espécie<sup class="ast-required">*</sup></p>
                <div class="col-sm-6">
                    <div class="custom-control custom-radio" >
                        <input class="custom-control-input" type="radio" name="species" id="gato" value="gato" {{ old('species') == "gato" ? 'checked' : '' }}>
                        <label class="custom-control-label mr-2" for="gato">Gato</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="species" id="cao" value="cao" {{ old('species') == "cao" ? 'checked' : '' }}>
                        <label class="custom-control-label mr-2" for="cao">Cachorro</label>                   
                    </div>


                    @error('species')
                        <p class="validacao-invalido"><small> O campo <u>espécie</u> é obrigatório </small></p>
                    @enderror


                </div>
            </div>


            <div class="form-group">
                <p class="col-sm-2 p-form">Sexo<sup class="ast-required">*</sup></p>
                <div class="col-sm-6">
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="sex" id="femea" value="f" {{ old('sex') == "f" ? 'checked' : '' }}>
                        <label class="custom-control-label mr-2" for="femea">Fêmea</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="sex" id="macho" value="m" {{ old('sex') == " " ? 'checked' : '' }}>
                        <label class="custom-control-label mr-2" for="macho">Macho</label>
                    </div>

                    @error('sex')
                        <p class="validacao-invalido"><small> O campo <u>sexo</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>


            <div class="form-group">
                <label for="coat" class="col-sm-8 control-label" >Tipo de Pelo<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="coat" id="coat">
                        <option disabled selected value="">Escolha</option>
                        <option value=1 {{ old('coat') == 1 ? 'selected' : '' }}>Curto</option>
                        <option value=2 {{ old('coat') == 2 ? 'selected' : '' }}>Médio</option>
                        <option value=3 {{ old('coat') == 3 ? 'selected' : '' }}>Longo</option>
                    </select>
                
                    @error('coat')
                        <p class="validacao-invalido"><small> O campo <u>tipo de pelo</u> é obrigatório </small></p>
                    @enderror
                
                </div>
            </div>

            <div class="form-group">
                <label for="primary_color" class="col-sm-8 control-label">Cor Primária<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="primary_color" id="primary_color">
                        <option disabled selected value="0" {{ old('primary_color') == 0 ? 'selected' : '' }}>Escolha</option>
                        <option value="preto" {{ old('primary_color') == "preto" ? 'selected' : '' }}>Preto</option>
                        <option value="marrom" {{ old('primary_color') == "marrom" ? 'selected' : '' }}>Marrom</option>
                        <option value="bege" {{ old('primary_color') == "bege" ? 'selected' : '' }}>Bege</option>
                        <option value="branco" {{ old('primary_color') == "branco" ? 'selected' : '' }}>Branco</option>
                        <option value="cinza" {{ old('primary_color') == "cinza" ? 'selected' : '' }}>Cinza</option>
                        <option value="caramelo" {{ old('primary_color') == "caramelo" ? 'selected' : '' }}>Caramelo</option>
                    </select>

                    @error('primary_color')
                        <p class="validacao-invalido"><small> O campo <u>cor primária</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label for="secondary_color" class="col-sm-8 control-label">Cor Secundária (opcional)</label>
                <div class="col-sm-6">
                    <select class="form-control" name="secondary_color" id="secondary_color">
                        <option disabled selected value="">Escolha</option>
                        <option disabled selected value="0" {{ old('secondary_color') == 0 ? 'selected' : '' }}>Escolha</option>
                        <option value="preto" {{ old('secondary_color') == "preto" ? 'selected' : '' }}>Preto</option>
                        <option value="marrom" {{ old('secondary_color') == "marrom" ? 'selected' : '' }}>Marrom</option>
                        <option value="bege" {{ old('secondary_color') == "bege" ? 'selected' : '' }}>Bege</option>
                        <option value="branco" {{ old('secondary_color') == "branco" ? 'selected' : '' }}>Branco</option>
                        <option value="cinza" {{ old('secondary_color') == "cinza" ? 'selected' : '' }}>Cinza</option>
                        <option value="caramelo" {{ old('secondary_color') == "caramelo" ? 'selected' : '' }}>Caramelo</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="size" class="col-sm-8 control-label">Tamanho<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="size" id="size">
                        <option selected value="0" {{ old('size') == 0 ? 'selected' : '' }}>Escolha</option>
                        <option value=1 {{ old('size') == 1 ? 'selected' : '' }}>Pequeno</option>
                        <option value=2 {{ old('size') == 2 ? 'selected' : '' }}>Médio</option>
                        <option value=3 {{ old('size') == 3 ? 'selected' : '' }}>Grande</option>
                    </select>

                    @error('size')
                        <p class="validacao-invalido"><small> O campo <u>tamanho</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>



            <div class="form-group">
                <label for="breed" class="col-sm-8 control-label">Raça (opcional)</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="breed" name="breed" placeholder="Digite a raça" value="{{ old('breed')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="age" class="col-sm-8 control-label">Idade (opcional)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Digite a idade aproximada" value="{{ old('age')}}">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-8 control-label">Nome (opcional)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="{{ old('name')}}">
                </div>
            </div>

            <hr>
            <h4 class="titulo-form">Onde foi encontrado?</h4>

            <div class="form-group">
                <label for="state" class="col-sm-2 control-label">UF<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="state" id="state">
                        <option disabled selected value="">Escolha</option>
                        <option value="ac" {{ old('state') == "ac" ? 'selected' : '' }}>AC</option>
                        <option value="al" {{ old('state') == "al" ? 'selected' : '' }}>AL</option>
                        <option value="am" {{ old('state') == "am" ? 'selected' : '' }}>AM</option>
                        <option value="ap" {{ old('state') == "ap" ? 'selected' : '' }}>AP</option>
                        <option value="ba" {{ old('state') == "ba" ? 'selected' : '' }}>BA</option>
                        <option value="ce" {{ old('state') == "ce" ? 'selected' : '' }}>CE</option>
                        <option value="df" {{ old('state') == "df" ? 'selected' : '' }}>DF</option>
                        <option value="es" {{ old('state') == "es" ? 'selected' : '' }}>ES</option>
                        <option value="go" {{ old('state') == "go" ? 'selected' : '' }}>GO</option>
                        <option value="ma" {{ old('state') == "ma" ? 'selected' : '' }}>MA</option>
                        <option value="mg" {{ old('state') == "mg" ? 'selected' : '' }}>MG</option>
                        <option value="ms" {{ old('state') == "ms" ? 'selected' : '' }}>MS</option>
                        <option value="mt" {{ old('state') == "mt" ? 'selected' : '' }}>MT</option>
                        <option value="pa" {{ old('state') == "pa" ? 'selected' : '' }}>PA</option>
                        <option value="pe" {{ old('state') == "pe" ? 'selected' : '' }}>PE</option>
                        <option value="pi" {{ old('state') == "pi" ? 'selected' : '' }}>PI</option>
                        <option value="pr" {{ old('state') == "pr" ? 'selected' : '' }}>PR</option>
                        <option value="rj" {{ old('state') == "rj" ? 'selected' : '' }}>RJ</option>
                        <option value="rn" {{ old('state') == "rn" ? 'selected' : '' }}>RN</option>
                        <option value="ro" {{ old('state') == "ro" ? 'selected' : '' }}>RO</option>
                        <option value="rr" {{ old('state') == "rr" ? 'selected' : '' }}>RR</option>
                        <option value="rs" {{ old('state') == "rs" ? 'selected' : '' }}>RS</option>
                        <option value="sc" {{ old('state') == "sc" ? 'selected' : '' }}>SC</option>
                        <option value="se" {{ old('state') == "se" ? 'selected' : '' }}>SE</option>
                        <option value="sp" {{ old('state') == "sp" ? 'selected' : '' }}>SP</option>
                        <option value="to" {{ old('state') == "to" ? 'selected' : '' }}>TO</option>                    </select>

                    @error('state')
                       <p class="validacao-invalido"><small> O campo <u>estado</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label for="city" class="col-sm-2 control-label">Cidade<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Digite a cidade" value="{{ old('city')}}">
                    
                    @error('city')
                        <p class="validacao-invalido"><small> O campo <u>cidade</u> é obrigatório </small></p>
                    @enderror
                
                </div>
            </div>

            <div class="form-group">
                <label for="nbhood" class="col-sm-2 control-label">Bairro<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nbhood" id="nbhood" placeholder="Digite o Bairro" value="{{ old('nbhood')}}">

                    @error('nbhood')
                        <p class="validacao-invalido"><small> O campo <u>bairro</u> é obrigatório </small></p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="event_date" class="col-sm-2 control-label">Data<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="event_date" id="event_date" placeholder="Data que o pet foi encontrado" value="{{ old('event_date')}}">
                    
                    @error('event_date')
                        <p class="validacao-invalido"><small> O campo <u>data</u> é obrigatório </small></p>
                    @enderror
                </div>
            </div>        

            
            <hr>
            <h4 class="titulo-form">Informações adicionais</h4>


            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Observações </label>
                <textarea class="form-control ml-3 col-sm-10" name="description" id="description" rows="4" placeholder="Digite informações que possam ajudar na identificação do bixinho!">{{ old('description')}}</textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="avaliable_adoption" id="avaliable_adoption" value="1" {{ old('avaliable_adoption') == 1 ? 'checked' : '' }}>
                <label for="avaliable_adoption" class="control-label">Disponível para adoção?</label>
            </div>

            <div class="form-group custom-file mb-4 ">
                <label for="pet_pic" class="custom-file-label">Selecione a foto<sup class="ast-required">*</sup></label>
                <input type="file" name="pet_pic" id="pet_pic" class="custom-file-input" accept="image/*"><br> 
            
                @error('pet_pic')
                    <p class="validacao-invalido"><small> É necessário selecionar uma foto </small></p>
                @enderror
            </div>

            <input type="submit" class="btn-cadastro btn btn-primary" value="Cadastrar">
        </div>

        </form>
    </div>
</div>
</main>


@endsection

