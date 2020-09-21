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
				<h3 style="text-align:center">NUEVA ACTIVIDAD</h3>
			</div>
					<form class="form-horizontal" method="POST" action="guardarnuevaActividad.php" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">actividad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Unidad de Medida</label>
					<div class="col-sm-10"> 
						<select class="form-control" id="unidad_medida" name="unidad_medida">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>

						</select>
					</div>
				</div>
					<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Area Involucrada</label>
					<div class="col-sm-10">
						<select class="form-control" id="area_involucrada" name="area_involucrada">
							<option value="Ingenieria Informatica">Ingenieria Informatica</option>
							<option value="Ingenieria Civil">Ingenieria Civil</option>
							<option value="Ingenieria I.A">Ingenieria I.A</option>
							<option value="Ingenieria E.R">Ingenieria E.R</option>
							<option value="Contador Publico">Contador Publico</option>
							<option value="Ingenieria Quimica">Ingenieria Quimica</option>
						</select>
					</div>
				</div>
			

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<button  type="submit" class="btn btn-primary" onclick="f()">Cancelar</button>
							<button type="submit" class="btn btn-primary" id="Regresar">Regresar</button>
						
					</div>
				</div>
				 <script type="text/javascript" src="js/jquery.js "></script>
          <script >
             	function f()
             	{
             		document.getElementById('actividad').value="";
             		document.getElementById('unidad_medida').value="";
             		document.getElementById('area_involucrada').value="";
             	}
             	$("#Regresar").click(function()
               {
      window.location.href='Usuario.php';
               });
   
             </script>
			</form>
		</div>
	</body>

</html>