<?php
    session_start();
    include 'serv.php';    
    if(isset($_SESSION['email'])){
    //echo '<script> window.location="../../user/index.php"; </script>';
    	//$_SESSION['user'];
    	$usuario=$_SESSION['email'];
		//echo json_encode($usuario);
		$connect = mysqli_connect("localhost", "root", "", "mibase");
		$result = mysqli_query($connect, "select * from login,usuarios,departamento,userpersonal,contrato where login.email='$usuario' and login.id_usuario=usuarios.idUsuarios and usuarios.idUsuarios=departamento.Usuarios_idUsuarios and usuarios.idUsuarios=userpersonal.Usuarios_idUsuarios and usuarios.idUsuarios=contrato.Usuarios_idUsuarios");
		$arr = array();
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
		# JSON-encode the response
		echo $json_response = json_encode($arr);
		
	}			
	?>
	
