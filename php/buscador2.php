<?php 
$conect = @mysqli_connect("localhost","root","","mibase") or die("No se encontró el servidor");
if(isset($_POST['string'])){
	$s = $_POST['string'];	
	$result = mysqli_query($conect, "select * from usuarios where nombre like '%$s%' || apellidos like '%$s%' || CONCAT(nombre, ' ',apellidos) like '%$s%' order by idUsuarios limit 5");

	if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_object($result)){?>
	<a target="_blank" href="http://www.facebook.com/<?php echo $row->nombre;?>" onclick="fillme('<?php echo $row->apellidos." ".$row->nombre;?>');">
		<div class="user_div" style="border-color: black;">
			<img  src="<?php echo $row->fotoperfil;?>" style="border-radius:5px;float:left; width: 20px;">
			<div class="name"><h5><?php echo $row->nombre?> <?php echo $row->apellidos;?></h5></div><br>
		</div>
	</a>
	<?php }
	}else{?>
	<div class="no_data">No Result Found !</div>
	<?php }
}
?>
