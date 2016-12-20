<?php
$data=json_decode(file_get_contents("php://input"));
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="perfilpersonal";
$db_connection = mysql_connect($db_host, $db_user, $db_password);
    if (!$db_connection) {
       die('No se ha podido conectar a la base de datos');
     }


  $nom = $_POST["nom"];
  $apellidos = $_POST["apellidos"];
  $profesion = $_POST["profesion"];
  $cedula = $_POST["cedula"];
  $telefono = $_POST["telefono"];
  $direccion = $_POST["direccion"];
  $latitud = $_POST["latitud"];
  $longitud = $_POST["longitud"];
  $descripcion = $_POST["descripcion"];
  $correo = $_POST["correo"];
  $empresa = $_POST["empresa"];

  $tamano_archivo = $_FILES['archivo']['size'];
  $archivo=$_FILES["archivo"] ["tmp_name"];
  $nombre=$_FILES["archivo"] ["name"];
  $destino="image/".$_FILES["archivo"] ["name"];
  move_uploaded_file($archivo, $destino);
  echo "$destino";

  $insertar = "INSERT INTO personal (nombre,apellidos,foto,profesion,cedulapro,telefono,direccion,latitud,longitud,descripcion,correo,empresa) values ('$nom','$apellidos','$destino','$profesion','$cedula','$telefono','$direccion','$latitud','$longitud','$descripcion','$correo','$empresa')";

  mysql_select_db($db_name, $db_connection);
  $retry_value = mysql_query($insertar, $db_connection);
  if (!$retry_value) {
     die('Error: ' . mysql_error());

   }
  	echo "Correctamente";
    header('Location: ../subir.php');
    mysql_close($db_connection);

  ?>
