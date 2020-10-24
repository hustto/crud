<?php
session_start();
include_once 'conecta.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de usuarios</title>
</head>
<body>
<ul>
<?php
$busca = $conect ->prepare("SELECT * FROM  usuarios ");
$busca->execute();

while ($lista = $busca->fetch(PDO::FETCH_ASSOC)):
?>
<li><?php echo $lista["id"];?>
<?php echo $lista["nome"];?><br>
<?php echo $lista["email"];?><br><br>
<a href="edita.php?id=<?php echo $lista['id']; ?>">Editar</a>&nbsp;&nbsp;&nbsp;
<a href="apaga.php?id=<?php echo $lista['id']; ?>">apaga</a><hr></li>

<?php

endwhile;

?>


</ul>
</body>
</html>