
	<?php
	 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
	   $sql=mysqli_query($cn,"SELECT *FROM actividades_mensuales"); 
	$id_actividadmensual = $_POST['id_actividadmensual'];
	$id_actividadmensual2 = $_POST['id_actividadmensual'];
	$actividad = $_POST['actividad'];
	$fecha_programada = $_POST['fecha_programada'];
	$unidad_medida = $_POST['unidad_medida'];
	$area_involucrada = $_POST['area_involucrada'];
	$sqlActualizar = "UPDATE actividades_mensuales SET actividad='$actividad' ,fecha_programada='$fecha_programada', unidad_medida='$unidad_medida', area_involucrada='$area_involucrada' WHERE id_actividadmensual='$id_actividadmensual'";
	$resultado = $cn->query($sqlActualizar);
	$id_insert=$id_actividadmensual2;
if($_FILES["archivo"]["error"]>0)
{echo "Error al cargar el archivo";
}
else
{
	$permitidos=array("image/jpeg");
	$limite_kb=5000;
	if(in_array($_FILES["archivo"]["type"],$permitidos)&& $_FILES["archivo"]["size"]<=$limite_kb*1024)
	{
$ruta='files/'.$id_insert.'/';
$archivo=$ruta.$_FILES["archivo"]["name"];

if(!file_exists($ruta))
{
	mkdir($ruta);
}

if(!file_exists($archivo))
{
$resultado=@move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo);
if($resultado){
	echo "Archivo Guardado";
}else{
	echo "Error al guardar archivo";
}

}else{
	echo "El archivo ya existe";
}
	}else{
		echo "Archivo no permitido o excede el tamaño";
	}
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