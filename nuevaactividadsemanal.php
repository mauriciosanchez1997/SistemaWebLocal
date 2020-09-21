<?php
 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
$id_actividadmensual= $_GET['id_actividadmensual'];
  $sql=mysqli_query($cn,"SELECT *FROM actividades_mensuales WHERE id_actividadmensual='$id_actividadmensual'"); 
  $row=$sql->fetch_array(MYSQL_ASSOC)
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
				<h3 style="text-align:center">Actividad 1</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarActividadSemanal.php" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group" id="formagr">
					<label for="nombre" class="col-sm-2 control-label">Actividad </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividad_planeada" name="actividad_planeada" placeholder="Actividad Planeada" required>
					</div>
				</div>
			<input type="hidden" id="id_actividadmensual" name="id_actividadmensual" value="<?php echo $row['id_actividadmensual']; ?>"/>
				
				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Unidad de Medida Programada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="unidad_medida_programada" name="unidad_medida_programada" placeholder="Unidad de Medida Programada" required>
					</div>
				</div>

				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Cantidad Planeada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad_planeada" name="cantidad_planeada" placeholder="Cantidad Planeada" required>
					</div>
				</div>
					<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Evidencia</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo" accept="image/jpeg">
					</div>
				</div>
               <h3 style="text-align:center">Actividad 2</h3>
				
					<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Actividad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividad_planeada2" name="actividad_planeada2" placeholder="Actividad Planeada2" required>
					</div>
				</div>
			
				
				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Unidad de Medida Programada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="unidad_medida_programada2" name="unidad_medida_programada2" placeholder="Unidad de Medida Programada" required>
					</div>
				</div>

				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Cantidad Planeada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad_planeada2" name="cantidad_planeada2" placeholder="Cantidad Planeada" required>
					</div>
				</div>
					<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Evidencia</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo2" name="archivo2" accept="image/jpeg">
					</div>
				</div>
				<h3 style="text-align:center">Actividad 3</h3>
					<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Actividad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividad_planeada3" name="actividad_planeada3" placeholder="Actividad Planeada" required>
					</div>
				</div>
			
				
				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Unidad de Medida Programada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="unidad_medida_programada3" name="unidad_medida_programada3" placeholder="Unidad de Medida Programada" required>
					</div>
				</div>

				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Cantidad Planeada</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad_planeada3" name="cantidad_planeada3" placeholder="Cantidad Planeada" required>
					</div>
				</div>
					<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Evidencia</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo3" name="archivo3" accept="image/jpeg">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<button type="submit" class="btn btn-primary">Agregar</button>
						
					</div>
				</div>
				<button type="submit" id="Agregarmas" class="btn btn-primary">Eliminar</button>
				 <script type="text/javascript" src="js/jquery.js "></script>
          <script >
             	function f()
             	{
             		document.getElementById('actividad').value="";
             		document.getElementById('unidad_medida').value="";
             		document.getElementById('area_involucrada').value="";
             	}
             $("#Agregarmas").click(function()
               {
      
         $("#formagr").append("<tr id='C"+contador+"'><td><input type='text' name='otro"+contador+"' value='z"+contador+"'></td><td><input type='text' id='nombre"+contador+"'></td><td><input type='text' id='apellidos"+contador+"'></td><td><input type='text' id='edad"+contador+"'></td><td><select id='genero"+contador+"'><option value=''>seleccione genero</option><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option></select></td></tr>");
      contador++;
     });  
   
             </script>
			</form>
		</div>

	</body>

</html>