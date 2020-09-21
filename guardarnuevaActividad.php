<?php
require 'conexion2.php';
 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
 $actividad=$_POST['actividad'];
	$unidad_medida =isset($_POST['unidad_medida']) ? $_POST['unidad_medida'] : 0;	
$area_involucrada = isset($_POST['area_involucrada']) ? $_POST['area_involucrada'] : 0;	
$sql = "INSERT INTO actividades_mensuales (actividad, unidad_medida, area_involucrada) VALUES ('$actividad','$unidad_medida', '$area_involucrada')";
	$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="boot/css/bootstrap.min.css" rel="stylesheet">
		<link href="boot/css/bootstrap-theme.css" rel="stylesheet">
		<script src="boot/js/jquery-3.1.1.min.js"></script>
		<script src="boot/js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/Usuario.php">
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="indexReportes.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
</html>