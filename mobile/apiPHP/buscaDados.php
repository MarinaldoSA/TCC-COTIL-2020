<?php
	//Conexão ao BD
	//ip = 127.0.0.1 nome do banco = criaBancoExterno user=root, senha=vazio
   $conexao = new PDO("mysql:host=143.106.241.3:3306;dbname=cl18137","cl18137", "cl*18022003");
   
   // ativando o depurador de erros
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   //realizar seleção
   $comandoSQL = $conexao->query("SELECT * FROM TCC_cliente");
   
   //como vou usar JSon, preciso jogar os dados num array
   $stringJson = array();
   
   while($linhaBD = $comandoSQL->fetch()){
	   $stringJson[] = $linhaBD;
   }
 
   //agora acontece a mágica -  transformar array em JSon
   $arrayJson = json_encode($stringJson, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
   
   echo $arrayJson;
?>