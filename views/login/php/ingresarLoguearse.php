<?php
$link="../../../";

require_once($link.'cp/conexion.php');

$clave = $_POST['clave'];
$usuario = $_POST['usuario'];

$sql = "SELECT * FROM usuario WHERE num_dc = '$usuario' AND clave = '$clave' OR email = '$usuario' AND clave = '$clave'";
$consulta =  $conexion->query($sql);


if($consulta->num_rows > 0):
	$datos = $consulta->fetch_object();
	$_SESSION['correo'] = $datos->email;
	$_SESSION['id'] = $datos->id_usuario;

	echo 1;	
elseif($consulta->num_rows == 0):
	echo 0;
endif;


?>