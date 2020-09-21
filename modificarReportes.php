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
		

		<script type="text/javascript">
		$(document).ready(function(){
		$('.delete').click(function(){
			var parent=$(this).parent().attr('id_actividadmensual');
			var service=$(this).parent().attr('data');
			var dataString='id_actividadmensual='+service;

			$.ajax({
				type: "POST",
				url:"del_file.php",
				data: dataString,
				success:function(){
					location.reload();
				}
			});
		});	
		});
	</script>
	</head>
	
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REPORTES</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateReportes.php" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Actividad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad" value="<?php echo $row['actividad']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Fecha Programada</label>
					<div class="col-sm-10">
						<input type="datetime-local" class="form-control" id="fecha_programada" name="fecha_programada" placeholder="Fecha Programada" value="<?php echo $row['fecha_programada']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id_actividadmensual" name="id_actividadmensual" value="<?php echo $row['id_actividadmensual']; ?>"/>
				
			<div class="form-group">
					<label for="usuario_nivel" class="col-sm-2 control-label">Unidad de Medida</label>
					<div class="col-sm-10">
						<select class="form-control" id="unidad_medida" name="unidad_medida">
							<option value="0" <?php if ($row['unidad_medida']=='0') echo 'selected';?>>0</option>
							<option value="1" <?php if ($row['unidad_medida']=='1') echo 'selected';?>>1</option>
							<option value="2" <?php if ($row['unidad_medida']=='2') echo 'selected';?>>2</option>
							<option value="3" <?php if ($row['unidad_medida']=='3') echo 'selected';?>>3</option>
							<option value="4" <?php if ($row['unidad_medida']=='4') echo 'selected';?>>4</option>
							<option value="5" <?php if ($row['unidad_medida']=='5') echo 'selected';?>>5</option>
							<option value="6" <?php if ($row['unidad_medida']=='6') echo 'selected';?>>6</option>
							<option value="7" <?php if ($row['unidad_medida']=='7') echo 'selected';?>>7</option>
							<option value="8" <?php if ($row['unidad_medida']=='8') echo 'selected';?>>8</option>
							<option value="9" <?php if ($row['unidad_medida']=='9') echo 'selected';?>>9</option>
							<option value="10"<?php if ($row['unidad_medida']=='10') echo'selected';?>>10</option>
						</select>
					</div>
				</div>
				
			<div class="form-group">
					<label for="usuario_nivel" class="col-sm-2 control-label">Area Involucrada</label>
					<div class="col-sm-10">
						<select class="form-control" id="area_involucrada" name="area_involucrada">
							<option value="Ingenieria Informatica" <?php if ($row['area_involucrada']=='Ingenieria Informatica') echo 'selected';?>>Ingenieria Informatica</option>
							<option value="Ingenieria Civil" <?php if ($row['area_involucrada']=='Ingenieria Civil') echo 'selected';?>>Ingenieria Civil</option>
							<option value="Ingenieria I.A" <?php if ($row['area_involucrada']=='Ingenieria I.A') echo 'selected';?>>Ingenieria I.A</option>
							<option value="Ingenieria E.R" <?php if ($row['area_involucrada']=='Ingenieria E.R') echo 'selected';?>>Ingenieria E.R</option>
							<option value="Contador Publico" <?php if ($row['area_involucrada']=='Contador Publico') echo 'selected';?>>Contador Publico</option>
							<option value="Ingenieria Quimica" <?php if ($row['area_involucrada']=='Ingenieria Quimica') echo 'selected';?>>Ingenieria Quimica</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Archivo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo" accept="image/jpeg" >
						<?php
						$path="files/".$id_actividadmensual;
						if(file_exists($path))
						{
							$directorio=opendir($path);
							while($archivo=readdir($directorio))
							{
								if(!is_dir($archivo))
								{
									echo "<div data='".$path."/".$archivo.
									"'><a href='".$path."/".$archivo."'
									title='Ver Archivo Adjunto'><span
									class='glyphicon
									glyphicon-picture'></span></a>";
									echo "$archivo <a href='#'class='delete'
									title='Ver Archivo Adjunto'><span
									class='glyphicon glyphicon-trash'
									aria-hidden='true'></span></a></div>";
									echo "<img src='files/$id_actividadmensual/$archivo'width='300'/>";

								}
							}
						}
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
						
					</div>
				</div>
				
				
			</form>
		</div>
	</body>

</html>