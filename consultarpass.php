<?php
 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
 $id_empleado=$_GET['id_empleado'];
  $sql=mysqli_query($cn,"SELECT *FROM empleados WHERE id_empleado='$id_empleado'"); 
  $row=$sql->fetch_array(MYSQL_ASSOC)
 ?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="boot/css/bootstrap.min.css" rel="stylesheet">
		<link href="boot/css/bootstrap-theme.css" rel="stylesheet">
		<script src="boot/js/jquery-3.2.1.min.js"></script>
		<script src="boot/js/bootstrap.min.js"></script>
		<script src="boot/js/jquery-3.3.1.js"></script>
	</head>
	
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Recuperar Contraseña</h3>
			</div>
			<form class="form-horizontal" method="POST"  autocomplete="off">
				
				<input type="hidden" id="id_empleado" name="id_empleado" value="<?php echo $row['id_empleado']; ?>"/>
					<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="password" name="password"  value="<?php echo $row['password']; ?>" required>
					</div>
				</div>					
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="indexpass.php" class="btn btn-primary">Regresar</a>
						
					</div>
				</div>
				
				
			</form>
		</div>
	</body>

</html>