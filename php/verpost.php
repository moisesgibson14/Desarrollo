<?php
    session_start();
    include 'serv.php';    
    if(isset($_SESSION['email'])){
    //echo '<script> window.location="../../user/index.php"; </script>';
    	//$_SESSION['user'];
    	$usuario=$_SESSION['email'];
		//echo json_encode($usuario);
		
		$result = mysqli_query($conect, "select * from usuarios,login,departamento,post where usuarios.idUsuarios=login.Usuarios_idUsuarios && usuarios.idUsuarios=departamento.Usuarios_idUsuarios && usuarios.idUsuarios=post.Usuarios_idUsuarios  order by idPost desc");
		$arr = array();
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
		# JSON-encode the response
		echo $json_response = json_encode($arr);
		
	}	
	?>