<?php
include_once("../listarConexao.php");

$dados = array();

$query = $conexao->query( "SELECT pro_cod, pro_nome, pro_descricao, pro_sup, pro_valorpago, pro_valorvenda, umend_cod, pro_quantidade, imagens, pro_promocoes, pro_valordesconto FROM produto");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for($i=0; $i < count($res); $i++){
    foreach ($res[$i] as $key => $value){
        $dados = $res;
    }
}

echo ($res)?
json_encode(array("status"=> 1, "result"=>$dados)) :
json_encode(array("status"=> 0, "false")) 

?> 