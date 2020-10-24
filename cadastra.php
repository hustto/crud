<?php
session_start();
include_once 'conecta.php';

?>

<html lang="pt-br">
<head>
<title>Edita usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.2">
<link rel="stylesheet" href="estyle2.css">
<meta name="Author" content="Renan Carlos">
<meta charset="UTF-8">

</head>
<body>
<div class="container-form">

<h1 class="title">Edita usuário</h1>

<?php

if (isset($_GET["id"])):
	$id= $_GET["id"];
endif;	

$busca = $conect->prepare("SELECT * FROM  usuarios WHERE id='$id'");
$busca->execute();
$busca = $busca->fetch(PDO::FETCH_ASSOC);

?>
<form class="form"  method="POST">
<input class="email"  placeholder="Nome" type="text" name="nome" value="<?php echo $busca["nome"];?>">
<input class="senha"  placeholder="Senha" type="email" name="email"value="<?php echo $busca["email"];?>">
<input class="entrar" type="submit" value="Salva" name="cadN">
</form>
<div class="cobertura-link">
	
</body>
</html>