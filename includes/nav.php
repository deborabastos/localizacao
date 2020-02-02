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
                <li class="nav-item">
                    <a class="nav-link h5 text-uppercase text-primary mx-2" href="achados.php">Achados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5 text-uppercase text-primary mx-2" href="perdidos.php">Perdidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h5 text-uppercase text-primary mx-2" href="adote.php">Adote</a>
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

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <!--Adicionado dados para login em um formulário-->
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

                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Não tem uma conta? Cadastre-se.</a>
                        <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                    </div>

                    <!--formulário de cadastro Suspenso-->
                    <button type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1"
                        data-toggle="modal" data-target="#exampleModal">
                        Cadastrar
                    </button>

                </li>




                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
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
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="nome">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Sexo</label>
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
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
                                            <label for="data-nascimento" class="col-sm-2 control-label">Data de
                                                Nascimento</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="data-nascimento">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Contato</legend>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="logradouro">
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



        </div>
    </nav>
</div>