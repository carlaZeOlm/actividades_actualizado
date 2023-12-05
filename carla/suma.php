<?php 
$numero_uno="";
$numero_dos="";
$resultado="";

$numero_uno= $_POST['numero_uno'];
$numero_dos= $_POST['numero_dos'];
$resultado= $numero_uno + $numero_dos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMA</title>
</head>
<body>
    <form action="" method="POST">
    <label>suma</label>
    <table>
        <tr>
           <td><input type="number" name="numero_uno" id="num_uno"></td>
        </tr>
        <tr>
            <td><input type="number" name="numero_dos" id="num_dos"></td>
        </tr>
    </table>

    <input type="submit" value="sumar">
<br>
    <? echo "El resultado de $numero_uno y $numero_dos es: $resultado"; ?>
</br>

</form>
</body>
</html>
