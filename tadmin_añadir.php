<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stilo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Administrador</title>
</head>
<h1 class="h1_modificar">Añadir Admin</h1>
<body class="body_form">
        <div class="contenedor_form">
            <form action="tadmin_guardar.php" method="post" class="formulario">
                    <p> 
                        <input type="number" name="txtid" class="input_form"  placeholder="Ingresa el id"  required>
                    <p> 
                        <input type= "hidden" name="txttipo" class="input_form"  value= "1"/>
                    <br>   
                        <input type="text" name="txtnom" id="nombre" class="input_form"  placeholder="Ingresa el nombre"  required>
                    <br>
                    <p> 
                    <br>
                        <input type="email" pattern=".+(?!@gmail )\.com" name="txtcorreo" class="input_form" id="email" placeholder="correo@hotmail.com" required>
                    <P>
                    <br>
                        <input type="password" name="txtcon" class="input_form"  placeholder="Ingresar la contraseña" required>
                    </p>
                    <br>
                    <br>    
        <button type="submit" class="button">Guardar</button>
        <button type="reset" class="button">Cancelar</button> <br><br>
        <a href="tabla_administradores.php" class="button">Volver</a>
            </form>
            </div>
            <p>
        <a href="tabla_administradores.php"> <button class="button">Volver</button> </a><br><br>
</body>
</html>