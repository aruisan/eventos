<?php
  $link="../../../";

  require_once($link.'cp/conexion.php');

	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$cc = $_POST['cc'];
	$email = $_POST['email'];
	$celular = $_POST['mobile'];
	$pass = $_POST['pass'];
	$fecha = $_POST['fecha'];
	$sexo = $_POST['sexo'];

	$sql = "INSERT INTO usuario (nombre, num_dc, email, celular, nacimiento, sexo, tipo, clave) VALUES('$nombre','$cc','$email','$celular','$fecha','$sexo','$tipo','$pass')";
	$insertar = $conexion->query($sql);

	if($insertar){
		echo 1;
	}else{
		echo 0;
	}

?>

