<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Rellenar Textarea</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

  <textarea id="miTextarea" rows="4" cols="50"></textarea>
  <br>
  <button onclick="rellenarTextarea()">Rellenar</button>

  <script>
    function rellenarTextarea() {
      $.ajax({
        url: 'phps/msj_a.php',
        method: 'POST',
        dataType: 'text',
        success: function(mensaje) {
          if (mensaje.length >= 20) {
            $('#miTextarea').val(mensaje);
          } else {
            alert('El mensaje requiere minimo 20 palabras :)');
          }
        },
        error: function() {
          alert('Error al realizar la solicitud AJAX.');
        }
      });
    }
  </script>

</body>
</html>

