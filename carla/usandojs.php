<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usando JS</title>
</head>
<body>

<form id="miFormulario">
    <label for="frutas">Frutas:</label>
    <select id="frutas" name="frutas">
        <option value="1">Mango</option>
        <option value="2">Sandia</option>
        <option value="3">Fresa</option>
    </select>

    <label for="nombres">Nombres Propios:</label>
    <select id="nombres" name="nombres">
        <option value="4">Santiago</option>
        <option value="5">Carla</option>
        <option value="6">Isaac</option>
    </select>

    <label for="colores">Colores:</label>
    <select id="colores" name="colores">
        <option value="7">Rojo</option>
        <option value="8">Verde</option>
        <option value="9">Azul</option>
    </select>

    <button type="button" onclick="mostrarSeleccion()">Enviar</button>
</form>

<script>
    function mostrarSeleccion() {
        var frutas = document.getElementById("frutas");
        var nombres = document.getElementById("nombres");
        var colores = document.getElementById("colores");

        console.log("Option de frutas: value=" + frutas.value + " texto del select: " + frutas.options[frutas.selectedIndex].text);
        console.log("Option de nombres: value=" + nombres.value + " texto del select: " + nombres.options[nombres.selectedIndex].text);
        console.log("Option de colores: value=" + colores.value + " texto del select: " + colores.options[colores.selectedIndex].text);
    }
</script>

</body>
</html>
