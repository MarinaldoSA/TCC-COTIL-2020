<?php

include("conBD.php");;
require "../classes/fornecedor.php";

if ($_SERVER["REQUEST_METHOD"] === 'POST') 
{
    if($_POST["senha1"] == $_POST["senha2"])
    {
        try 
        {
            $CNPJ = $_POST["cnpj"];
            $nomeFantasia = $_POST["nomeFantasia"];
            $email = $_POST["email"];
            $senha = $_POST["senha1"];
            $razaoSocial = $_POST["rs"];
            $descricao = $_POST["desc"];
            $CEP = $_POST["cep"];
            $rua = $_POST["rua"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];

            if((trim($CNPJ) == "") || (trim($senha) == ""))
            {
                echo "<span id='warning'>CPNJ e senha são obrigatórios!</span>";
            }
            else 
            {
                //verificando se o CPF informado já existe no BD para não dar exception
                $stmt = $pdo->prepare("select * from TCC_fornecedor where CNPJ = :cnpj");
                $stmt->bindParam(':cnpj', $CNPJ);
                
                $stmt->execute();

                $rows = $stmt->rowCount();
                if ($rows <= 0) 
                {
                    $stmt = $pdo->prepare("insert into TCC_fornecedor (CNPJ, nomeFantasia, email, senha, razaoSocial, fotoPERFIL, descricao) 
                                            values (:CNPJ, :nome, :email, :senha, :razaoSocial, NULL, :descricao)");
                    $stmt->bindParam(':CNPJ', $CNPJ);
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':senha', $senha);
                    $stmt->bindParam(':razaoSocial', $razaoSocial);
                    $stmt->bindParam(':descricao',$descricao);
                
                    $stmt->execute();

                    $stmt = $pdo->prepare("insert into TCC_EndFor (CEP, rua, bairro, cidade, numero, complemento, CNPJ) 
                    values (:CEP, :rua, :bairro, :cidade, :numero, :complemento, :CNPJ)");
                
                    $stmt->bindParam(':CEP', $cep);
                    $stmt->bindParam(':rua', $rua);
                    $stmt->bindParam(':bairro', $bairro);
                    $stmt->bindParam(':cidade', $cidade);
                    $stmt->bindParam(':numero', $numero);
                    $stmt->bindParam(':complemento', $complemento);
                    $stmt->bindParam(':CNPJ', $CNPJ);
                
                    $stmt->execute();

                    echo "<span id='sucess'>Seu cadastro foi efetuado com sucesso!</span>";
                }
                else 
                {
                    echo "<span id='error'>Cadastro já realizado!</span>";
                }
            }
        }
        catch (PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();     
        }
    }
}