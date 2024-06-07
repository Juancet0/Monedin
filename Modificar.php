<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$tipo = $_POST['tipo'];
$sql = "UPDATE usuario SET nombre_usuario='$nombre', correo='$correo', contraseña='$pass'";
$resul = mysqli_query($conectar,$sql);
if ($resul){
    echo "<script>alert('Los datos se actualizaron correctamente')</script>";
    header('Location: tabla_administradores.php');
}
else{
    echo "<script>alert('Hubo un error al actualizar los datos')history</script>";
    header('Location: tabla_administradores.php');
    exit;
}
mysqli_close($conectar);
?>