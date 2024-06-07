<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Administradores</title>
</head>
<body>
    <b>Administradores</b>
    <div class="lista">
    <table border="2">
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Contraseña</td>
            <td>Tipo</td>
            <td>Modificar</td>
            <td>Eliminar</td>
        </tr>
        </thead>
    </div>
    <tbody>
<?php
include "conexion.php";
$sql = "SELECT * FROM usuario, tipo_usuario WHERE  usuario.id_tusuario = tipo_usuario.id_tusuario  and tipo_usuario.id_tusuario = 1";
$datos = mysqli_query($conectar, $sql);
$resul = mysqli_num_rows($datos);
if ($resul){
    while ($fila = mysqli_fetch_assoc($datos)){
        echo '<tr>';
        echo '<td>'.$fila['nombre_usuario'].'</td>';
        echo '<td>'.$fila['correo'].'</td>';
        echo '<td>'.$fila['contraseña'].'</td>';
        echo '<td>'.$fila['nombre_tu'].'</td>';
        echo '<td><a href="listau_modificar.php?codi=' . $fila['id_usuario']. '"> Modificar </a></td>';
        echo '<td><a href="listau_eliminar.php?codi='.$fila['id_usuario'].'"> Eliminar </a></td>';
        echo '</tr>';
    }
}
mysqli_close($conectar);
?>
    </tbody>
    </table>
    <a href="#">Añadir Administrador</a>
</body>
</html>