<?php
$nombre ='';
$correo ='';
$edad ='';
$mensaje ='';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$mensaje = $_POST['mensaje'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<form action="" method="POST">
    <label>Formulario</label>
    <br>Nombre: <input type="text" name="nombre" id="nombre"></br>
    <br>Correo: <input type="text" name="correo" id="correo"></br>
    <br>Edad: <input type="number" name="edad" id="edad"></br>
    <br>Mensaje: <input type="textarea" name="mensaje" id="menajes"></br>
    <input type="submit" value="Enviar"> 
</form>
</body>
<?php
echo " <br>$nombre </br>";
    echo " <br>$correo </br>";
    echo " <br>$edad </br>";
    echo " <br>$mensaje </br>";
    ?>
</html>

