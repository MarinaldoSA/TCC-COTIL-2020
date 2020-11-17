<!DOCTYPE html>
<html>
<head>
	<title>Droplet</title>

	<link rel="stylesheet" href="Class.css">

  <link rel="shortcut icon" type="image/x-icon" href="imagens/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body>

<!-- Nav bar-->

<?php include('nav.php'); ?>

<!-- End Nav bar-->


<div class="container colorBG" style="margin-top: 90px; border-radius: 100px 100px 100px 100px; border-style: solid round black;">
  <form style="text-align: center;" action="functions/empresaInsert.php" method="POST">
    <br>
    <h1> DADOS CADASTRAIS</h1>  
    <br><br>
    <label for="cnpj">CNPJ:</label><br>
    <input type="text" name="cnpj" id="cnpj" required>
    <br><br>
    <label for="email">E-mail:</label><br>
    <input type="text" name="email" id="email" placeholder="comida@email.com" required>
    <br><br>
    <label for="senha">Senha:</label><br>
    <input type="password" name="senha1" id="senha1" required>
    <br><br>
    <label for="senha">Confirme sua senha:</label><br>
    <input type="password" name="senha2" id="senha2" >
    <br><br>
    <label for="rs">Razão Social da Empresa:</label><br>
    <input type="text" name="rs" id="rs" required placeholder="Razão Social">
    <br><br>
    <label for="name">Nome Fantasia:</label><br>
    <input type="text" name="nomeFantasia" id="nomeFantasia" required placeholder="Nome Fantasia">
    <br><br>
    <label for="slogan">Slogan:</label><br>
    <input type="text" name="slogan" id="slogan"  placeholder="Ex.: A Loja Das Lojas">
    <br><br>
    <label for="desc">Descrição da Empresa:</label><br>
    <input type="text" name="desc" id="desc"  placeholder="Ex.: Somos uma empresa que...">
    <br><br><hr><br><br>
    <h1>FOTO DO USUÁRIO</h1>
    <label for="foto-perfil">Escolha a foto do seu perfil:</label><br>  
    <input style='visibility: none' type="file" name="foto-perfil" id="foto-perfil">
    <br><br><br><br>
    <br><br><hr><br><br>

    <h1>ENDEREÇO DA SEDE/FILIAL</h1>
    <br><br>
    <label for="cep">CEP:</label>
    <input type="text" name="cep" id="cep"  placeholder="XXXXX-XXXX">
    |  <label for="rua">Rua:</label>
    <input type="text" name="rua" id="rua" placeholder ="Ex: Av. 7 de Setembro">
    | <label for="numero">Número:</label>
    <input type="text" name="numero" id="numero" placeholder="Número">
    <br><br>
    <label for="complemento">Complemento:</label>
    <input type="text" name="complemento" id="complemento" placeholder="Ex: Apto. 73">
    | <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" id="bairro"  placeholder="Ex.: Jd. St. Antônio">
    <br><br>
    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado"  placeholder="Ex.: SP">
    | <label for="cidade">Cidade:</label>
    <input type="text" name="cidade" id="cidade"  placeholder="Cidade">
    <br><br><hr><br><br>
    <input type="submit" class="btn btn-success btn-lg" value="Cadastrar">
    <br><br><br><br>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>