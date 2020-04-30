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

            {{-- PASSA ALERT_TYPE "ACHADO" --}}
            <input type="hidden" name="alert_type" value="{{ $tipo }}" >

            {{-- PASSA USER ID GENÉRICO --}}
            {{-- PASSA USER ID GENÉRICO --}}
            {{-- PASSA USER ID GENÉRICO --}}
            {{-- PASSA USER ID GENÉRICO --}}
            {{-- PASSA USER ID GENÉRICO --}}
            <input type="hidden" name="user_id" value="2" >


            <div class="form-group">
                <p class="col-sm-2 p-form">Espécie<sup class="ast-required">*</sup></p>
                <div class="col-sm-6">
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="species" id="gato" value="gato">
                        <label class="custom-control-label mr-2" for="gato">Gato</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="species" id="cao" value="cao">
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
                        <input class="custom-control-input" type="radio" name="sex" id="femea" value="f">
                        <label class="custom-control-label mr-2" for="femea">Fêmea</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="sex" id="macho" value="m">
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
                        <option value="1">Curto</option>
                        <option value="2">Médio</option>
                        <option value="3">Longo</option>
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
                        <option disabled selected value="">Escolha</option>
                        <option value="preto">Preto</option>
                        <option value="marrom">Marrom</option>
                        <option value="bege">Bege</option>
                        <option value="branco">Branco</option>
                        <option value="cinza">Cinza</option>
                        <option value="caramelo">Caramelo</option>
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
                        <option value="preto">Preto</option>
                        <option value="marrom">Marrom</option>
                        <option value="bege">Bege</option>
                        <option value="branco">Branco</option>
                        <option value="cinza">Cinza</option>
                        <option value="caramelo">Caramelo</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="size" class="col-sm-8 control-label">Tamanho<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="size" id="size">
                        <option selected value="">Escolha</option>
                        <option value="1">Pequeno</option>
                        <option value="2">Médio</option>
                        <option value="3">Grande</option>
                    </select>

                    @error('size')
                        <p class="validacao-invalido"><small> O campo <u>tamanho</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>



            <div class="form-group">
                <label for="breed" class="col-sm-8 control-label">Raça (opcional)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="breed" name="breed" placeholder="Digite a raça">
                </div>
            </div>

            <div class="form-group">
                <label for="age" class="col-sm-8 control-label">Idade (opcional)</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Digite a idade aproximada">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-8 control-label">Nome (opcional)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
                </div>
            </div>

            <hr>
            <h4 class="titulo-form">Onde foi encontrado?</h4>

            <div class="form-group">
                <label for="state" class="col-sm-2 control-label">UF<sup class="ast-required">*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" name="state" id="state">
                        <option disabled selected value="">Escolha</option>
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="am">AM</option>
                        <option value="ap">AP</option>
                        <option value="ba">BA</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="mg">MG</option>
                        <option value="ms">MS</option>
                        <option value="mt">MT</option>
                        <option value="pa">PA</option>
                        <option value="pe">PE</option>
                        <option value="pi">PI</option>
                        <option value="pr">PR</option>
                        <option value="rj">RJ</option>
                        <option value="rn">RN</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR</option>
                        <option value="rs">RS</option>
                        <option value="sc">SC</option>
                        <option value="se">SE</option>
                        <option value="sp">SP</option>
                        <option value="to">TO</option>
                    </select>

                    @error('state')
                       <p class="validacao-invalido"><small> O campo <u>estado</u> é obrigatório </small></p>
                    @enderror

                </div>
            </div>

            <div class="form-group">
                <label for="city" class="col-sm-2 control-label">Cidade<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Digite a cidade">
                    
                    @error('city')
                        <p class="validacao-invalido"><small> O campo <u>cidade</u> é obrigatório </small></p>
                    @enderror
                
                </div>
            </div>

            <div class="form-group">
                <label for="nbhood" class="col-sm-2 control-label">Bairro<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nbhood" id="nbhood" placeholder="Digite o Bairro">

                    @error('nbhood')
                        <p class="validacao-invalido"><small> O campo <u>bairro</u> é obrigatório </small></p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="event_date" class="col-sm-2 control-label">Data<sup class="ast-required">*</sup></label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="event_date" id="event_date" placeholder="Data que o pet foi encontrado">
                    
                    @error('event_date')
                        <p class="validacao-invalido"><small> O campo <u>data</u> é obrigatório </small></p>
                    @enderror
                </div>
            </div>        

            
            <hr>
            <h4 class="titulo-form">Informações adicionais</h4>


            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Observações </label>
                <textarea class="form-control ml-3 col-sm-10" name="description" id="description" rows="4" placeholder="Digite informações que possam ajudar na identificação do bixinho!"></textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="avaliable_adoption" id="avaliable_adoption" value="1">
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

