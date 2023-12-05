<?php
$nombre = '';
$apellido ='';
$correo ='';
$genero ='';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
    <br>Nombre: <input type="text" name="nombre" id="nombre">
</br>
<br>
    Apellido: <input type="text" name="apellido" id="apellido">
</br>
<br>
    Email: <input type="text" name="correo" id="correo">
</br>
<br>
Varón: <input type="radio" name="genero" value="hombre" id="hombre">
Mujer: <input type="radio" name="genero" value="mujer" id="mujer"> 
</br>
<br>
<input type="submit" value="Enviar"> 
<input type="reset" value="Restablecer">
</form>
</br>
</body>
<?php
    echo " <br>$nombre </br>";
    echo " <br>$apellido </br>";
    echo " <br>$correo </br>";
    echo " <br>$genero </br>";
?>
</html>