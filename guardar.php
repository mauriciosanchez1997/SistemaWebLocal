<?php
require 'conexion2.php';
$cn=mysqli_connect("localhost", "root", "12345678","reportes");
$usuario= $_POST['usuario'];
$password = $_POST['password'];
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 0;
$permisos = isset($_POST['permisos']) ? $_POST['permisos'] : 0;	
$sql = "INSERT INTO usuarios (usuario, password, tipo, permisos) VALUES ('$usuario', '$password', '$tipo', '$permisos')";
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
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/index.php">
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
</html>