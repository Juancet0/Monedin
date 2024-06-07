<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Monedas</title>

<script>
    function mostrarPrevisualizacion(input, imagenPrevisualizacionId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                var imagenPrevisualizacion = document.getElementById(imagenPrevisualizacionId);
                imagenPrevisualizacion.innerHTML = '<img src="' + e.target.result + '" width="200" />';
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</head>
<body>
<form action="tmoneda_guardar.php" method="post" enctype="multipart/form-data">
    
    <h1>Añadir Moneda</h1><p> 

    <input type= "hidden" name= "txtid">
            <br>
            <label for="txtnom">Nombre: </label>
        <input type="text" name="txtnom"  placeholder="Ingresar el nombre"  required>
        <P>
            <br>
        <label for="txtvalor">Valor: $</label>
        <input type="number" name="txtvalor"  placeholder="Ingresar el valor que tiene moneda" required>
        <P>
            <br>
            <label for="txtcara">Cara: </label>
        <input type="file" name="txtcara" accept="image/*"  onchange="mostrarPrevisualizacion(this, 'imagen-previsualizacion-cara');" required>
        <div id='imagen-previsualizacion-cara'></div>
         <p>
            <br> 
            <label for="txtcruz">Cruz: </label>
        <input type="file" name="txtcruz" accept="image/*"  onchange="mostrarPrevisualizacion(this, 'imagen-previsualizacion-cruz');" required>
        <div id='imagen-previsualizacion-cruz'></div>
         <p>
            <br> 
            <label for="txtcoti">Cotización: $</label>
        <input type="number" name="txtcoti"  placeholder="Ingresar la cotizacion en el mercado de la moneda" required>
        <P>
            <br>
            <label for="txtpeso">Peso: </label>
        <input type="number" name="txtcoti"  placeholder="Ingresar el peso de moneda" required>g
        <P>
            <br>
            <label for="txtmate">Material: </label>
        <select name="txtmate" required>
        <option value="Cobre">Cobre</option> 
        <option value="Aluminio">Aluminio</option>
        <option value="Níquel">Níquel</option>
        <option value="Zinc">Zinc</option> 
        <option value="Bronce-Aluminio">Bronce-Aluminio</option>
        <option value="Acero Inoxidable">Acero Inoxidable</option>
        <option value="Acero con baño de cobre">Acero con baño de cobre</option>
        <option value="Acero con baño de níquel">Acero con baño de níquel</option>  
        <option value="Níquel Latón">Niquel Latón</option>
        <option value="Cobre-Zinc">Cobre-Zinc</option>
        <option value="Cuproníquel">Cuproníquel</option> 
 



    </select>
        <p>
            <br>
            <label for="txtlugar">Lugar de acuñación: </label>
        <input type="text" name="txtlugar"  placeholder="Ingresar el lugar que se fabrico la moneda" required>
        <p>
            <br>
            <label for="txtcir">Circulación: </label>
    <select name="txtcir" required>
    <option value="1">Si</option>
    <option value="0">No</option>
    </select>
        <p>
            <br>
            <label for="txtlote">Lote de origen: </label>
        <input type="text" name="txtlote"  placeholder="Ingresar lote de origen" required>
        <p>
            <br>
            <label for="txtaño">Año de acuñación: </label>
        <input type="text" name="txtaño"  placeholder="Ingresar el año de la moneda" required>
          <p><br><br><br>
          
       <button type="submit" class="button" >Guardar</button>
<button type="reset" class="button">Cancelar</button> <br><br>
</form>
<p>
<a href="tabla_monedas.php"> <button class="button">Volver</button> </a><br><br>
</div>
</body>
</html>