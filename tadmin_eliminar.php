<?php
$id =$_GET['codig'];


if($id<=0){
    echo '<script>alert("Error: el id no puede ser menor a cero!");history.go(-1);</script>';
    exit;
}

include 'conexion.php';
$sql="DELETE FROM usuario WHERE id_usuario = $id";
$res=mysqli_query($conectar, $sql);

if($res){
    echo '<script>alert("El admin se elimino correctamente"); window.location="tabla_administradores.php";</script>';    
}else{
    echo '<script>alert("Error: No se elimino el admin!");history.go(-1); </script>';    
}

mysqli_close($conexion);


?>
