<?php
	session_start(); 
			include 'serv.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['email'];
				$pw = $_POST['password'];
				$iduser = $_POST['id_empleado'];
				$log = mysql_query("SELECT * FROM admin WHERE user='$usuario' AND pw='$pw'");
				if (mysql_num_rows($log)>0) {
					echo "entro";					
					$row = mysql_fetch_array($log);
					$_SESSION["user"] = $row['user']; 		
				  	echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
					echo '<script> window.location="../../user/index.php"; </script>';				

				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../../index.php"; </script>';
				}
			}
		?>	