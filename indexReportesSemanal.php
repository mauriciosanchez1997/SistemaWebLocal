<?php 
  require 'conexion2.php';
  $id_actividadmensual=$_GET['id_actividadmensual'];
  $sql2="SELECT *FROM actividades_mensuales WHERE id_actividadmensual='$id_actividadmensual'";
   $sql = "SELECT * FROM actividadades_semanal WHERE id_actividad_mensual='$id_actividadmensual' ";
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


</head>
 
 <div class="row">
   
      </div>
<body>
 
    <div class="">
        <table class="display" id="miTabla">
      <thead>
        <tr>
         <th>ID Actividad</th> 
         <th>Actividad</th>
        <th>Unidad de Medida</th>
        <th>Cantidad Planeada</th>
        <th>Id Actividad Mensual</th>
        <th>Editar</th> 
        <th>Eliminar</th>  
        <th>Generar Reporte</th> 
        </tr>


      </thead>
      <tbody>
  <?php 
 
  while ($row=$resultado->fetch_array(MYSQLI_ASSOC)) {
    ?> 
    <tr>
    <td><?php echo $row['id_numactividad']; ?> </td>
    <td><?php echo $row['actividad_planeada']; ?> </td>
     <td><?php echo $row['unidad_medida_programada']; ?> </td>
        <td><?php echo $row['cantidad_planeada']; ?> </td>
         <td><?php echo $row['id_actividad_mensual']; ?> </td>
         <td><a href="modificarReportesSemanales.php?id_numactividad=<?php echo $row['id_numactividad']; ?>"><span class="glyphicon 
          glyphicon-pencil" ></span> </a></td>
          <td><a href="#" data-href="eliminarReporte.php?id_numactividad=<?php echo $row['id_numactividad']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon 
          glyphicon-trash" ></span> </a></td>
           <td><a href="PDFCreacion.php?id_numactividad=<?php echo $row['id_numactividad']; ?>"><span  class="btn btn-primary">Generar Reportes</span> </a></td>


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
</body>

</html>