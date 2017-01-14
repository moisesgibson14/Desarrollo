<?php 	
    session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){

	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
	if(!$conect) die("Error de conexion".mysqli_connect_error());
	
	$nomemisor=$_POST['nombre'];
	$correoem=$_SESSION['email'];
	$nomusuariodos=$_POST['nombreuserdos'];	
	$correore = $_POST['correore'];
	$message =$_POST['message'];
	$fecha = date('Y-m-d');	
	$hoy = date('H:i:s');
	$usuario=$_POST['iduser'];
	$idusuariodos =$_POST['idusuario'];
	$fotoperfil =$_POST['fotoperfil'];
		
	$sql=" INSERT INTO chat(nombemisor,correoem,nombremitente,correore,mensaje,fecha,hora,Usuarios_idUsuarios,idUsuarioReceptor,fotoperfil) values('$nomemisor','$correoem','$nomusuariodos','$correore','$message','$fecha','$hoy','$usuario','$idusuariodos','$fotoperfil')";
	//$sql = "INSERT INTO post (idPost,mensaje,fecha,Usuarios_idUsuarios) values('','$mensaje','$fecha','$iduser')";
	$result = mysqli_query($conect, $sql);
	if ($result) 
		# code...
		echo "Mensaje Registrado";
	else
		echo "no se a podido registrar";
	}	
 ?>
