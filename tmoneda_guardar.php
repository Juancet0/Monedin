<?php
// Directorios de destino para las imágenes
$directorioDestinocara = "D:\\xampp\\htdocs\\Monedin\\Imagenes\\cara\\";
$directorioDestinocruz = "D:\\xampp\\htdocs\\Monedin\\Imagenes\\cruz\\";

// Variables para almacenar los nombres de archivo de cara y cruz
$archivoDestinocara = '';
$archivoDestinocruz = '';

// Archivo de cara
if (isset($_FILES["txtcara"]) && $_FILES["txtcara"]["error"] == UPLOAD_ERR_OK) {
    $archivoDestinocara = $directorioDestinocara . basename($_FILES["txtcara"]["name"]);
    if (move_uploaded_file($_FILES["txtcara"]["tmp_name"], $archivoDestinocara)) {
        echo "La imagen de la cara ha sido subida correctamente.<br>";
    } else {
        echo '<script> alert("Hubo un error al subir la imagen de la cara.");</script>';
    }
} else {
    echo '<script> alert("Error al subir la imagen de la cara.");</script>';
}

// Archivo de cruz
if (isset($_FILES["txtcruz"]) && $_FILES["txtcruz"]["error"] == UPLOAD_ERR_OK) {
    $archivoDestinocruz = $directorioDestinocruz . basename($_FILES["txtcruz"]["name"]);
    if (move_uploaded_file($_FILES["txtcruz"]["tmp_name"], $archivoDestinocruz)) {
        echo "La imagen de la cruz ha sido subida correctamente.<br>";
    } else {
        echo '<script> alert("Hubo un error al subir la imagen de la cruz.");</script>';
    }
} else {
    echo '<script> alert("Error al subir la imagen de la cruz.");</script>';
}

$id = $_POST['txtid'];
$nom = $_POST['txtnom'];
$valor = $_POST['txtvalor'];
$coti = $_POST['txtcoti'];
$peso = isset($_POST['txtpeso']) ? $_POST['txtpeso'] : '';
$material = $_POST['txtmate'];
$lugar = $_POST['txtlugar'];
$cir = $_POST['txtcir'];
$lote = $_POST['txtlote'];
$año = $_POST['txtaño'];



include "conexion.php";
$sql = "SELECT * FROM moneda WHERE id_moneda ='$id'";
$res = mysqli_query($conectar, $sql);
$nro_reg = mysqli_num_rows($res);

if ($nro_reg > 0) {
    echo '<script> alert ("La moneda ya existe!!!"); history.go(-1); </script>';
    mysqli_close($conectar);
    exit;
}

$sql_insert = "INSERT INTO moneda(id_moneda, nombre_m, valor, cara, cruz, cotizacion, peso, material, lugar_acuñacion, circulacion, lote_origen, año_acuñacion) VALUES ('$id', '$nom', '$valor', '$archivoDestinocara', '$archivoDestinocruz', '$coti', '$peso', '$material', '$lugar', '$cir', '$lote', '$año')";
$res_insert = mysqli_query($conectar, $sql_insert);

if ($res_insert) {
    echo '<script> alert ("La moneda se guardó correctamente.");  window.location="tabla_monedas.php"; </script>';
} else {
    echo '<script> alert ("Error al guardar la moneda.");</script>';
}

mysqli_close($conectar);
?>
