<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
	<title> Administrador</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
     <link href="boot/css/bootstrap.min.css" rel="stylesheet" >
  <link href="boot/css/bootstrap-theme.css" rel="stylesheet" >
    <script src="boot/js/jquery-3.2.1.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 

  <script src="boot/js/bootstrap.min" ></script>
	
</head>
	<nav class="menu-uno" style="display: block;" id="men">
      <ul class="menu">
      <li style="display: none;"><a href="#">Inicio</a></li>
      <li style="display: block;" id="adm2"><a href="#">Nuevo Empleado</a>
        <li style="display: block;" id="adm3"><a href="#">Eliminar Empleados</a>
          <li style="display: block;" id="adm4"><a href="#">Actualizar Empleados</a>
            <li style="display: block;" id="adm5"><a href="#">Recuperar Contraseña</a>
              <li style="display: block;" id="reportes"><a href="#">Reportes</a>

      <li style="display: block;" id="adm"><a href="#">Hola Administrador!</a>
        <ul>
        <li id="subMenuSalir" ><a href="#">Salir</a>
        </ul>        </li>
      </li>
      </ul>

    </nav>
 <script type="text/javascript" src="js/jquery.js "></script>
          <script type="text/javascript">
             $(document).ready(function(){
              $("#adm2").click(function()
               {
      window.location.href='nuevoEmpleado.php';
               });
               $("#adm3").click(function()
               {
      window.location.href='index2.php';
               });
              
                $("#adm4").click(function()
               {
      window.location.href='index3.php';
               });
 $("#subMenuSalir").click(function()
               {
      window.location.href='login.php';
               });

$("#adm5").click(function()
               {
      window.location.href='indexpass.php';
               });
$("#reportes").click(function()
               {
      window.location.href='Usuario.php';
               });
             });


          </script>
          <script src="js/jquery.js"></script>
          <script src="js/functions.js"></script>
          <script src="js/jquery.min.js"></script>
</body>
</html>
