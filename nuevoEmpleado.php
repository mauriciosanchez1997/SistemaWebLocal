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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarEmpleado.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
			
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Apellido Paterno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ap" name="am" required>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Apellido Materno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="am" name="am" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Area</label>
					<div class="col-sm-10">
						<select class="form-control" id="area" name="area">
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
					<label for="estado_civil" class="col-sm-2 control-label">tipo</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="0">Administrador</option>
							<option value="1">Usuario</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" required>
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
             		document.getElementById('nombre').value="";
             		document.getElementById('ap').value="";
             		document.getElementById('am').value="";
             		document.getElementById('area').value="";
             		document.getElementById('tipo').value="";
             		document.getElementById('password').value="";
             	}
             	$("#Regresar").click(function()
               {
      window.location.href='Administrador.php';
               });
   
             </script>
			</form>
		</div>
	</body>

</html>