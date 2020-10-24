<?php
session_start();

?>
<html lang="pt-br">
<head>
<title>Tela de Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.2">
<link rel="stylesheet" href="estyle.css">
<meta name="Author" content="Renan Carlos">
<meta charset="UTF-8">

</head>
<body>
<div class="container-form">

<h1 class="title">Entra no Sistema</h1>
<?php
if (isset($_SESSION ['msg'])){
    echo $_SESSION ['msg'];
    unset ($_SESSION ['msg']);
}
?>
<form class="form"  method="POST" action="processa.php">
<input class="email"  placeholder="Nome" type="text" name="nome" >
<input class="senha"  placeholder="Senha" type="email" name="email">
<input class="entrar" type="submit" value="Cadastra" name="cadN">
<input class="entrar" type="submit"value="Lista de usuários "id="lista.php">
</form>
<div class="cobertura-link">		
	
</body>
</html>