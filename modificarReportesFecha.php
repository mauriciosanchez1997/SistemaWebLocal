<?php
 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
 $id_actividadmensual=$_GET['id_actividadmensual'];
  $sql=mysqli_query($cn,"SELECT *FROM actividades_mensuales WHERE id_actividadmensual='$id_actividadmensual'"); 
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
				<h3 style="text-align:center">Concluir Fecha</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateReportesFecha.php" enctype="multipart/form-data" autocomplete="off">
				
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Fecha Realizada</label>
					<div class="col-sm-10">
						<input type="datetime-local" class="form-control" id="fecha_realizada" name="fecha_realizada" placeholder="Fecha Realizada" value="<?php echo $row['fecha_realizada']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id_actividadmensual" name="id_actividadmensual" value="<?php echo $row['id_actividadmensual']; ?>"/>					
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
						
					</div>
				</div>
				
				
			</form>
		</div>
	</body>

</html>