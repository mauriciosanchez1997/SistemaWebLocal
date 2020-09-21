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
	<nav class="menu-uno" style="display: none;" id="men">
      <ul class="menu">
      <li style="display: none;"><a href="#">Inicio</a></li>
      <li style="display: none;" id="adm2"><a href="#">Nuevo Empleado</a>
        <li style="display: none;" id="adm3"><a href="#">Eliminar Empleados</a>
          <li style="display: none;" id="adm4"><a href="#">Actualizar Empleados</a>
            <li style="display: none;" id="adm5"><a href="#">Recuperar Contraseña</a>

      <li style="display: none;" id="adm"><a href="#">Hola Administrador!</a>
        <ul>
        <li id="subMenuCambiarPass"><a href="#">Cambiar Contraseña</a></li>
        <li id="subMenuSalir" ><a href="#">Salir</a>
        </ul>        </li>
      </li>
      </ul>

    </nav>
	
<body>
 <div id="login_principal" class="login-box" >
      <img src="img/foto.png" class="avatar">
      <h1>INICIO DE SESIÓN</h1>
      <form>
        <!-- USERNAME INPUT -->
        <!--label for="username">USUARIO</label-->
        <div class="form-input">
        <input type="text" placeholder="USUARIO" id="usu">
        <!-- PASSWORD INPUT -->
        <!--label for="password">Password</label-->
        <input type="password" placeholder="CONTRASEÑA" id="pas">
        <input type="button" value="ENTRAR" id="entrar" href="validar.php">
        </div>
        <!--a href="#">Lost your Password?</a><br>
        <a href="#">Don't have An account?</a-->
      </form>
    </div>
</body>
 <script type="text/javascript" src="js/jquery.js "></script>
          <script type="text/javascript">
             $(document).ready(function(){
                
                $("#entrar").click(function(){
                var  usu =$("#usu").val();
                var pas =$("#pas").val();
                var data="accion=busca_usuario&usu="+usu+"&pas="+ pas;
                //alert(data);
                $.get("servidor.php",data, function(resp){
                   var registro = resp.split("*");
                   if ( (registro[0]== "1") && (registro[1]== "0"))
                   {
                window.location.href='Administrador.php';
                   }
                   
                   else if ((registro[0]=="1") && (registro[1]=="1"))
                   {
                 
                    $("#login_principal").css("display","none");
                     window.location.href='Usuario.php';

                   
                 
                   }
                   else if ((registro[0]=="1") && (registro[1]=="2"))
                   {
                    alert("BIENVENIDO:  "+registro[2]+"PERFIL: MEDICO");  
                    $("#login_principal").css("display", "none") ;  
                    $("#men").css("display", "block") ;

                   }
                   else
                   {
                      alert("ACCESO NO PERMITIDO");
                   }
                });
                });
                 $("#guardarPersona").click(function()
                 {
                   var  nombPersona = $("#nombPersona").val();
                  var  patPersona = $("#patPersona").val();
                  var  matPersona = $("#matPersona").val();
                  var  edadPersona = $("#edadPersona").val();
                  var  genPersona = $("#genPersona").val();
                  alert(nombPersona+" "+patPersona+" "+matPersona+" "+edadPersona+" "+genPersona);
                  if((!nombPersona) || (!patPersona) || (!matPersona) || (!edadPersona) || (!genPersona)){
                  alert("Error: Faltan parametros");
                  }
                  else
                  {
                   var data = "accion=registra_persona&nom="+nombPersona+
                   "&pat="+patPersona+"&mat="+matPersona+"&edad="+edadPersona+"&gen="+genPersona;
                   $.get("servidor.php", data, function(resp)
                   {
                    alert(resp);
                 });
                }
              });


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
             });


          </script>
          <script src="js/jquery.js"></script>
          <script src="js/functions.js"></script>
          <script src="js/jquery.min.js"></script>
</body>
</html>
