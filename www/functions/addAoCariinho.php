<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $codProduto = $_POST["submit"];
    
    $_SESSION["produtosCarrinho"] = array();
    array_push($_SESSION["produtosCarrinho"], $codPorduto);
    foreach($_SESSION["produtosCarrinho"] as $produto)
    {
        echo $produto;
    }
} 