<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Modificar Datos Administrador</title>
</head>
<body>
    <form action="Modificar.php" method="post" id="form">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" pattern="[A-Za-z]" placeholder="Ingrese el Nombre" required title="Ingrese únicamente letras">
        <br>
        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" placeholder="Ingrese el Correo" required>
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="pass" placeholder="Ingrese la Contraseña" required>
        <br>
        <label for="tipo">Tipo</label>
        <input type="number" id="tipo" name="tipo" placeholder="Ingrese el Tipo" required>
        <br>
        <input type="submit" value="Modificar">
    </form>
    <p class="warning" id="warning "></p>
</body>
</html>