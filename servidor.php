<?php
class UbiGeo{
	public function _construct(){	
	$cn=mysqli_connect("localhost","root","12345678","reportes");
	mysqli_query($cn,"SET NAME 'UTF8'");	
	}
	public function buscarUsuario($usu, $pas){	
	$cn=mysqli_connect("localhost","root","12345678","reportes");
	mysqli_query($cn,"SET NAME 'UTF8'");	
	if($sql=mysqli_query($cn,"SELECT * FROM  usuarios WHERE usuario='$usu' AND password='$pas'"))
	{	
	if ($reg =mysqli_fetch_array($sql)) {
		$sql_2 =mysqli_query($cn,"SELECT * FROM empleados WHERE id_empleado='{$reg['id_usuario']}'");
		$reg_2=mysqli_fetch_array($sql_2);
		echo "1*".$reg['tipo']."*"."{$reg['usuario']}".$reg_2['nombre'];
	}
	else{
		$cn=mysqli_connect("localhost","root","12345678","reportes");
	mysqli_query($cn,"SET NAME 'UTF8'");
$sql2=mysqli_query($cn,"SELECT * FROM  empleados WHERE nombre='$usu' AND password='$pas'");	
	if ($reg2 =mysqli_fetch_array($sql2)) {
		echo "1*".$reg2['tipo']."*".$reg2['usuario'];
	}
	}


	}
}
	public function registrarPersona($nom, $pat,$mat,$edad,$gen){
	$cn =mysqli_connect("localhost", "root", "12345678","reportes");
	mysqli_query($cn, "SET NAME 'UTF-8'");
	$sql="INSERT INTO persona(persona_id, persona_nombre, persona_paterno, persona_materno, persona_edad, persona_genero) VALUES (NULL,
    '$nom','$pat','$mat','$edad','$gen')";
    if(mysqli_query($cn, $sql)){
    	echo "1";
    }
    else
    {
    	echo "0";
    }
	}
}
$obUbigeo=new UbiGeo();
switch ($_GET['accion']) {
	case 'busca_usuario':
		$obUbigeo->buscarUsuario($_GET['usu'],$_GET['pas']);
		break;
		case 'registra_persona':
		$obUbigeo->registrarPersona($_GET['nom'],$_GET['pat'],$_GET['mat']
			,$_GET['edad'],$_GET['gen']);
		break;
}
?>