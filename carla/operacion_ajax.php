<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operación con Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <label>Calculadora</label>
    <table>
        <tr>
            <td><input type="number" name="numero_uno" id="num_uno"></td>
        </tr>
        <tr>
            <td><input type="number" name="numero_dos" id="num_dos"></td>
        </tr>
    </table>
    <input type="button" onclick="realizarOperacion('suma')" value="Sumar">
    <input type="button" onclick="realizarOperacion('resta')" value="Restar">
    <input type="button" onclick="realizarOperacion('multiplicacion')" value="Multiplicar">
    <br>

    <script>
        function realizarOperacion(operacion) {
            var num_uno = document.getElementById('num_uno').value;
            var num_dos = document.getElementById('num_dos').value;

            $.ajax({
                method: "POST",
                url: "phps/operacion_a.php",
                data: { num_uno: num_uno, num_dos: num_dos, operacion: operacion },
            }).done(function (resultado) {
                alert("El resultado de la " + operacion + " es: " + resultado);
            });
        }
    </script>
</body>
</html>
