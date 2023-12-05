<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra</title>
</head>
<body>
    <label> Palabras </label>
    <br>Ingresa una palabra <input type="text" name="palabra" placeholder="INGRESA TEXTO" onblur="myFunction()" id="palabra"></br>
   <script>
   function myFunction() {
        let palabra = document.getElementById("palabra");
        palabra.value = palabra.value.toUpperCase();
}
</script>
</body>
</html>