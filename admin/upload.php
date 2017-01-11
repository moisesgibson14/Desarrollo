<!DOCTYPE html>
<html>
<head>
	<title>Upload User</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<label class="title">Subir Info Usuario Nuevo</label>
		<form action="uploaduser.php" method="post" class="form-inline">				
			  <div class="form-group">
			    <label for="nombre">Name</label>
			    <input type="text" class="form-control" name="nombre" required="" id="nombre" placeholder="Jane">
			  </div>
			  <div class="form-group">
			  	<label for="nombre">Apellidos</label>
			  	<input type="text" class="form-control" name="apellidos" required="" id="apellidos" placeholder="Andres Aguilar">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name="email" required="" placeholder="jane.doe@montaplast.com">
			  </div>		  
			  <div class="form-group">
			  	<label for="password" >Contraseña</label>
			  	<input type="password" class="form-control" name="password" id="password" required="">
			  </div>
			  <br>
			  <br>
			  <div class="form-group">
			  	<label class="title">Numero de Empleado</label>
			  	<input type="tel" name="idusuario" name="idusuario" class="form-control" pattern="[0-9]{9}" data-mask="999" placeholder="Three Numbers" />
			  </div>
			  <div class="form-group">
			  	<label for="foto">Foto de perfil</label>
			  	<input type="file" name="archivo" required>
			  </div>		  
			  <div class="form-group">
			  	<label for="profesion">Profesion</label>
			  	<input type="text" class="form-control" name="profesion" required="" id="profesion" placeholder="Ing. en ...">
			  </div>
			  <br><br>
			  <div class="form-group">
			  	<label for="cedula">Cedula Profesional</label>
			  	<input type="text" class="form-control" name="cedula" required="" id="cedula" placeholder="3324534">
			  </div>
			  <div class="form-group">
			  	<label for="universidad">Universidad</label>
			  	<input type="text" class="form-control" name="universidad" required="" id="universidad" placeholder="Tecnologico de Jocotitlan">
			  </div>
			  <div class="form-group">
			  	<label for="experiencia">Tiempo Experiencia</label>
			  	<input type="text" class="form-control" name="experiencia" required="" id="experiencia" placeholder="3">
			  </div>
			  <br><br>
			  <div class="form-group">
			  	<label for="estadocivil">Estado Civil</label>
			  	<input type="text" class="form-control" name="estadocivil" required="" id="estadocivil" placeholder="...">
			  </div>
			  <div class="form-group">
			  	<label for="id_departamento">id_departamento</label>
			  	<input type="text" class="form-control" name="id_departamento" required="" id="id_departamento" placeholder="..">
			  </div>
			  <div class="form-group">
			  	<label for="id_contrato">id_contrato</label>
			  	<input type="text" class="form-control" name="id_contrato" required="" id="id_contrato" placeholder="Produccion">
			  </div>
			  <div class="form-group">
			  	<label for="cargo">Cargo</label>
			  	<input type="text" class="form-control" name="cargo" required="" id="cargo" placeholder="...">
			  </div>			  
			  <div class="form-group">
			  	<label for="observaciones">Observaciones</label>
			  	<input type="text" class="form-control" name="observaciones" required="" id="observaciones" placeholder="...">
			  </div>
		</form>
	</div>	
	<script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/jquery.min.js"></script> 	
</body>
</html>