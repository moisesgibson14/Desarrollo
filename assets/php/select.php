<?php
    session_start();
    include 'serv.php';
    if(isset($_SESSION['user'])){
    //echo '<script> window.location="../../user/index.php"; </script>';
    	//$_SESSION['user'];
    	$usuario=$_SESSION['user'];
		//echo json_encode($usuario);
		$connect = mysqli_connect("localhost", "root", "", "registro");
		$result = mysqli_query($connect, "select * from admin,proyectos where user='$usuario' && usuariopro='$usuario'");
		$arr = array();
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
		# JSON-encode the response
		echo $json_response = json_encode($arr);

			if($_POST){
			$elige = $_POST['elige'];
			//$id_legislatura=$_POST['id_legislatura'];
			}else{
				$data = json_decode(file_get_contents('php://input'),true);
				$elige =$data['elige'];
			}
	
			if($elige == "obtenertablas"){		
				$connect = mysqli_connect("localhost", "root", "", "registro");
				$result = mysqli_query($connect, "select user,nombreusuario,nombreproyecto,descripcion,usuariopro from admin,proyectos where user='$usuario' && usuariopro='$usuario'");
				$arr = array();
				while($row = $result->fetch_assoc()) {
					$arr[] = $row;
				}
				# JSON-encode the response
				echo $json_response = json_encode($arr);
			}
		
		}

	?>
	
