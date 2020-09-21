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
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Tipo de Usuario</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
				</div>
					<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Permisos</label>
					<div class="col-sm-10">
						<select class="form-control" id="permisos" name="permisos">
							<option value="0">Admin</option>
							<option value="1">Jefe de Division</option>
							<option value="2">Directivos</option>
						</select>
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