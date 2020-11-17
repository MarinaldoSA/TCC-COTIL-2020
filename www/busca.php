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
<?php include("nav.php") ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
echo "lkdfsajflksdjfklsajdf";

if ($_SERVER["REQUEST_METHOD"] == "POST")

{
  include("functions/conBD.php");
  include("classes/produto.php");
  
//Query

    $stmt = $pdo->prepare("select * from TCC_produto where fornecedor=:fornecedor");
    $stmt->bindParam(":fornecedor", $_POST["pesquisa"], PDO::PARAM_STR);
        try 
        {
            //buscando dados
            $stmt->execute();
            while ($row = $stmt->fetch()) 
            {
              $produto = new Produto();
              $produto->setCod($row["CodRef"]);
              $produto->setNome($row["nome"]);
              $produto->setPreco($row["preco"]);
              $produto->setAvaliacao($row["avaliacao"]);
              $produto->setFornecedor($row["fornecedor"]);
              $produto->setDescricao($row["descricao"]);
              $produto->setImagem($row["imagem"]);
              $produto->imprimeCard();
            }
        }
        catch(PDOException $e)
        {
            $output = 'Impossível conectar ao Banco de Dados: ' . $e . '<br>';
            echo $output;       
        }
}
?>

</body>
</html>