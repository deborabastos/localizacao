<!-- Topo -->
<div class="topo">
    <section class="top-menu">
        <ul class="social-menu-top">
            <li><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </section>
</div>

<!-- Navbar -->
<div class="minha_nav">
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">

        <!-- Logo -->
        <div class="logo">
            <a class="logo_link" href="index.php">
                <img src="images/logo_sn.jpg" alt="Localizacão">
                <p class="logo_p">LocalizaCão</p>
            </a>
        </div>

        <!-- Menu Hamburguer -->
        <button class="navbar-toggler ml" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Menu de navegação">
            <span class="navbar-toggler-icon ml"></span>
        </button>

        <!-- Menu Normal -->
        <div class="collapse navbar-collapse mt-2" id="navbarNavDropdown">
            <!-- Links da página -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Achados
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="achados_cao.php">Cães Achados</a>
                        <a class="dropdown-item" href="achados_gatos.php">Gatos Achados</a>
                        
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#achado">
                        Cadastro Pet Achado
                        </button>
                        </div>
                
                        <!-- Modal com Form para incersão de dados do PET -->
                        <div class="modal fade bd-achado-modal-sm" id="achado" tabindex=" " role="dialog" aria-labelledby="achadoLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="achadoLabel">Cadastro do Pet Achado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">

                            <h4>Dados do animal</h4>

                            <div class="form-group">
                                 <label class="col-sm-8 control-label">Espécie</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline mr-2">
                                   <input type="radio" name="especie" id="gato" value="GATO">
                                    Gato
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="especie" id="cachorro" value="CACHORRO">
                                    Cachorro
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                 <label class="col-sm-2 control-label">Sexo</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline">
                                   <input type="radio" name="sexo" id="femea" value="FEMEA">
                                    Fêmea
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="sexo" id="macho" value="MACHO">
                                    Macho
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Tipo de Pelo</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="pelo" id="pelo">
                                                        <option value="CURTO">Curto</option>
                                                        <option value="MEDIO">Médio</option>
                                                        <option value="LONGO">Longo</option>
                                                        <option value="OUTRO">Outro</option>                                                       
                                                    </select>
                                                </div>
                                            </div>    
                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Primária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_primaria" id="cor_primaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Secundária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_secundaria" id="cor_secundaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Manchado</option> 
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="raca" class="col-sm-8 control-label">Raça (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="raca" placeholder="Sem raça definida">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="idade" class="col-sm-8 control-label">Idade (Opcional)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="idade" placeholder="Digite a idade">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nome" class="col-sm-8 control-label">Nome (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                                                </div>
                                            </div>

                                            <h4>Localidade</h4>
                                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-2 control-label">UF</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="uf" id="uf">
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AM">AM</option>
                                                        <option value="AP">AP</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MG">MG</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MT">MT</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PE">PE</option>
                                                        <option value="PI">PI</option>
                                                        <option value="PR">PR</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="RS">RS</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SE">SE</option>
                                                        <option value="SP">SP</option>
                                                        <option value="TO">TO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="estado" class="col-sm-2 control-label">Estado</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="estado" placeholder="Digite o Estado">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="bairro" placeholder="Digite o Bairro">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="observacao" class="col-sm-2 control-label">Observações: </label>
                                            <textarea class="form-control ml-3 col-sm-10" id="observacao" rows="4" placeholder="Digite informações que possam ajudar na identificação de seu animal!"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <label for="foto_pet" class="col-sm-8 control-label">Enviar foto</label>
                                            <input type="file" class="form-control-file ml-3" id="foto_pet">
                                            </div>

                            </form>
                        </div>
                        
                        <button type="button" class="btn btn-primary">Salvar</button>

                        </div>
                        </div>
                        </div>
   
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Perdidos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="perdidos_cao.php">Cães Perdidos</a>
                        <a class="dropdown-item" href="perdidos_gatos.php">Gatos Perdidos</a>

                        <!-- Botão de cadastro do PET Perdido-->
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#perdido">
                        Cadastro Pet Perdido
                        </button>
                        </div>

                        <!-- Modal com Form para incersão de dados do PET -->
                        <div class="modal fade bd-perdido-modal-sm" id="perdido" tabindex=" " role="dialog" aria-labelledby="perdidoLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="perdidoLabel">Cadastro do Pet Perdido</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">

                            <h4>Dados do animal</h4>

                            <div class="form-group">
                                 <label class="col-sm-8 control-label">Espécie</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline mr-2">
                                   <input type="radio" name="especie" id="gato" value="GATO">
                                    Gato
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="especie" id="cachorro" value="CACHORRO">
                                    Cachorro
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                 <label class="col-sm-2 control-label">Sexo</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline">
                                   <input type="radio" name="sexo" id="femea" value="FEMEA">
                                    Fêmea
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="sexo" id="macho" value="MACHO">
                                    Macho
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Tipo de Pelo</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="pelo" id="pelo">
                                                        <option value="CURTO">Curto</option>
                                                        <option value="MEDIO">Médio</option>
                                                        <option value="LONGO">Longo</option>
                                                        <option value="OUTRO">Outro</option>                                                       
                                                    </select>
                                                </div>
                                            </div>    
                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Primária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_primaria" id="cor_primaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Manchado</option> 
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Secundária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_secundaria" id="cor_secundaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="raca" class="col-sm-8 control-label">Raça (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="raca" placeholder="Sem raça definida">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="idade" class="col-sm-8 control-label">Idade (Opcional)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="idade" placeholder="Digite a idade">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nome" class="col-sm-8 control-label">Nome (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                                                </div>
                                            </div>

                                            <h4>Localidade</h4>
                                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-2 control-label">UF</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="uf" id="uf">
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AM">AM</option>
                                                        <option value="AP">AP</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MG">MG</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MT">MT</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PE">PE</option>
                                                        <option value="PI">PI</option>
                                                        <option value="PR">PR</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="RS">RS</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SE">SE</option>
                                                        <option value="SP">SP</option>
                                                        <option value="TO">TO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="estado" class="col-sm-2 control-label">Estado</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="estado" placeholder="Digite o Estado">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="bairro" placeholder="Digite o Bairro">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="observacao" class="col-sm-2 control-label">Observações: </label>
                                            <textarea class="form-control ml-3 col-sm-10" id="observacao" rows="4" placeholder="Digite informações que possam ajudar na identificação de seu animal!"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <label for="foto_pet" class="col-sm-8 control-label">Enviar foto</label>
                                            <input type="file" class="form-control-file ml-3" id="foto_pet">
                                            </div>

                            </form>
                        </div>
                        
                        <button type="button" class="btn btn-primary">Salvar</button>

                        </div>
                        </div>
                        </div>
   
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Adote
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="adote_cao.php">Adote Cães</a>
                        <a class="dropdown-item" href="adote_gatos.php">Adote Gatos</a>
                    
                        <!-- Botão de cadastro Adote-->
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#adote">
                        Cadastro Pet Perdido
                        </button>
                        </div>
                     <!-- Modal com Form para incersão de dados do PET -->
                     <div class="modal fade bd-adote-modal-sm" id="adote" tabindex=" " role="dialog" aria-labelledby="adoteLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="adoteLabel">Cadastro de Pet para Adoção</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">

                            <h4>Dados do animal</h4>

                            <div class="form-group">
                                 <label class="col-sm-8 control-label">Espécie</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline mr-2">
                                   <input type="radio" name="especie" id="gato" value="GATO">
                                    Gato
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="especie" id="cachorro" value="CACHORRO">
                                    Cachorro
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                 <label class="col-sm-2 control-label">Sexo</label>
                                  <div class="col-sm-4">
                                  <label class="radio-inline">
                                   <input type="radio" name="sexo" id="femea" value="FEMEA">
                                    Fêmea
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="sexo" id="macho" value="MACHO">
                                    Macho
                                    </label>
                                    </div>
                            </div>

                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Tipo de Pelo</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="pelo" id="pelo">
                                                        <option value="CURTO">Curto</option>
                                                        <option value="MEDIO">Médio</option>
                                                        <option value="LONGO">Longo</option>
                                                        <option value="OUTRO">Outro</option>                                                       
                                                    </select>
                                                </div>
                                            </div>    
                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Primária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_primaria" id="cor_primaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Manchado</option> 
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label for="uf" class="col-sm-8 control-label">Cor Secundária</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="cor_secundaria" id="cor_secundaria">
                                                        <option value="PRETO">Preto</option>
                                                        <option value="MARRON">Marron</option>
                                                        <option value="BEGE">Bege</option>
                                                        <option value="BRANCO">Branco</option>    
                                                        <option value="CINZA">Cinza</option>
                                                        <option value="CARAMELO">Caramelo</option>
                                                        <option value="TIGRADO">Tigrado</option>
                                                        <option value="OUTRO">Outro</option>                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="raca" class="col-sm-8 control-label">Raça (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="raca" placeholder="Sem raça definida">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="idade" class="col-sm-8 control-label">Idade (Opcional)</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="idade" placeholder="Digite a idade">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nome" class="col-sm-8 control-label">Nome (Opcional)</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                                                </div>
                                            </div>

                                            <h4>Localidade</h4>
                                            
                                            <div class="form-group">
                                                <label for="uf" class="col-sm-2 control-label">UF</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="uf" id="uf">
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AM">AM</option>
                                                        <option value="AP">AP</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MG">MG</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MT">MT</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PE">PE</option>
                                                        <option value="PI">PI</option>
                                                        <option value="PR">PR</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="RS">RS</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SE">SE</option>
                                                        <option value="SP">SP</option>
                                                        <option value="TO">TO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="estado" class="col-sm-2 control-label">Estado</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="estado" placeholder="Digite o Estado">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="bairro" placeholder="Digite o Bairro">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="observacao" class="col-sm-2 control-label">Observações: </label>
                                            <textarea class="form-control ml-3 col-sm-10" id="observacao" rows="4" placeholder="Digite informações que possam ajudar na identificação de seu animal!"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <label for="foto_pet" class="col-sm-8 control-label">Enviar foto</label>
                                            <input type="file" class="form-control-file ml-3" id="foto_pet">
                                            </div>

                            </form>
                        </div>
                        
                        <button type="button" class="btn btn-primary">Salvar</button>

                        </div>
                        </div>
                        </div>
   
                </li>

                <li class="nav-item">
                    <a class="nav-link h5 text-uppercase text-primary mx-2" href="quemsomos.php">Quem somos</a>
                </li>
            </ul>

            <!-- Botões -->
            <ul class="nav-button navbar-nav ml-auto">

                <!--Adicionado botão de Login-->
                <li class="dropleft ">
                    <button type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entrar
                    </button>

                    <!--Formulário de login-->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Endereço de email</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                    placeholder="email@exemplo.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                                    placeholder="Senha">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Lembrar
                                </label>
                            </div>

                            <a href="user_page.php" class="btn btn-primary" role="button" aria-pressed="true">Entrar</a>

                            <!-- <button type="submit" class="btn btn-primary"  data-target="#user_page">Entrar</button> -->
                        </form>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Não tem uma conta? Cadastre-se.</a>
                        <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                    </div>
                </li>

                <!--Adicionado botão de Cadastro-->
                <li>
                    <button type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1"
                        data-toggle="modal" data-target="#exampleModal">
                        Cadastrar
                    </button>

                    <!--Form e Modal para cadastro do usuário-->
                    
                    <div class="modal fade bd-example-modal-md" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                
                                    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div class="modal-body">
                                    <form action="#" class="form-horizontal">
                                    
                                        <fieldset>
                                        
                                            <legend>Dados Pessoais</legend>
                                            <div class="form-group">
                                                <label for="nome" class="col-sm-2 control-label">Nome</label>
                                                <div class="col-sm-10   ">
                                                    <input type="text" class="form-control" id="nome">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Sexo</label>
                                                <div class="col-sm-4">
                                                    <label class="radio-inline mr-2">
                                                        <input type="radio" name="sexo" id="feminino" value="FEMININO">
                                                        Feminino
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input type="radio" name="sexo" id="masculino" value="MASCULINO">
                                                        Masculino
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="data-nascimento" class="col-sm-8 control-label">Data de Nascimento</label>
			                                    <div class= "col-sm-8">
				                                <select class="mr-2" name = "dia">
				                                <option value="">Dia</option>
				                                <?php
				                                for ($i=1; $i<=31; $i++){?>
				                                <option value="<?php echo $i;?>"> <?php echo $i;}?></option>
				                                </select>
				 
			                                    <select class="mr-2" name="mes">
                                                <option>Mês</option>
                                                <option value="01">Janeiro  </option>
                                                <option value="02">Fevereiro</option>
                                                <option value="03">Março    </option>
                                                <option value="04">Abril    </option>
                                                <option value="05">Maio     </option>
                                                <option value="06">Junho    </option>
                                                <option value="07">Julho    </option>
                                                <option value="08">Agosto   </option>
                                                <option value="09">Setembro </option>
                                                <option value="10">Outubro  </option>
                                                <option value="11">Novembro </option>
                                                <option value="12">Dezembro </option>

                                            </select>					 
	                                        <select name = "ano">
				                            <option value="">Ano</option>
				                            <?php
				                            for ($i=1900; $i<=2030; $i++){?>
				                            <option value="<?php echo $i;?>"> <?php echo $i;}?></option>
				                            </select>	
                                            </div>
                                            </div>
                                                
                                            <div class="form-group ">
                                            <label class="col-sm-8 control-label mt-2" for="exampleFormControlFile1">Adicione uma foto</label>
                                            <input type="file" class="form-control-file col-sm-10     control-label"id="exampleFormControlFile1">
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend>Contato</legend>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                                                <div class="col-sm-4">
                                                    <input type="tel" class="form-control" id="telefone">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend>Endereço</legend>
                                            <div class="form-group">
                                                <label for="logradouro" class="col-sm-2 control-label">Logradouro</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="logradouro">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cep" class="col-sm-2 control-label">CEP</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="cep">
                                                </div>
                                            </div>       

                                            <div class="form-group">
                                                <label for="estado" class="col-sm-2 control-label">Estado</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="estado">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="uf" class="col-sm-2 control-label">UF</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="uf" id="uf">
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AM">AM</option>
                                                        <option value="AP">AP</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MG">MG</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MT">MT</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PE">PE</option>
                                                        <option value="PI">PI</option>
                                                        <option value="PR">PR</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="RS">RS</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SE">SE</option>
                                                        <option value="SP">SP</option>
                                                        <option value="TO">TO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </fieldset>
                                            
                                        <button type="submit" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Enviar
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
            
                </li>
            </ul>
        </div>
    </nav>
</div>