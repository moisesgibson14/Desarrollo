<?php 
	$bd = "chat";
	$server = "localhost";
	$user = "root";
	$password = "";

	$conexion = mysqli_connect($server,$user,$password,$bd);
	if(!$conexion) die("Error de conexion".mysqli_connect_error());

	$user = $_POST['user'];
	$message = $_POST['message'];
	$fecha_hora_actual = date('Y-m-d H:i:s');

	$sql = "INSERT INTO conversation (usuario,mensaje,fechayhora) values('$user','$message','$fecha_hora_actual')";
	$result = mysqli_query($conexion, $sql);
	
	if ($result) 
		# code...
		echo "Mensaje Registrado";	
 ?>