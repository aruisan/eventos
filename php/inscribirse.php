<?php
 	$link="../";
  	require_once($link.'cp/conexion.php');

	$user = $_POST['user'];
	$evento = $_POST['evento'];
	$accion = $_POST['accion'];

	$sql = "INSERT INTO conteo_evento (id_usuario, id_evento, conteo) VALUES('$user','$evento',1)";
	$insertar = $conexion->query($sql);

	if($insertar){
		echo $evento;
	}else{
		echo 0;
	}
?>

