<?php
include 'conexion.php';
$consultaBusqueda = $_POST['valorBusqueda'];
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);
$mensaje = "";
if (isset($consultaBusqueda)) {
	$consulta = mysqli_query($conect, "SELECT * FROM usuarios WHERE nombre LIKE '%$consultaBusqueda%'  OR apellidos LIKE '%$consultaBusqueda%' OR CONCAT(nombre,' ',apellidos,'') LIKE '%$consultaBusqueda%'");
	$filas = mysqli_num_rows($consulta);
	if ($filas === 0) {
		$mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
	} else {
		$arr = array();
			while($resultados = mysqli_fetch_array($consulta)) {
			$arr[] = $resultados;					
		};//Fin while $resultados2
		echo json_encode($arr);
	}; //Fin else $filas
};//Fin isset $consultaBusqueda
//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>