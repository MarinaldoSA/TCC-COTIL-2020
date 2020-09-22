<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    include("conBD.php");

    try {            
         $email = $_POST["email"];
           $cpf = $_POST["cpf"];
         $senha = $_POST["senha"];
          $nome = $_POST["name"];
$dataNascimento = gettext($_POST["date"]);
        $phone1 = $_POST["phone1"];
        $phone2 = $_POST["phone2"];
           $cep = $_POST["cep"];
   $complemento = $_POST["complemento"];
           $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];

;
        if ((trim($cpf) == "") || (trim($senha) == "")) 
        {
            echo "<span id='warning'>CPF e senha são obrigatórios!</span>";
        }
        else 
        {
            //verificando se o CPF informado já existe no BD para não dar exception
            $stmt = $pdo->prepare("select * from TCC_cliente where CPF = :cpf");
            $stmt->bindParam(':cpf', $cpf);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if ($rows <= 0) 
            {
                $stmt = $pdo->prepare("insert into TCC_cliente (CPF, nome, email, senha, dataNascimento, fotoPerfil) values (:CPF, :nome, :email, :senha, :dataNascimento, NULL)");
            
                $stmt->bindParam(':CPF', $cpf);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->bindParam(':dataNascimento', $dataNascimento);
              
                $stmt->execute();

                $stmt = $pdo->prepare("insert into TCC_EndCli (CEP, rua, bairro, numero, complemento, cidade, estado, pontoRef, CPF) values(:CEP, :rua, :bairro, :numero, :complemento, :cidade, :estado, NULL, :CPF)");
              
                $stmt->bindParam(':CEP', $cep);
                $stmt->bindParam(':rua', $rua);
                $stmt->bindParam(':bairro', $bairro);
                $stmt->bindParam(':numero', $numero);
                $stmt->bindParam(':complemento', $complemento);
                $stmt->bindParam(':cidade', $cidade);
                $stmt->bindParam(':estado', $estado);
              
                $stmt->execute();

                echo "<span id='sucess'>Seu cadastro foi efetuado com sucesso!</span>";
            }
            else 
            {
                echo "<span id='error'>Cadastro já realizado!</span>";
            }
        }

    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
}

?>