<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Tabla Administradores</title>
</head>
<body class="body-tabla-admin">
    <b>Administradores</b>
    <div class="lista">
    <table>
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
        echo '<td class="celda">'.$fila['nombre_usuario'].'</td>';
        echo '<td class="celda">'.$fila['correo'].'</td>';
        echo '<td class="celda">'.$fila['contraseña'].'</td>';
        echo '<td class="celda">'.$fila['nombre_tu'].'</td>';
        echo '<td class="celda"><a href="tadmin_modificar.php?codi=' . $fila['id_usuario']. '"> Modificar </a></td>';
        echo '<td class="celda"><a href="tadmin_eliminar.php?codig=' .  $fila['id_usuario'].'"> Eliminar  </a></td>';
        echo '</tr>';
    }
}
mysqli_close($conectar);
?>
    </tbody>
    </table>
    <a href="tadmin_añadir.php">Añadir Administrador</a>
    <br>
    <p>
    <a href="lista.php">Regresar</a>

</body>
</html>