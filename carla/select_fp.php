<?php

$rutaArchivo = 'opciones.txt';
$indice = $_POST['indice'];
$opciones = file($rutaArchivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$opcion = isset($opciones[$indice]) ? $opciones[$indice] : '';
echo json_encode(['opcion' => $opcion, 'indice' => $indice]);
?>


