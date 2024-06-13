<?php

include "conexion.php";
include "main.js";

$id = $_POST['txtid'];
$tipo = $_POST['txttipo'];
$nom = $_POST['txtnom'];
$correo = $_POST['txtcorreo'];
$con = $_POST['txtcon'];


$sql = "UPDATE usuario SET id_usuario='$id',id_tusuario='$tipo',nombre_usuario='$nom',correo='$correo',contraseña='$con' where id_usuario = '$id'";
$res = mysqli_query($conectar, $sql); 
if ($res){  
    echo '<script> alert ("El admin se actualizo de manera exitosa");window.location="tabla_administradores.php" </script>';
}else{
  echo '<script> alert ("Error: el admin no se actualizo!!!"); history.go(-1); </script>';
}



?>