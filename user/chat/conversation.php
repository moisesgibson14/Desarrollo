<?php 
	$bd = "chat";
	$server = "localhost";
	$user = "root";
	$password = "";

$conexion = mysqli_connect($server,$user,$password,$bd);
	if(!$conexion) die("Error de conexion".mysqli_connect_error());

	$sql = "SELECT usuario, mensaje, fechayhora  FROM conversation order by idConversation asc";
	$result = mysqli_query($conexion,$sql);

	while($data = mysqli_fetch_assoc($result)){
		echo "<p title=".$data["fechayhora"]."><b>".$data["usuario"]."</b> dice: ".$data["mensaje"]." <time>".$data["fechayhora"]." </time></p>";
	}
 ?>