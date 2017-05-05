<?php
	require_once('principal.php');

	$conexion = new mysqli('localhost', 'root', '', 'eventos');
	$acentos = $conexion->query("SET NAMES 'utf8'");
	if($conexion->connect_error){
		
		die('Error en la conexion' . $conexion->connect_error);
		
	}

?>