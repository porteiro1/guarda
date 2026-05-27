<?php
$hostname = '127.0.0.1';
$user     = 'root';
$password = '';
$database = 'guarda';

$conexao = new mysqli($hostname,$user,$password,$database);

if($conexao -> connect_errno){
  echo 'deu nao paizao' . $conexao -> connect_error;
  exit();
  
}else{
  $nome     = $conexao -> real_escape_string($_POST['name']);
  $idade    = $conexao -> real_escape_string($_POST['idade']);
  $carteira = $conexao -> real_escape_string($_POST['choose']);

  $sql = "INSERT INTO `guarda`.`informacoes` (`name`,`idade`,`carteira`) VALUE ('".$nome."', '".$idade."','".$carteira."');";

  $resultado = $conexao->query($sql);
  $conexao->close();
  header('Location: index.php',true,301);
}
?>
