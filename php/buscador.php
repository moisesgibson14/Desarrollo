<?php 

	session_start();
    include 'serv.php';    
    if(isset($_SESSION['email'])){

	sleep(1);

	$search = '';
	if (isset($_POST['search'])){
		$search = strtolower($_POST['search']);
	}

	$consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%".$search."%' OR apellidos LIKE '%".$search."%' ORDER BY idUsuarios DESC";
	$resultado = $conect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
	?>
	<?php if ($total>0 && $search!='') { ?>
	<h6>Resultados de la búsqueda</h6>
	<?php do { ?>
			<span class="titulo" ><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['nombre'])) ?></span><br>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } 
elseif($total>0 && $search==''){}
else echo '<h6 align="center">No se han encontrado resultados</h6>';
	}
?>


 
