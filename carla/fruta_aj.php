<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>
<body>
    <label>fruta</label>
    <select id="frutas" name="frutas">
    <option value="1">Fresa</option>
    </select>
    <button onclick="rellenaropcion()">RELLENAR</button>
<script>
    var fruta= 0;

    function rellenaropcion() {
        fruta++;
     //   alert(fruta);
        $.ajax({
            type:"POST",
            url:"frutas_a.php",
            data: { fruta: fruta },
            success: function (frutas) {
                if (frutas !=="") {
                    document.getElementById("frutas").innerHTML+="<option value="+fruta + ">" + frutas + "</option>"
                } else {
                    alert("¡Lo siento ya no hay frutas disponibles!");
                }
                    
              
                //$('#frutas').append("<option value='"+fruta+"'> "+frutas+" </option>");
                //document.getElementById("frutas").appendChild("<option value='"+fruta+"'> "+frutas+" </option>")
            },
            error:function(error){
                alert(error);
            }
        });   
    }  
</script>
</body>

</html>