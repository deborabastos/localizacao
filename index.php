<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
 
    <!-- Fontes -->
    <?php
        require_once("./includes/fonts.php");
    ?>


    <title>LocalizaCão</title>

    
  </head>
  <body>
  <header>
    <!-- nav -->
    <?php
        require_once("./includes/nav.php");
    ?>

    <!-- banner -->
    <div class="banner"></div>

  </header>


<main>

<section class="section section-light">
        <h3>Como funciona</h3>
        <p>
            A LocalizaCão conta com a ajuda de toda comunidade para reunir tutores com animais perdidos ou abandonados.
            Confira no mapa!

        </p>
    </section>

    <div class="box">

    <div class="selectors">
        
        <select>
            <option>animal</option>
            <option>cachorro</option>
            <option>gato</option>
            
        </select>
        
        <select>
            <option>tamanho</option>
            <option>grande</option>
            <option>medio</option>
            <option>pequeno</option>
            
            
        </select>
        
        <select>
            <option>achados ou perdidos</option>
            <option>achados</option>
            <option>perdidos</option>
        </select>
        
        <select>
            <option>estado</option>
            <option>sao paulo</option>
            <option>parana</option>
            
        </select>
        
        <select>
            <option>cidade</option>
            <option>sao paulo</option>
            <option>curitiba</option>
            
        </select>
        
        <input class="form-control" placeholder="nome do bichinho? Digite aqui." type="text">
        
        <input class="btn" type="submit" value="procurar"></input>
    </div>
       
    </div>

    <section class="section section-light">
        <h3>Mapas</h3>
        <p>

            Se você precisa de ajuda para encontrar um animal, um tutor ou apenas gostaria de ajudar. É muito importante
            se cadastrar para conseguirmos entrar em contato com você.
            Faça seu login ou cadastre-se.
        </p>
    </section>

    <div class="maps">
        <img src="images/maps1 copy.jpg" style="width: 45%;">

    </div>


    

    <section class="section section-light">
        <p>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quasi doloribus itaque fugiat, quibusdam totam
            maxime neque illo nostrum similique ex cum quas labore voluptates dolorem aspernatur, quis ipsam quos id
            quia nam, non facere laboriosam error? Maiores dolores minima explicabo delectus fugiat amet necessitatibus!
            Sapiente suscipit vero quos, earum provident eveniet quidem labore? In placeat soluta, fuga doloremque
            numquam nisi amet quaerat! Eius ipsa itaque, minima aliquam explicabo quam nobis aperiam animi repudiandae
            nulla commodi cupiditate tenetur amet autem adipisci ut repellendus, similique, cum totam sapiente facere
            velit quod eligendi. Reiciendis doloremque cumque tempore ratione eius corporis magnam neque.
        </p>
    </section>


</main>




  <!-- Footer -->
<footer>
    <?php
        require_once("./includes/footer.php");
    ?>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>