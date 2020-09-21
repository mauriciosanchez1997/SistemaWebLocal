<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
	<title> Inicio de sesion</title>
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
          <li style="display: block;" id="adm"><a href="#">Programar Actividades Mensuales</a>
        <ul>
          <li id="subMenuCambiarPass"><a href="nuevaActividad.php">Agregar</a></li>
        <li id="subMenuEliminar"><a href="#">Eliminar</a></li>
        <li id="subMenuModificar" ><a href="#">Modificar</a>
        </ul>        </li>
      <li style="display: block;" id="adm"><a href="#">Programar Actividades Semanales</a>
        <ul>
         <li id="subMenuPlaneacionMensual"><a href="#">Planeacion Semanal</a></li>
         <li id="subMenuPlaneacionMensual"><a href="#">Imprimir Reporte Semanal</a></li>
        </ul>        </li>


      </li>
      <li style="display: block;" id="regresar"><a href="#">Regresar</a>
      <li style="display: block;" id="adm3"><a href="#">Salir</a>
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
      window.location.href='login.php';
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
$("#subMenuEliminar").click(function()
               {
      window.location.href='indexReportes.php';
               });
$("#subMenuPlaneacionMensual").click(function()
               {
      window.location.href='indexReportes.php';
               });
$("#subMenuPlaneacionSemanal").click(function()
               {
      window.location.href='indexReportes.php';
               });
$("#subMenuModificar").click(function()
               {
      window.location.href='indexReportes.php';
               });
$("#regresar").click(function()
               {
      window.location.href='Administrador.php';
               });
             });


          </script>
          <script src="js/jquery.js"></script>
          <script src="js/functions.js"></script>
          <script src="js/jquery.min.js"></script>
</body>
</html>
