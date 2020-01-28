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
    <button class="navbar-toggler ml" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Menu de navegação">
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
        <button class=" btn-primary btn-sm font-weight-bold mr-2 mb-3 p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Entrar
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

         <!--Adicionado dados para login em um formulário-->
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
          <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Não tem uma conta? Cadastre-se.</a>
          <a class="dropdown-item" href="#">Esqueceu a senha?</a>
          </div>
          </li>

        <li class="nav-item mt-1 ">
          <a class="btn-primary btn-sm font-weight-bold rounded p-2 " href="cadastro_usuario.php" role="button">Cadastro</a>          
        </li>
      </ul>
    </div>
  </nav>
</div>