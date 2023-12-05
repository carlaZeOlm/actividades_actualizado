<html>
<head>
<title>Codigo para guardar</title>
</head>
<body>
<h1>
<strong>Formulario ejemplo !!!</strong></h1>
  <form action=»procesa.php» method=»post» name=»datos»>
    Nombre:<input name=»Nombre» type=»text» id=»nombre» value=»» /><br>
    Apellido Paterno:<input type=»text» name=»Paterno» id=»ap_paterno» /><br>
    Apellido Materno:<input type=»text» name=»Materno» id=»ap_materno» /><br>
    Sexo:<br>
      <input type=»radio» name=»sexo» id=»Masculino» value=»Masculino» />Masculino<br>
      <input type=»radio» name=»sexo» id=»Femenino» value=»Femenino» />Femenino<br>
      <input type=»submit» name=»ok» id=»ok» value=»Aceptar» />
  </form>
</body>
</html>

<?php
$hostname = «TUHOST»; //en mi caso es localhost
$user = «TUUSUARIO»; //en mi caso root
$pass = «TUPASSWORD»;
?>

Y por último el archivo que va insertar en la base de datos, lo llamaremos “procesa.php” y lleva el siguiente código:

<?php
//Esta linea es para incluir el archivo con las variables
    include «variables.php»  */
/* CONECTAR CON BASE DE DATOS **************** */  
   $con = mysql_connect($hostname,$user,$pass);
   if (!$con){die(‘ERROR DE CONEXION CON MYSQL: ‘ . mysql_error());}
/* ********************************************** */
/* CONECTA CON LA BASE DE DATOS  **************** */
   $database = mysql_select_db(«prueba»,$con);
   if (!$database){die(‘ERROR CONEXION CON BD: ‘.mysql_error());}
/* ********************************************** */
//REALIZAR CONSULTA
$sql = «INSERT INTO prueba1 VALUES  (NULL,'».$_POST[‘Nombre’].»‘,'»
            .$_POST[‘Paterno’].»‘,'».$_POST[‘Materno’].»‘,'».$_POST[‘sexo’].»‘)»;
                $result = mysql_query($sql);
                if (! $result){
                               echo «La consulta SQL contiene errores.».mysql_error();
                               exit();
                }else {echo «<center><font color=’RED’>DATOS INSERTADOS CORRECTAMENTE</font><a
ref=’http://registro.elarenal.com.mx/ejemplo/formulario.html’>Volver</a&gt;'»;
                }
?>