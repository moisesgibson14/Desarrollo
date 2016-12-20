<?php 	
    session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){
	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
	if(!$conect) die("Error de conexion".mysqli_connect_error());

	$usuario=$_SESSION['email'];
	$message = $_POST['message'];
	$fecha = date('Y-m-d');
	$idUsuarios =$_POST['idusuario'];
	$sql = "INSERT INTO chat (nombreusuario,mensaje,fecha,Usuarios_idUsuarios) values('$usuario','$message','$fecha','$idUsuarios')";
	$result = mysqli_query($conect, $sql);
	
	if ($result) 
		# code...
		echo "Mensaje Registrado";
		}	
 ?>