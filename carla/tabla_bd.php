<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pruebas_c";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
</head>
<body>
    <h2>Datos de la tabla</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Numero de nomina</th>
            <th>Correo</th>
            <th>Empresa</th>
        </tr>
        <?php
        // Mostrar datos en la tabla
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["no_nomina"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "<td>" . $row["empresa"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay datos en la tabla</td></tr>";
        }
        ?>
    </table>
    <?php
    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>