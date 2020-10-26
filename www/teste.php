<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Droplet</title>
  <link rel="shortcut icon" type="image/x-icon" href="imagens/fav.ico">
  <link rel="stylesheet" href="Class.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body>

<!-- Nav bar-->

<nav class="navbar navbar-expand-lg fixed-top navbar-dark colorBG">

  <a class="navbar-brand fontLight" href="login.html" > <img src="imagens/logo.png" alt="" class="img-responsive" width="30" height="30"> DROPLET </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <form class="form-inline" style="margin-left: 18%;" method="POST" action="teste.php">
      <input class="form-control text-center" type="text" placeholder="Pesquise aqui uma marca (123 ou 1234)" aria-label="Search" size="60" id="pesquisa" name="pesquisa">
      <input type="submit" value="Search">
    </form>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link fontLight" href="index.html">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="mercado.html">Mercados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="produtos.html">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="login.html">Login</a>
      </li>
    </ul>

  </div>

</nav>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")

{
  include("conBD.php");

  echo "";

  $produto = "Modal do Card";

//Query

    $stmt = $pdo->prepare("select * from TCC_produto where fornecedor=:fornecedor");
    $stmt->bindParam(":fornecedor", $_POST["pesquisa"], PDO::PARAM_STR);
        try 
        {
            //buscando dados
            $stmt->execute();
            while ($row = $stmt->fetch()) 
            {
             
            echo "
            <div class=\"col-lg text-center\">
            <div class=\"card\">
            <img src=\"imagens/.jpg\" class=\"card-img-top img-responsive\" alt=\"...\">
            <div class=\"card-body\">
            <p class=\"card-text\">".$row['nome']."</p>
            <p class=\"color3\">FRETE GRÁTIS</p>
            <p>Oferecido por: ".$row['fornecedor']."</p>
            <p>R$".$row['preco']."</p>
            <p>5x de ".$row['preco']."</p>
            <p>".$row['descricao'].".</p>
           <!-- Button trigger modal -->
           <button type=\"button\" class=\"btn btn-success btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#exampleModa2\">COMPRAR
            </button>

           <!-- Modal -->
            <div class=\"modal fade\" id=\"exampleModa2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\" id=\"exampleModalLabel\"></h5>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
                <div class=\"modal-body\">
                  <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row no-gutters\">
              <div class=\"col-md-4\">
                <img src=\"imagens/roupa.jpg\" class=\"card-img\" alt=\"...\">
              </div>
              <div class=\"col-md-8\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">Moleton Adidas Masculino</h5>
                  <p class=\"card-text\">
                    <p>Oferecido por:".$produto."</p>
                    <p>R$ 229,99</p>
                    <p>5x de R$ 40,00</p>
                  </p>
                  <p class=\"card-text\"><small class=\"text-muted\">Frete Grátis</small></p>
                  <button type=\"button\" class=\"btn btn-success btn-lg btn-block\">COMPRAR</button>
                </div>
              </div>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
                </div>            
                  </div>
                  ";

            }
        }
        catch(PDOException $e)
        {
            $output = 'Impossível conectar ao Banco de Dados: ' . $e . '<br>';
            echo $output;       
        }
        
}
?>