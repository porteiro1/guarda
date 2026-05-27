<html>
<?php
session_start();

$hostname = '127.0.0.1';
$user     = 'root';
$password = '';
$database = 'guarda';

$conexao = new mysqli($hostname,$user,$password,$database);

if($conexao -> connect_errno){
echo 'deu nao paziao' .$conexao -> connect_error;
}else{
$sql = "SELECT * FROM `informacoes`";
$resultado = $conexao->query($sql);

if($resultado -> num_rows >0){
while($row = $resultado->fetch_array()){
echo 'nome: ' .$row[1];
echo ' idade: ' .$row[2];
echo ' tem carteira: ' .$row[3];
echo '<br><br>';
}
}

}

?>

</html>
