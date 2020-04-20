<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset( '/css/style.css') }}">



    <!-- Fontes -->
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> <!-- font-family: 'Roboto', sans-serif; -->
    <!-- Merieda One -->
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet"> <!-- font-family: 'Merienda One', cursive; -->
    <!-- Merieda  -->
    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet"> <!-- font-family: 'Merienda', cursive; -->
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> <!-- font-family: 'Poppins', sans-serif; -->
    <!-- Shadow Intro Light -->
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet"> <!-- font-family: 'Shadows Into Light', cursive; -->
    <!-- Lobster -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> <!-- font-family: 'Lobster', cursive; -->
    <!-- Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>@yield('title')</title>

</head>

<body>

    <header>
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
                    <a class="logo_link" href="/">
                        <img src="/images/logo_sn.jpg" alt="Localizacão">
                        <p class="logo_p">LocalizaCão</p>
                    </a>
                </div>

                <!-- Menu Hamburguer -->
                <button class="navbar-toggler ml" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Menu de navegação">
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
                                <a class="dropdown-item" href="/achados?especie=cao">Cães Achados</a>
                                <a class="dropdown-item" href="/achados?especie=gato">Gatos Achados</a>
                                <a class="dropdown-item" href="/achados/create" id="link-modal-achados">Cadastro Pet Achado</a>
                            </div>

                            <!-- Modal com Form para inserção de dados do PET -->
                            <div class="modal fade bd-achado-modal-sm" id="modal-achados" tabindex=" " role="dialog" aria-labelledby="achadoLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- Carrega conteúdo de achados/create -->
                                    </div>
                                </div>
                            </div>


                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Perdidos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/perdidos?especie=cao">Cães Perdidos</a>
                                <a class="dropdown-item" href="/perdidos?especie=gato">Gatos Perdidos</a>
                                <a class="dropdown-item" href="/perdidos/create" id="link-modal-perdidos">Cadastro Pet Perdido</a>
                            </div>

                            <!-- Modal com Form para inserção de dados do PET -->
                            <div class="modal fade bd-perdido-modal-sm" id="modal-perdidos" tabindex=" " role="dialog" aria-labelledby="perdidoLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- Carrega conteúdo de perdidos/create -->                                        
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Adote
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/adote?especie=cao">Adote Cães</a>
                                <a class="dropdown-item" href="/adote?especie=gato">Adote Gatos</a>
                                <a class="dropdown-item" href="/adote/create" id="link-modal-adote">Cadastro Pet Adoção</a>
                            </div>

                            <!-- Modal com Form para inserção de dados do PET -->
                            <div class="modal fade bd-adote-modal-sm" id="modal-adote" tabindex=" " role="dialog" aria-labelledby="adoteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- Carrega conteúdo de adote/create -->                                        
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link h5 text-uppercase text-primary mx-2" href="/quem_somos">Quem somos</a>
                        </li>
                    </ul>

                    <!-- Botões -->
                    <ul class="nav-button navbar-nav ml-auto">

                        <!--Adicionado botão de Login-->
                        <li class="dropleft ">
                            <button type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Entrar
                            </button>

                            <!--Formulário de login-->
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1">Endereço de email</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword1">Senha</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Lembrar
                                        </label>
                                    </div>

                                    <a href="/pagina_usuario" class="btn btn-primary" role="button" aria-pressed="true">Entrar</a>
                                </form>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Não tem uma conta? Cadastre-se.</a>
                                <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                            </div>
                        </li>

                        <!--Adicionado botão de Cadastro-->
                        <li>

                            <a href="/user/create" type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" id="link-modal-user">
                                Cadastrar
                            </a>

                            <!--Form e Modal para cadastro do usuário-->
                            <div class="modal fade bd-example-modal-md" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                        <!-- Carrega conteúdo de user/create -->                                        
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    @yield('content')




    <!-- Footer -->
    <footer class="footer">
        <div class="inner-footer">
            <div class="footer-items">
                <h1 class="footer-h1"><a class="footer-h1" href="/index">LocalizaCão</a></h1>
                <p>O LocalizaCão é um serviço gratuito, criado para te ajudar a encontrar seu amiguinho.</p>
            </div>

            <div class="footer-items">
                <h2 class="footer-h2">QUEM SOMOS?</h2>
                <div class="footer-border"></div>
                <ul>
                    <li><a href="/quem_somos">Sobre nós</a></li>
                    <li><a href="/sucesso">Casos de sucesso</li></a>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> 11- 997979981</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> support@gmail.com</li>
                </ul>
            </div>

            <div class="footer-items">
                <h2 class="footer-h2">MAPA DO SITE</h2>
                <div class="footer-border"></div>
                <ul>
                    <li><a href="/achados">Achados</a></li>
                    <li><a href="/perdidos">Perdidos</a></li>
                    <li><a href="/adote">Adote</a> </li>
                </ul>
            </div>

            <div class="footer-items">
                <h2 class="footer-h2">FIQUE POR DENTRO!</h2>
                <div class="footer-border"></div>
                <p>Para receber notícias e novidades do nosso site, deixe seu e-mail: </p>
                <ul>
                    <li><a href="">
                            <input type="email" name="" id="" placeholder="Informe seu e-mail">
                            <button class="button-cadastro" type="submit" href="#">Enviar</button>
                        </a></li>

                    <li><a class="privacidade" href="#">Política de Privacidade</a></li> <!-- Abrir popup com política de privacidade -->
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            copyright &copy; LocalizaCão 2020. all rights reserved.
        </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Meu JS -->
    <script src="/js/localizacao.js"></script>

</body>

</html>