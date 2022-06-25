<?php
$servidor = "localhost";
$dbname = "hello_stock";
$usuario = "root";
$senha = "";

date_default_timezone_set('America/Sao_Paulo');

try{
    $conexao = mysqli_connect($servidor,$usuario, $senha, $dbname );   
} catch (Exception $e){
    echo "Erro ao se conectar com o banco de dados!"  .$e;

}
?>