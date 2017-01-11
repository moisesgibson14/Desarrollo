<?php 
	session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){		
    	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
		if(!$conect) die("Error de conexion".mysqli_connect_error());	
    
		$data = json_decode(file_get_contents('php://input'),true);
		//$elige =$data['elige'];
	
		$id=$data['userActual'];
		echo "el id es",$id;
		$usuario=$_SESSION['email'];

		
		
		$result = mysqli_query($conect,"SELECT *  FROM chat where idUsuarioReceptor='$id' order by idchat asc");				
		
		$arr = array();
		while($row = $result->fetch_assoc()) {
			
				echo "<p title=".$row["fecha"]."><b>".$row["nombemisor"]."</b> dice: ".$row["mensaje"]."</p>";					
				//$arr[] = $row;
			echo "	entro al while";
			//echo "<p title=".$row["fecha"]."><b>".$row["nombremitente"]."</b> dice: ".$row["mensaje"]."</p>";
			//$arr[]=$row;
				//echo "string";
		}	
		echo"", $json_response = json_encode($arr);	

	


		# JSON-encode the response
		

		//while($data = mysqli_fetch_assoc($result)){
		//	echo "<p title=".$data["fecha"]."><b>".$data["nombreusuario"]."</b> dice: ".$data["mensaje"]."</p>";		//}	        
		
	}
	
 ?>