<?php
	session_start(); 
	include 'serv.php';
		if(isset($_SESSION['email'])){				

			$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
			if(!$conect) die("Error de conexion".mysqli_connect_error());
				echo "entro";
				$mensaje = $_POST['mensaje'];
				$fecha = date('Y-m-d');
				$iduser = $_POST['idusuario'];
				echo "asta aqui bn";

				$sql = "INSERT INTO post (idPost,mensaje,fecha,Usuarios_idUsuarios) values('','$mensaje','$fecha','$iduser')";
					$result = mysqli_query($conect, $sql);	
						if ($result) 
							# code...
							echo "Mensaje Registrado";
							header('Location: ../user/index.php');						
		}
?>	