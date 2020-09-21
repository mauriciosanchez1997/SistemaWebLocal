<?php
 $cn=mysqli_connect("localhost", "root", "12345678","reportes");
 $id_empleado=$_GET['id_empleado'];
  $sql=mysqli_query($cn,"SELECT *FROM empleados WHERE id_empleado='$id_empleado'"); 
  $row=$sql->fetch_array(MYSQL_ASSOC)
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
				<h3 style="text-align:center">Actualizar</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
						
					</div>
				</div>
				<input type="hidden" id="id_empleado" name="id_empleado" value="<?php echo $row['id_empleado']; ?>"/>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Apellido Paterno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ap" name="ap" placeholder="Apellido Paterno" value="<?php echo $row['ap']; ?>" required>
						
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Apellido Materno</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="am" name="am" placeholder="Apellido Materno" value="<?php echo $row['am']; ?>" required>
						
					</div>
				</div>
				
				<div class="form-group">
					<label for="usuario_nivel" class="col-sm-2 control-label">Area</label>
					<div class="col-sm-10">
						<select class="form-control" id="area" name="area">
							<option value="Ingenieria Informatica" <?php if ($row['area']=='Ingenieria Informatica') echo 'selected';?>>Ingenieria Informatica</option>
							<option value="Ingenieria Civil" <?php if ($row['area']=='Ingenieria Civil') echo 'selected';?>>Ingenieria Civil</option>
							<option value="Ingenieria I.A" <?php if ($row['area']=='Ingenieria I.A') echo 'selected';?>>Ingenieria I.A</option>
							<option value="Ingenieria I.A" <?php if ($row['area']=='Ingenieria I.A') echo 'selected';?>>Ingenieria I.A</option>
							<option value="Ingenieria E.R" <?php if ($row['area']=='Ingenieria E.R') echo 'selected';?>>Ingenieria E.R</option>
							<option value="Contador Publico" <?php if ($row['area']=='Contador Publico') echo 'selected';?>>Contador Publico</option>
							<option value="Ingenieria Quimica" <?php if ($row['area']=='Ingenieria Quimica') echo 'selected';?>>Ingenieria Quimica</option>
						</select>
					</div>
				</div>
				
					<div class="form-group">
					<label for="usuario_nivel" class="col-sm-2 control-label">Tipo</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo" name="tipo">	
							<option value="0" <?php if ($row['puesto']=='0') echo 'selected';?>>Admin</option>
							<option value="1" <?php if ($row['puesto']=='1') echo 'selected';?>>Ingenieria I.A</option>
							<option value="2" <?php if ($row['puesto']=='2') echo 'selected';?>>Directivos</option>
						</select>
					</div>
				</div>
			
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<button  type="submit" class="btn btn-primary" onclick="f()">Limpiar</button>
							<button type="submit" class="btn btn-primary" id="Regresar">Regresar</button>
						
					</div>
				</div>
				 <script type="text/javascript" src="js/jquery.js "></script>
          <script >
             	function f()
             	{
             		document.getElementById('nombre').value="";
             		document.getElementById('ap').value="";
             		document.getElementById('am').value="";
             		document.getElementById('area').value="";
             		document.getElementById('tipo').value="";
             	}
             	$("#Regresar").click(function()
               {
      window.location.href='index3.php';
               });
   
             </script>
			</form>
		</div>
	</body>

</html>