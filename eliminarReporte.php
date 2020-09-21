<?php
	 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
	$id_actividadmensual = $_GET['id_actividadmensual'];
	$sqlActualizar = "DELETE  FROM actividades_mensuales WHERE id_actividadmensual='$id_actividadmensual'";
	$resultado = $cn->query($sqlActualizar);
	EliminarDir('files/'.$id_archivo);
	Function EliminarDir($carpeta)
	{
		foreach (glob($carpeta."/*") as $archivos_carpeta)
		{
			if(is_dir($archivos_carpeta))
			{
				EliminarDir($archivos_carpeta);
			}
			else
				{
unlink($archivos_carpeta);
				}
		}
		rmdir($carpeta);
	}
	
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
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/indexReportes.php">
						<?php } else { ?>
						<h3>ERROR AL ELIMINAR</h3>
					<?php } ?>
					
					
					
				</div>
			</div>
		</div>
	</body>
</html>