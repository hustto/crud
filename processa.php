<?php
session_start();

include_once 'conecta.php';


if($_POST['cadN']){
    $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
    $email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING );

  $novoCad =  "INSERT INTO usuarios (nome, email) VALUES ( :nome, :email)";
 
  $insert = $conect->prepare($novoCad);
  $insert->bindParam(':nome',$nome);
  $insert->bindParam(':email',$email);

  if($insert ->execute()){

    $_SESSION['msg'] = "<p style='color:green;'>Cadastro  Efetuado Com Sucesso</p>";
    header( "location:index.php");   
  }
  
else{

    $_SESSION['msg'] = "<p style='color:red;'>Cadastro Não Efetuado</p>";
    header( "location:index.php");
}}

else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro Não Efetuado 2</p>";
    header( "location:index.php");
}

?>

