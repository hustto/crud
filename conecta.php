<?php

try {
    $conect = new PDO("mysql:host=localhost;dbname=log2","root","");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falha na Conexão: ';
}

 

?>
