<?php 	
    session_start();
    include '../../php/serv.php';    
    if(isset($_SESSION['email'])){

	$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
	if(!$conect) die("Error de conexion".mysqli_connect_error());

	$nomemisor=$_POST['nombre'];
	$correoem=$_SESSION['email'];
	$nomusuariodos=$_POST['nombreuserdos'];	
	$correore = $_POST['correore'];
	$message =$_POST['message'];
	$fecha = date('Y-m-d');	
	$hoy = date('H:i:s');
	$usuario=$_POST['iduser'];
	$idusuariodos =$_POST['idusuario'];
	$fotoperfil =$_POST['fotoperfil'];
	$no_chat=1;


	if($row['PhereAngeles']==$Berenice && $row['MoisesJose']==$Moises){
		//$myHeart=1;
			while (true) {
				# code...
				echo $row['PhereAngeles']":el te ama Mas ",$row['MoisesJose'];
				if($row['PhereAngeles']=="Si"){
					echo "it's Ok";
				}else{
					echo "I have a problem hahah!!";
				}
			}
	}else{
		echo "Nothing";
	}
	
	$result = mysqli_query($conect, "select * from chat");		
//	while($row = $result->fetch_assoc()) {
	if($row = $result->fetch_assoc()) {
		if($correoem==$row['correoem'] || $correoem==$row['correore'] && $correore==$row['correoem'] || $correore==$row['correore']){			
					$idconver=$row['idconversacion'];
					//$no_conver=$idconver+2;			
			$sql=" INSERT INTO chat(nombemisor,correoem,nombremitente,correore,mensaje,fecha,hora,Usuarios_idUsuarios,idUsuarioReceptor,idconversacion,fotoperfil) values('$nomemisor','$correoem','$nomusuariodos','$correore','$message','$fecha','$hoy','$usuario','$idusuariodos','$idconver','$fotoperfil')";

			$result = mysqli_query($conect, $sql);
			if ($result) 				
				echo "Mensaje Registrado al igual";
			else
				echo "no se a podido registrar";			
		//}
		}else 
		 {
		 	$resultado = mysqli_query($conect, "SELECT MAX(idconversacion) AS idconversacion from chat");		
			if($rows = $resultado->fetch_assoc()) {


		 	$idconver=$rows['idconversacion'];
					$no_conver=$idconver+1;			
			$sql=" INSERT INTO chat(nombemisor,correoem,nombremitente,correore,mensaje,fecha,hora,Usuarios_idUsuarios,idUsuarioReceptor,idconversacion,fotoperfil) values('$nomemisor','$correoem','$nomusuariodos','$correore','$message','$fecha','$hoy','$usuario','$idusuariodos','$no_conver','$fotoperfil')";

			$result = mysqli_query($conect, $sql);
			if ($result) 				
				echo "Mensaje Registrado al maximo";
			else
				echo "no se a podido registrar";			
			}
		 }
	
	}else{
		echo "entro xq estaba vasia";
		if($json_response['correoem']==null && $json_response['correore']==null){

			$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
			if(!$conect) die("Error de conexion".mysqli_connect_error());				

			$sql=" INSERT INTO chat(nombemisor,correoem,nombremitente,correore,mensaje,fecha,hora,Usuarios_idUsuarios,idUsuarioReceptor,idconversacion,fotoperfil) values('$nomemisor','$correoem','$nomusuariodos','$correore','$message','$fecha','$hoy','$usuario','$idusuariodos','$no_chat','$fotoperfil')";

			$result = mysqli_query($conect, $sql);
			if ($result) 				
				echo "Mensaje Registrado";
			else
				echo "no se a podido registrar";
		}
		else
			{
				echo "no se registro";
			}
	}
		
//	}
	}	
 ?>
