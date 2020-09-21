<?php 
if(!empty($_POST)){
    $captcha = $_POST['g-recaptcha-response'];
    
    $secret = '6LclRl4UAAAAAKHT-Cj7fQWE4JhkLELV6y-1djX5';
    
    if(!$captcha){
 
      echo "Por favor verifica el captcha";
      
      } else {
      
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
      
      $arr = json_decode($response, TRUE);
      
      if($arr['success'])
      {
        echo '<h2>Thanks</h2>';
        } else {
        echo '<h3>Error al comprobar Captcha </h3>';
      }
    }
  }
  require 'conexion2.php';
   $sql = "SELECT * FROM empleados ";
  $resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>VISUALIZAR USUARIOS</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
     <link href="boot/css/bootstrap.min.css" rel="stylesheet" >
  <link href="boot/css/bootstrap-theme.css" rel="stylesheet" >
  <link href="boot/css/jquery.dataTables.min.css" rel="stylesheet" >
    <script src="boot/js/jquery-3.2.1.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <script src="boot/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
  <script src="boot/js/bootstrap.min" ></script>

<script>
   $(document).ready(function()
   {
$('#miTabla').DataTable({

"order":[[1,"asc"]],
"language":{
  "lengthMenu": "Mostrar _MENU_ registros por pagina",
  "info": "Mostrando pagina _PAGE_ de _PAGES_",
"infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtrada de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "search": "Buscar:",
        "zeroRecords":    "No se encontraron registros coincidentes",
        "paginate": {
          "next":       "Siguiente",
          "previous":   "Anterior"
        },
}


   });
   });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
 
 <div class="row">
       
      </div>
<body>
    <div class="">  
        <table class="display" id="miTabla">
      <thead>
        <tr>
         <th>Empleado ID</th> 
        <th>Nombre</th>
         <th>Recuperar Password</th> 
        </tr>


      </thead>
      <tbody>
  <?php 
 
  while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {
    ?> 
    <tr>
    <td><?php echo $row['id_empleado']; ?> </td>
     <td><?php echo $row['nombre']; ?> </td>
         
<td><a href="consultarpass.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span  class="btn btn-primary">Recuperar Contraseña</span> </a>  <div class="g-recaptcha" data-sitekey="6LclRl4UAAAAAP2M6cwF7-oucyRBneYR1AiNrr-e"></div> </td>
    </tr>
  <?php } ?>
      </tbody>

      </table>
      
 </div>


 <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
 <div class="modal-content"> 
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"
    aria-hidden="true">&times;</button>
      <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4> 
</div>
<div class="modal-body">
  ¿Desea Eliminar Este Registro?
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default"
  data-dismiss="modal">Cancelar</button>
  <a class="btn btn-danger btn-ok">Borrar</a>
</div>
</div>
</div>
</div>

<script>
  $('#confirm-delete').on('show.bs.modal', function(e){
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href')); 

    $('.debug-url').html('Delete URL: <strong>' + $(this).find(
      '.btn-ok').attr('href')+'</strong>');
  
  });
  
  
</script>
<a href="Administrador.php"  class="btn btn-primary">Regresar</a>
</body>

</html>