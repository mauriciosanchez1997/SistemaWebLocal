<?php
	 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
	   $sql=mysqli_query($cn,"SELECT *FROM empleados WHERE id_empleado='$id_empleado'"); 
	$id_empleado = $_GET['id_empleado'];
	$sqlActualizar = "DELETE  FROM empleados WHERE id_empleado='$id_empleado'";
	$resultado = $cn->query($sqlActualizar);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO ELIMINADO</h3>
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/index2.php">
						<?php } else { ?>
						<h3>ERROR AL ELIMINAR</h3>
					<?php } ?>
					
					
					
				</div>
			</div>
		</div>
	</body>
</html>