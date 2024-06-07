<?php

$host = "localhost";
$User = "root";
$pass = "";
$db = "monedin";

$conectar = mysqli_connect($host, $User , $pass, $db);

if(!$conectar){
    echo "Error al conectar!!!";
    exit;
}

?>