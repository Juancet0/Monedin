<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stilo.css">
    <title>Administrador</title>
</head>
<body>
<div class="contenedor">
    <div class="Sesion">
<form action="tadmin_guardar.php" method="post" class="formulario_añadir">
    
    <h1>Añadir Admin</h1><p> 

    <label for="txtid">ID: </label>
        <input type="number" name="txtid"   placeholder="Ingresa el id"  required>
        <p> 
        <input type= "hidden" name= "txttipo"  value= "1"/>
        <br>   
        <label for="txtnom">Nombre: </label>
        <input type="text" name="txtnom" id="nombre"  placeholder="Ingresa el nombre"  required>
        <br>
        <p> 
            <br>
        <label for="txtcorreo">Correo: </label>
        <input type="email" pattern=".+(?!@gmail )\.com" name="txtcorreo" id="email" placeholder="correo@hotmail.com" required>
        <P>
            <br>
        <label for="txtcon">Contraseña: </label>
        <input type="password" name="txtcon"  placeholder="Ingresar la contraseña" required>
        </p>
       <br>
       <br>    
       </div>
       <button type="submit" class="button">Guardar</button>
<button type="reset" class="button">Cancelar</button> <br><br>
</form>
<p>
<a href="tabla_administradores.php"> <button class="button">Volver</button> </a><br><br>
</div>
</body>
</html>