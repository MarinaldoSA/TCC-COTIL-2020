<?php
try {        
        $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl18137;charset=utf8', 'cl18137', 'cl*18022003');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $output = 'Conexão estabelecida. <br>';
    } 
    catch (PDOException $e)
    {
        $output = 'Impossível conectar BD : ' . $e . '<br>';
    }
    echo $output;
?>