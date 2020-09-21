
	<?php
	 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
	   $sql=mysqli_query($cn,"SELECT *FROM actividades_mensuales"); 
	$id_actividadmensual = $_POST['id_actividadmensual'];
	$fecha_realizada = $_POST['fecha_realizada'];
	
	$sqlActualizar = "UPDATE actividades_mensuales SET fecha_realizada='$fecha_realizada' WHERE id_actividadmensual='$id_actividadmensual'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/indexReportes.php">
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					
					
				</div>
			</div>
		</div>
	</body>
</html>