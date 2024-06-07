<?php
$id = $_GET['codig'];

include 'conexion.php';
$sql = "DELETE from moneda where id_moneda = $id";
$result = mysqli_query ($conectar, $sql);

if ($result){
echo '<script>alert("La moneda se elimino correctamente"); window.location="tabla_monedas.php";</script>';
}else{
echo '<script>alert("Error: la moneda no se elimino correctamente");history.go(-1);</script>';
}


?>