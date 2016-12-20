<?php
	session_start(); 
			include 'serv.php';

			if(isset($_POST['login'])){
				$usuario = $_POST['email'];
				$pw = $_POST['password'];
				$iduser = $_POST['id_empleado'];
				$log = mysqli_query($conect,"SELECT * FROM login WHERE email='$usuario' AND contrasenia='$pw' AND id_usuario='$iduser'");
				
				if (mysqli_num_rows($log)>0) {
					echo "entro";					
					$row = mysqli_fetch_array($log);
					$_SESSION["email"] = $row['email']; 		
				  	echo 'Iniciando sesión para '.$_SESSION['email'].' <p>';
					echo '<script> window.location="../user/index.php"; </script>';				

				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../index.php"; </script>';
				}
			}
		?>	