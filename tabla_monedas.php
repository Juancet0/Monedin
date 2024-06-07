<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Monedas</title>
</head>
<body>
    <b>Monedas</b>
    <p>
    <div class="lista">
    <table border="2">
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Valor</td>
            <td>Cara</td>
            <td>Cruz</td>
            <td>Cotización</td>
            <td>Peso</td>
            <td>Material</td>
            <td>Lugar de acuñación</td>
            <td>Circulación</td>
            <td>Lote de Origen</td>
            <td>Año de acuñación</td>
            <td>Modificar</td>
            <td>Eliminar</td>
        </tr>
        </thead>
    </div>
    <tbody>
        <tr>
        </tr>
        <?php
        include 'conexion.php';
        $sql = "SELECT * FROM `moneda` WHERE id_moneda ORDER BY año_acuñacion ASC";
        $datos = mysqli_query($conectar, $sql);
        $registros = mysqli_num_rows($datos);
        if ($registros > 0) {
          while ($fila = mysqli_fetch_assoc($datos)) {
            echo '<tr>';
            echo '<td>' . $fila['nombre_m'] . '</td>';
            echo '<td>$' . $fila['valor'] . '</td>';
            echo '<td>' . $fila['cara'] . '</td>';
            echo '<td>' . $fila['cruz'] . '</td>';
            echo '<td>$' . $fila['cotizacion'] . '</td>';
            echo '<td>' . $fila['peso'] . '</td>';
            echo '<td>' . $fila['material'] . '</td>';
            echo '<td>' . $fila['lugar_acuñacion'] . '</td>';
            echo '<td>' . ($fila['circulacion'] == 1 ? 'Si' : 'No') . '</td>';
            echo '<td>' . $fila['lote_origen'] . '</td>';
            echo '<td>' . $fila['año_acuñacion'] . '</td>';
            echo '<td><a href="tmoneda_modificar.php?codi=' . $fila['id_moneda'] . '"> Modificar </a></td>';
            echo '<td><a href="tmoneda_eliminar.php?codig=' . $fila['id_moneda'] . '"> Eliminar </a></td>';
            echo '</tr>';

          }
        }
        ?>
      </tbody>
    </table>
    <p>
    </p>
      </div>
      <a href="tmoneda_añadir.php"> Añadir moneda</a>
<p>
      <a href="lista.php">Volver</a>






</body>

</html>