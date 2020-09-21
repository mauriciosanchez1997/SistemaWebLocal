<?php
require 'conexion2.php';
$cn=mysqli_connect("localhost", "root", "12345678","reportes");
$nombre= $_POST['nombre'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$area= isset($_POST['area']) ? $_POST['area'] : 0;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 0;	
$password=$_POST['password'];
$passcifrado=password_hash("$password", PASSWORD_DEFAULT);
$sql = "INSERT INTO empleados (nombre, ap, am, area,tipo,password) VALUES ('$nombre', '$ap', '$am', '$area', '$tipo','$password')";
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
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/Administrador.php">
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>		
				</div>
			</div>
		</div>
	</body>
</html>
</html>