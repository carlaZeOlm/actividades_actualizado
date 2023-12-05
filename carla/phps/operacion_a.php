<?php

    $num_uno = $_POST["num_uno"];
    $num_dos = $_POST["num_dos"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = $num_uno + $num_dos;
            break;

        case "resta":
            $resultado = $num_uno - $num_dos;
            break;

        case "multiplicacion":
            $resultado = $num_uno * $num_dos;
            break;

        default:
            $resultado = "Operación no válida";
            break;
    }

    echo $resultado;

?>
