<?php
	//Conexão ao BD
	//ip = 127.0.0.1 nome do banco = criaBancoExterno user=root, senha=vazio
   $conexao = new PDO("mysql:host=143.106.241.3:3306;dbname=cl18137","cl18137", "cl*18022003");
   
   // ativando o depurador de erros
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   if(isset($_GET['tipoOperacao'])){
	   $cpf = $_GET['cpf'];
	   $nome = $_GET['nome'];
	   
	   if($tipoOperacao == 'I'){
		  $comandoSQL = 
		  $conexao->prepare("INSERT INTO TCC_cliente(" .
		                       "CPF, nome, email, senha, dataNascimento, fotoPerfil)" .
	                "   VALUES('".$cpf."', '".$nome."', 'NULL, NULL, NULL, NULL');");
       }
       /*
       elseif($tipoOperacao == 'U'){
		  $comandoSQL = 
		  $conexao->prepare("UPDATE TCC_cliente".
		                    "   SET nomeGrupo       = '".$nomeGrupo."', ".
							"       nomeIntegrantes = '".$nomeIntegrantes."', ".
							"       nota            = ".$nota.
							" WHERE _id = ".$_id);
	   }else{
		  $comandoSQL = 
		  $conexao->prepare("DELETE FROM notasTCC".
							" WHERE _id = ".$_id);
       }
       */
	   $comandoSQL->execute();
   }
?>