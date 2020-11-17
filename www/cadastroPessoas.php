<!DOCTYPE html>
<html>
<head>
	<title>Droplet</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="Class.css">

    <link rel="shortcut icon" type="image/x-icon" href="imagens/fav.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body>

<!-- Nav bar-->
<?php include("nav.php"); ?>
<!-- End Nav bar-->


<div class="container colorBG"  style="margin-top: 90px; border-radius: 100px 100px 100px 100px; border-style: solid round black;">
  <form style="text-align: center;" action="functions/clienteInsert.php" method="POST" enctype="multipart/form-data">
    <br><br>
    <h1>DADOS CADASTRAIS</h1>
    <label for="email">E-mail</label><br>
    <input type="e-mail" name="email" id="email" required>
    <br><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" id="senha" required>
    <br><br>
    <label for="senha">Confirmar Senha</label><br>
    <input type="password" name="senha2" id="senha2" required>
    <br><br><br><br>

    <h1>DADOS PESSSOAIS</h1>
    <label for="name">Nome Completo</label><br>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="date">Data de Nascimento</label><br>
    <input type="date" name="date" id="date" required>
    <br><br>
    <label for="cpf">CPF</label><br>
    <input type="text" name="cpf" id="cpf" required placeholder="123.456.789-00">
    <br><br><br><br>

    <h1>CONTATO</h1>
    <label for="phone1">Telefone 1</label><br>
  <input type="tel1" id="phone1" name="phone1" placeholder="yy yyyyy-yyyy" required>
    <br><br>
    <label for="phone2">Telefone 2</label><br>
  <input type="tel2" id="phone2" name="phone2" placeholder="xx xxxxx-xxxx" required>
    <br><br><br><br>

    <h1>ENDEREÇO DE ENTREGA</h1>
    <label for="cep">CEP</label>
    <input type="text" name="cep" id="cep" required placeholder="99999-999">
    | <label for="pt">Complemento</label>
    <input type="text" name="complemento" id="complemento" required placeholder="Ex.: Apto 54">
    <br><br>
    <label for="rua">Rua</label>
    <input type="text" name="rua" id="rua" required placeholder="Ex.: Av. 7 de Setembro">
    | <label for="numero">Número</label>
    <input type="text" name="numero" id="numero" placeholder="1024">
    | <label for="bairro">Bairro</label>
    <input type="text" name="bairro" id="bairro" required placeholder="Ex.: Jd. Macarenko">
    <br><br>
    <label for="estado">Estado</label>
    <input type="text" name="estado" id="estado" required placeholder="Ex.: SP">
    | <label for="cidade">Cidade</label>
    <input type="text" name="cidade" id="cidade" required placeholder="Ex.: quadra de golf">
    <br><br><br><br>

    <h1>FOTO DO USUÁRIO</h1>
    <label for="foto-perfil">Escolha a foto do seu perfil:</label>    
    <input style='visibility: none' type="file" name="foto-perfil" id="foto-perfil">
    <br><br><br><br>

    <input type="submit" class="btn btn-success btn-lg" value="Cadastrar">    
    <br><br>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>