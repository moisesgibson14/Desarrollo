<?php 
session_start();
    include 'serv.php';    
    if(isset($_SESSION['email'])){
    	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
			if(!$conect) die("Error de conexion".mysqli_connect_error());
	    	$data=json_decode(file_get_contents("php://input"));
	    	$tamano_archivo = $_FILES['archivo']['size'];
	  		$archivo=$_FILES["archivo"] ["tmp_name"];
	  		$nombre=$_FILES["archivo"] ["name"];
	  		$destino="../user/documentos/".$_FILES["archivo"] ["name"];
	  		move_uploaded_file($archivo, $destino);
	  		$nombredoc =$_POST['nombredoc'];
	  		$iduserpro = $_POST['idusuario'];
	  		$email = $_POST['email'];
	  		$fecha = date('Y-m-d');
	  		$sql = "INSERT INTO documentos (id_documento,nomdocumento,archivo,fecha,correo,Usuarios_idUsuarios) values('','$nombredoc','$destino','$fecha','$email','$iduserpro')";
				$result = mysqli_query($conect, $sql);	
					if ($result) 
						# code...
						echo "Mensaje Registrado";
						header('Location: ../user/documentos.php');						
    }

 ?>