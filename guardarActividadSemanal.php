<?php
require 'conexion2.php';
$cn=mysqli_connect("localhost", "root", "12345678","reportes");
$id_actividadmensual= $_POST['id_actividadmensual'];

$actividad_planeada= $_POST['actividad_planeada'];
$unidad_medida_programada= $_POST['unidad_medida_programada'];
$cantidad_planeada = $_POST['cantidad_planeada'];

$actividad_planeada2= $_POST['actividad_planeada2'];
$unidad_medida_programada2= $_POST['unidad_medida_programada2'];
$cantidad_planeada2 = $_POST['cantidad_planeada2'];	

$actividad_planeada3= $_POST['actividad_planeada3'];
$unidad_medida_programada3= $_POST['unidad_medida_programada3'];
$cantidad_planeada3 = $_POST['cantidad_planeada3'];

$sql = "INSERT INTO actividadades_semanal (actividad_planeada, unidad_medida_programada, cantidad_planeada,id_actividad_mensual) VALUES ('$actividad_planeada', '$unidad_medida_programada', '$cantidad_planeada', '$id_actividadmensual')";
	$resultado = $mysqli->query($sql);
	$sql2 = "INSERT INTO actividadades_semanal (actividad_planeada, unidad_medida_programada, cantidad_planeada,id_actividad_mensual) VALUES ('$actividad_planeada2', '$unidad_medida_programada2', '$cantidad_planeada2', '$id_actividadmensual')";
	$resultado2 = $mysqli->query($sql2);
	$sql3 = "INSERT INTO actividadades_semanal (actividad_planeada, unidad_medida_programada, cantidad_planeada,id_actividad_mensual) VALUES ('$actividad_planeada3', '$unidad_medida_programada3', '$cantidad_planeada3', '$id_actividadmensual')";
	$resultado3 = $mysqli->query($sql3);
	$id_insert=$mysqli->insert_id;
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



$id_insert2=$mysqli->insert_id2;
if($_FILES["archivo2"]["error"]>0)
{echo "Error al cargar el archivo";
}
else
{
	$permitidos=array("image/jpeg");
	$limite_kb=5000;
	if(in_array($_FILES["archivo2"]["type"],$permitidos)&& $_FILES["archivo2"]["size"]<=$limite_kb*1024)
	{
$ruta2='files/'.$id_insert2.'/';
$archivo2=$ruta2.$_FILES["archivo2"]["name"];

if(!file_exists($ruta2))
{
	mkdir($ruta2);
}

if(!file_exists($archivo2))
{
$resultado2=@move_uploaded_file($_FILES["archivo2"]["tmp_name"],$archivo2);
if($resultado2){
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




$id_insert3=$mysqli->insert_id3;
if($_FILES["archivo3"]["error"]>0)
{echo "Error al cargar el archivo";
}
else
{
	$permitidos=array("image/jpeg");
	$limite_kb=5000;
	if(in_array($_FILES["archivo3"]["type"],$permitidos)&& $_FILES["archivo3"]["size"]<=$limite_kb*1024)
	{
$ruta3='files/'.$id_insert3.'/';
$archivo3=$ruta3.$_FILES["archivo3"]["name"];

if(!file_exists($ruta3))
{
	mkdir($ruta3);
}

if(!file_exists($archivo3))
{
$resultado3=@move_uploaded_file($_FILES["archivo3"]["tmp_name"],$archivo3);
if($resultado3){
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
						<h3>Actividades Almacenadas</h3>
						<meta http-equiv="Refresh" content="1;url=http://localhost/PROYECTO/indexReportes.php">
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