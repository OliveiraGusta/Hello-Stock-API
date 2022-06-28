<?php

$connectionInfo = array("UID" => "admin_sql", "pwd" => "@\$qL#3teC", "Database" => "Hello_Stock", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:hellostock.database.windows.net,1433";
$conexao = sqlsrv_connect($serverName, $connectionInfo);

?>