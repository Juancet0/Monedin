<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Modificar moneda</title>
</head>
<h1 class="h1_modificar">Modificar Usuarios</h1><br>
<body class="body_form">
<?php
    include 'conexion.php';
    $codi=$_GET['codi'];
    $sql ="select * from usuario where id_usuario = '$codi'";
    $data = mysqli_query($conectar, $sql);
    $fila =  mysqli_fetch_array($data);
?> 
<div class="contenedor_form">
<form action="tadmin_actualizar.php" method="post" class="formulario">
    <br>   
    <input type= "hidden" class="input_form" name="txtid"  value= "<?php echo $codi; ?>"/>
    <br>  
        <input type="text" class="input_form" name="txtnom" id="nombre" pattern="[a-zA-Z]+" tittle="Ingrese solo Letras" placeholder="Nombre" value="<?php echo $fila ['nombre_usuario']; ?>" required  />
        <br>
        <br>
        <br>
        <input type="email" class="input_form" name="txtcorreo" id="email" pattern=".+(?!mail)\.com" placeholder="Correo" value="<?php echo $fila ['correo']; ?>" required />
        <br>
        <br>
        <br> 
        <input type="password" class="input_form" name="txtcon" placeholder="Contraseña" value="<?php echo $fila ['contraseña']; ?>" required />
   <br>    
    <input type="hidden" name="txttipo" value="<?php echo $fila ['id_tusuario']?>">
   <br>
   <button type="submit" class="button">Actualizar</button>
<button type="reset" class="button">Cancelar</button> <br><br>
<a href="tabla_administradores.php" class="button">Volver</a>
</form>
</div>
<a href="tabla_administradores.php" >Volver</a><br><br>
</body>
</html>