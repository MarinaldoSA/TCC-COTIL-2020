<!DOCTYPE html>
<html>
<head>
	<title>Droplet</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="imagens/fav.ico">
	<link rel="stylesheet" href="Class.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body class="colorBG">

<!-- Nav bar-->

<?php include("nav.php"); ?>

<!-- End Nav bar-->

<div class="container" style="background-color: white;">
  <div class="row pad" style="margin-top: 150px;">
    <div class="col-lg text-center">
      <h1>CLIENTES</h1>
      <img src="imagens/user.png" class="img-responsive" alt="...">

      <form method="POST" action="functions/login.php">
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" size="40" required placeholder="Digite seu email.">
        <br><br><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha"  required>
        <br><br>
        <input type="submit" valu&e="logar">
        <br><br>
        </form>       
        <a href="cadastroPessoas.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Cadastar Como Cliente</a>      
    	</div>
    <div class ="col-lg text-center">
    <img src="imagens/user.png" class="img-responsive" alt="...">
    <br>
    <a href="cadastroEmpresa.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true" style="margin-top:2%;">Cadastre sua empresa</a>
    </div>
  </div>
  <div class="row colorBG" style="height: 325px;">
    <div class="col-lg-4 text-white text-center" style="padding-top: 60px;">
      <p style="color: white;">Integrantes do Grupo:</p>
      <p style="color: white;">Antonio Gabriel</p>
      <p style="color: white;">João Victor</p>
      <p style="color: white;">Marinaldo Silva</p>
      <p style="color: white;">Victor Domingues</p>
    </div>
    <div class="col-lg-4 text-white text-center" style="padding-top: 30px;">
      <img src="imagens/logo.png" class="img-responsive">
      <p style="color: white;">A Loja Das Lojas</p>
    </div>
    <div class="col-lg-4 text-white text-center" style="padding-top: 100px;">
      Nós da Droplet,<br> nos COMPROMETEMOS em oferecer ao consumidor<br> a PRATICIDADE de ir ao mercado<br><b> sem sair de casa</b></p>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>