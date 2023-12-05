<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con While en PHP</title>
</head>
<body>
<?php

$num_filas = 5;
$num_columnas =5 ;

echo '<table border="1">';
$contador_filas = 1;
while ($contador_filas <= $num_filas) {
    echo '<tr>';
    $contador_columnas = 1;
    while ($contador_columnas <= $num_columnas) {
        echo '<td>Fila ' . $contador_filas . ', Columna ' . $contador_columnas . '</td>';
        $contador_columnas++;
    }
    echo '</tr>';
    $contador_filas++;
}
echo '</table>';

?>

</body>
</html>
