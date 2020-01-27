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



  <div class="servicos" id="servicos">
		<h1 class="title">Servicos</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quia, porro repellendus dolore repudiandae, accusantium corporis harum vel iste suscipit maiores provident ullam itaque libero minus nesciunt consequatur iusto numquam asperiores quod fugiat veniam blanditiis.</p>
		<div class="diff_services">
			<div class="diff_services_item">
				<img src="images/mainpage copy.jpg" alt="service_image">
				<h3 class="sub_title">Achados</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<div class="diff_services_item">
				<img src="images/mainpage2 copy.jpg" alt="service_image">
				<h3 class="sub_title">Perdidos</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
    </div>

        <!-- mapas-->

        <div class="diff_services_item1">
            <h1 class="title">Mapas</h1>
        <img src="images/maps1 copy 3.jpg" width=45%>
        <h3 class="sub_title">Mapas</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

<!-- mapas termina-->



<!-- isto tambem vai ne-->

	<div class="adote" id="adote">
		<h1 class="title">Adote</h1>
		<div class="ourteam_wrapper">
			<div class="team-1 team">
				<div class="team_members" data-name="da vinci"><img src="images/animal-blur-canine-close-up-551628 copy.jpg"><p>Da Vinci<br>Procurando uma casa</p></div>
				<div class="team_members" data-name="doido"><img src="images/english-cocker-spaniel-puppy-sitting-on-ground-beside-grass-1254140 copy.jpg"><p>Doido<br>Procurando uma casa</p></div>
				<div class="team_members" data-name="domingo"><img src="images/perdido2 copy.jpg"><p>domingo<br>Procurando uma casa</p></div>
			</div>
			<div class="team-2 team">
				<div class="team_members" data-name="dahora"><img src="images/perdido4 copy.jpg"><p>Dahora<br>Procurando uma casa</p></div>
				<div class="team_members" data-name="gato"><img src="images/perdido5 copy.jpg"><p>gato<br>Procurando uma casa</p></div>
				<div class="team_members" data-name="miauu"><img src="images/silver-tabby-cat-lying-on-brown-wooden-surface-126407 copy.jpg"><p>miauu<br>Procurando uma casa</p></div>
			</div>
		</div>
    </div>	




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