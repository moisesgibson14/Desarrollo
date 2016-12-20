<?php 
	session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){

	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
	if(!$conect) die("Error de conexion".mysqli_connect_error());

	$sql = "SELECT nombreusuario, mensaje, fecha  FROM chat order by idchat asc";
	$result = mysqli_query($conect,$sql);

	while($data = mysqli_fetch_assoc($result)){
		echo "<p title=".$data["fecha"]."><b>".$data["nombreusuario"]."</b> dice: ".$data["mensaje"]."</p>";
		}

	if($_POST){
		$elige = $_POST['elige'];		
	}else{
		$data = json_decode(file_get_contents('php://input'),true);
		$elige =$data['elige'];
	}
	if($elige == "userchat"){		
		$id=$data['idUsuarios'];		
		$idUsuarios=array('idUsuarios'=>$id);
		$usuario=$_SESSION['email'];
		$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
		if(!$conect) die("Error de conexion".mysqli_connect_error());
		
		$sql = "SELECT nombreusuario, mensaje, fecha  FROM chat order by idchat asc where Usuarios_idUsuarios='$idUsuarios' and Usuarios_idUsuarios='$usuario'";		
		$result = mysqli_query($conect,$sql);
		while($data = mysqli_fetch_assoc($result)){
			echo "<p title=".$data["fecha"]."><b>".$data["nombreusuario"]."</b> dice: ".$data["mensaje"]."</p>";
		}	
	}
}
 ?>