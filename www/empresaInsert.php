<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    include("conBD.php");

    try {            
        $email = $_POST["email"];
        $senha = $_POST["senha1"];
        $cnpj = $_POST["cnpj"];
        $rs = $_POST["rs"];
        $nome = $_POST["name"];
        
        /*
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        */
        $cep = "123";
        $rua = "salva";
        $numero = "32";
        $bairro = "salvei";
        $cidade = "salvado";
        
;
        if ((trim($cnpj) == "") || (trim($nome) == "")) {
            echo "<span id='warning'>Email e Senha são obrigatórios!</span>";
        } else {
            //verificando se o RA informado já existe no BD para não dar exception
            $stmt = $pdo->prepare("select * from TCC_fornecedor where CNPJ = :cnpj");
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if ($rows <= 0) {
                $stmt = $pdo->prepare("insert into TCC_fornecedor (CNPJ, nomeFantasia, email, senha, razaoSocial, fotoPERFIL) values(:cnpj, :nome, :email, :senha, :rs, NULL)");
                $stmt->bindParam(':cnpj', $cnpj);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->bindParam(':rs', $rs);
                $stmt->execute();

                $stmt = $pdo->prepare("insert into TCC_EndFor (CEP, rua, bairro, cidade, numero, complemento, CNPJ) values(:cep, :rua, :bairro, :cidade, :numero, NULL, :cnpj)");
                $stmt->bindParam(':cep', $cep);
                $stmt->bindParam(':rua', $rua);
                $stmt->bindParam(':bairro', $bairro);
                $stmt->bindParam(':cidade', $cidade);
                $stmt->bindParam(':numero', $numero);
                $stmt->bindParam(':cnpj', $cnpj);
                $stmt->execute();

                echo "<span id='sucess'>Empresa Cadastrado!</span>";
            } else {
                echo "<span id='error'>Empresa já existente!</span>";
            }
        }

    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
}

?>