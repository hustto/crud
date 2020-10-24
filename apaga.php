<?php
session_start();
include_once 'conecta.php';

?>

<html lang="pt-br">
<head>
<title>Edita usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.2">
<link rel="stylesheet" href="estyle.css">
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

$lista = $conect->prepare("SELECT * FROM  usuarios WHERE id = '$id' ");
$lista->execute();
$lista = $lista->fetch(PDO::FETCH_ASSOC);

//Busca dados e Associa ao Input//

	if (isset($_POST["Apaga"])):
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	
	$apaga = $conect->prepare("DELETE FROM usuarios WHERE id='$id'");

	$apaga->execute();
	if ($apaga): 
		header("Location:lista.php");

		
	endif;

endif;
	


?>
<form class="form"  method="POST">

<input class="email"  placeholder="Nome" type="text" name="nome" value="<?php echo $lista["nome"];?>">
<input class="senha"  placeholder="Senha" type="email" name="email"value="<?php echo $lista["email"];?>">
<input class="entrar" type="submit" value="Deleta usuário" name="Apaga">
</form>
<div class="cobertura-link">
	
</body>
</html>