<?php
$id = $_POST['txtid'];
$tipo = $_POST['txttipo'];
$nom = $_POST['txtnom'];
$correo = $_POST['txtcorreo'];
$con = $_POST['txtcon'];

include "conexion.php";
$sql="select * from usuario where id_usuario= $id";
$res= mysqli_query ($conectar, $sql); 
$nro_reg = mysqli_num_rows($res);
if ($nro_reg>0){
 echo '<script> alert ("El ID ya esta siendo usado"); history.go(-1); </script>';
exit;
}

$sql = "insert into usuario(id_usuario, id_tusuario, nombre_usuario, correo, contraseña ) values ('$id', '$tipo', '$nom', '$correo', '$con')";
$res = mysqli_query($conectar, $sql); 

if ($res){  
    echo '<script> alert ("El admin se guardo de manera exitosa");window.location="tabla_administradores.php" </script>';
}else{
  echo '<script> alert ("Error: el admin no se guardo!!!"); history.go(-1); </script>';
}
?>