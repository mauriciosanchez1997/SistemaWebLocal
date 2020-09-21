<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ENCRIPTAR PASSSWORD</title>
</head>
<body>
<?php  
include 'SED.php';
$clave="Contraseña fea";
echo $clave."<br";
$claveE=SED::encryption($clave);
echo $claveE."<br";
?>
</body>
</html>