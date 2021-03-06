<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset( '/css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    



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
                                <a class="dropdown-item" href="/pet?tipo=achado&especie=cao">Cães Achados</a>
                                <a class="dropdown-item" href="/pet?tipo=achado&especie=gato">Gatos Achados</a>
                                <a class="dropdown-item" href="/pet-create?tipo=achado">Cadastrar Pet Achado</a>
                            </div>



                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Perdidos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/pet?tipo=perdido&especie=cao">Cães Perdidos</a>
                                <a class="dropdown-item" href="/pet?tipo=perdido&especie=gato">Gatos Perdidos</a>
                                <a class="dropdown-item" href="/pet-create?tipo=perdido">Cadastrar Pet Perdido</a>
                            </div>


                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle h5 text-uppercase text-primary mx-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Adote
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/pet?adotar=s&especie=cao">Adote Cães</a>
                                <a class="dropdown-item" href="/pet?adotar=s&especie=gato">Adote Gatos</a>
                            </div>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link h5 text-uppercase text-primary mx-2" href="/quem_somos">Quem somos</a>
                        </li>
                    </ul>

                    <!-- Botões -->
                    <ul class="nav-button navbar-nav ml-auto">
                    @guest
                        <!--Adicionado botão de Login-->
                        <li class="nav-item">
                                <a type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>

                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </li>
                            @endif
                        @else   

                <li class="dropleft">
           <a id="navbarDropdown" type="button" class="btn btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


           <a class="dropdown-item" type="button" href="{{ route('page') }}">
            {{ __('Minha conta') }}
            </a>
               
               
               <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Sair') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
       </li>
   @endguest
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
                    <li><a href="/pet?tipo=achado">Achados</a></li>
                    <li><a href="/pet?tipo=perdido">Perdidos</a></li>
                    <li><a href="/pet?adotar=s">Adote</a> </li>
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="/js/jquery.mask.js"></script>
    <script src="/js/mask.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>     
    <script src="/js/map.js"></script>
    

</body>

</html>