<?php 
	session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){		    		
		$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
		if(!$conect) die("Error de conexion".mysqli_connect_error());		
		$usuario=$_SESSION['email'];
		$usertwo="berenice@montaplast.com";
		//$usertree="gerardo"
		$result = mysqli_query($conect,"SELECT *  FROM chat where idconversacion='1' order by idchat asc");				
		//$pw = "santiagojose";
		//		$pass=hash('SHA256',$pw);		
		//		echo "$pass";
		$arr = array();
		while($row = $result->fetch_assoc()) {		
				
			echo "<img width='20' src=../".$row['fotoperfil']."> <b>".$row["nombemisor"]."</b><br><b> dice:</b> ".$row["mensaje"]."</p>";					
				
				
			}
			//else 
			

		}			
	
	
 ?>