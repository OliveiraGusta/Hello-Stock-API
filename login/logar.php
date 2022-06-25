
<?php
include_once("./conexao.php");

$login = $_GET['login'];
$senha = $_GET['senha'];


$query = "SELECT login, senha, nome, social FROM usuario WHERE login = '$login' and senha = '$senha'";
$res = mysqli_query($conexao, $query);
$dados = mysqli_fetch_array($res);
// $dados[0] = login ; $dados[1] = senha
// $dados[2] = nome ;  $dados[3] = social

if(isset($dados[0]) || isset($dados[1]) ){
   echo json_encode(array("status"=> "true", "nome"=> $dados[2], "empresa"=> $dados[3]));
}

else{
   echo  json_encode(array("status"=> "false") );
}

?> 