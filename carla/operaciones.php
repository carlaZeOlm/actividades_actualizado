<?php 
$numero_uno = '';
$numero_dos = '';

$numero_uno = $_POST['numero_uno'];
$numero_dos = $_POST['numero_dos'];
$suma = $_POST['suma'];
$resta = $_POST['resta'];
$multiplica = $_POST['multiplica'];

//SUMA
if (isset($suma)) {
    $resultado = $numero_uno + $numero_dos;
    
} 
//RESTA
elseif (isset($resta)) {
    $resultado = $numero_uno - $numero_dos;
    
} 
//MULTIPLICACION
elseif (isset($multiplica)) {
    $resultado = $numero_uno * $numero_dos;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMA-RESTA-MULTIPLICACION</title>
</head>
<body>
    <form action="" method="POST">
    <label>calculadora</label>
    <table>
        <tr>
           <td><input type="number" name="numero_uno" id="num_uno"></td>
        </tr>
        <tr>
            <td><input type="number" name="numero_dos" id="num_dos"></td>
        </tr>
    </table>
    <input type="submit" name="suma" value="sumar" id="sum">
    <input type="submit" name="resta" value="restar" id="rest">
    <input type="submit" name="multiplica" value="multiplicar" id="mult">
    </br>
    <? echo "el resultado es: $resultado"?>
</form>
</body>
</html>

