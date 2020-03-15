@extends('layout.layout')

@section('title')
LocalizaCão - Adote Cães
@endsection

@section('content')

<main class="main">
    <aside class="aside">
        <div class="estados">
          <label for="estados">Estado</label>
          <select name="estados" id="estados" multiple>
            <option value="estado" selected disabled>Selecione o Estado</option> 
            <option value="ac">Acre</option> 
            <option value="al">Alagoas</option> 
            <option value="am">Amazonas</option> 
            <option value="ap">Amapá</option> 
            <option value="ba">Bahia</option> 
            <option value="ce">Ceará</option> 
            <option value="df">Distrito Federal</option> 
            <option value="es">Espírito Santo</option> 
            <option value="go">Goiás</option> 
            <option value="ma">Maranhão</option> 
            <option value="mt">Mato Grosso</option> 
            <option value="ms">Mato Grosso do Sul</option> 
            <option value="mg">Minas Gerais</option> 
            <option value="pa">Pará</option> 
            <option value="pb">Paraíba</option> 
            <option value="pr">Paraná</option> 
            <option value="pe">Pernambuco</option> 
            <option value="pi">Piauí</option> 
            <option value="rj">Rio de Janeiro</option> 
            <option value="rn">Rio Grande do Norte</option> 
            <option value="ro">Rondônia</option> 
            <option value="rs">Rio Grande do Sul</option> 
            <option value="rr">Roraima</option> 
            <option value="sc">Santa Catarina</option> 
            <option value="se">Sergipe</option> 
            <option value="sp">São Paulo</option> 
            <option value="to">Tocantins</option> 
          </select>
        </div>

        <div class="cidades">
          <label for="cidades">Cidade</label>
          <select name="cidades" id="cidades" multiple>
            <option value="">São Paulo</option>
            <option value="">Campinas</option>
          </select>
        </div>

        <div class="porte">
          <label>Porte</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Pequeno</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Médio</label>
            </div>
            <div>
              <input type="checkbox" name="marca3" id="marca3" />
              <label for="marca3">Grande</label>
            </div>
          </div>
        </div>
        
        <div class="sexo">
          <label>Sexo</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Fêmea</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Macho</label>
            </div>
          </div>
        </div>

        <div class="idade">
          <label>Idade</label>
          <div class="listaDeCheckboxes">
            <div>
              <input type="checkbox" name="marca1" id="marca1" />
              <label for="marca1">Filhote</label>
            </div>
            <div>
              <input type="checkbox" name="marca2" id="marca2" />
              <label for="marca2">Adulto</label>
            </div>
            <div>
              <input type="checkbox" name="marca3" id="marca3" />
              <label for="marca3">Idoso</label>
            </div>
          </div>
        </div>





    </aside>



 


    <!-- !!!!!!!!COMEÇO DOS CARDS!!!!! -->

        <section class="container">
        <section class="main-section">
            <div class="row">
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src="images/perdido3.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Da vinci</h5>
                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                            </div>
                    </div>        
                </div>    
                 
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido2.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Doido</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>  
                </div>              
                  
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >    
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido1.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Domingo</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>
                </div>   
                    
            </div>
            <div class="row">
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src="images/perdido4.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Dahora</h5>
                                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                <a href="#" class="btn btn-primary">Visitar</a>
                            </div>
                            </div>
                    </div>        
                </div>    
                 
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido5.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Gato</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>  
                </div>              
                  
                <div class="mx-auto">
                    <div class="col-sm-4 col-xs-12" >    
                        <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="images/perdido6.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Miauu</h5>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <a href="#" class="btn btn-primary">Visitar</a>
                                </div>
                                </div>
                    </div>
                </div>   
                    
            </div>
            
            
            
            </section>


    </section>

</main>

@endsection