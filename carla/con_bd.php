<?php
$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];

// Conectar a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "pruebas_c");

// Insertar los datos en la tabla "usuarios"
$sql = "INSERT INTO users(nombre, no_nomina, correo, empresa) VALUES ('$nombre', '$numero', '$correo', '$empresa')";
mysqli_query($conexion, $sql);
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
<html>
    <h1>¡Dato guardado con exito!</h1>
    <br>
    <a href="formulario_con.php"><input type="button" value="FORMULARIO"></a> 
</html>