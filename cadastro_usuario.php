<!DOCTYPE html>
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

        
    <title>LocalizaCão - Perdidos</title>

</head>

<body>


<header>
    <!-- nav -->
    <?php
        require_once("./includes/nav.php");
    ?>
</header>

<main>
 <div class="justify-center">

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
									<input type="radio" name="sexo" id="feminino" value="FEMININO"> Feminino
								</label>

								<label class="radio-inline">
									<input type="radio" name="sexo" id="masculino" value="MASCULINO"> Masculino
								</label>
							</div>
						</div>
						
						<div class="form-group">
							<label for="data-nascimento" class="col-sm-2 control-label">Data de Nascimento</label>
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
						<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Gravar
					</button>
				</form>

</div>

            
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