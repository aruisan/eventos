<?php
	$link="../../../";
  	require_once($link.'cp/conexion.php');

  	$datos = $_POST['datos'];
  	$proceso = $_POST['proceso'];

  	if($proceso == "cedula"){
  		$sql = "SELECT num_dc FROM usuario WHERE num_dc = $datos ";
  	}if($proceso == "email"){
  		$sql = "SELECT num_dc FROM usuario WHERE email = '$datos'";
  	}
  	
  	$consulta = $conexion->query($sql);
  	$datos = $consulta->num_rows;

  	if($datos > 0 && $proceso == "cedula"){
  		echo 2;	
  	}else if($datos > 0 && $proceso == "email"){
  		$datos = $consulta->fetch_object();
  		echo $datos->num_dc;
  	}else{
  		 echo 0;
  	}
  	
?>