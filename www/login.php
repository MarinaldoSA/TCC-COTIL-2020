<?php 
session_start();
if(isset($_SESSION['logado']))
{
    header('Location: index.html');
    exit(1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	include("conBD.php");
	$stmt  = $pdo->prepare("select * from TCC_cliente where email = :email and senha = :senha;");
	$email = htmlspecialchars($_POST["email"]);
	$senha = htmlspecialchars($_POST["senha"]);
	$stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->bindParam(":senha", $senha, PDO::PARAM_STR);
	try
	{
		$stmt->execute();
		if ($row = $stmt->fetchObject()) {
            $_SESSION['logado'] = true;
            $_SESSION['CPF']   = $row->CPF;
            echo 'Carregando sistema, aguarde...';
            header( "refresh:2; url=index.html"); 
            exit(0);
        }else{
            echo 'Usuario/Senha inválido!';
        }
	}
	catch(PDOException $e) 
	{
        echo 'Error: ' . $e->getMessage();
    }

}

