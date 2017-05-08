<?php

$link ="../";
require_once($link.'cp/conexion.php'); 

	$tipo = $_POST['tipo'];
	$nombre = $_POST['nombre'];
	$cc = $_POST['cc'];
	$email = $_POST['email'];
	$celular = $_POST['mobile'];
	$pass = $_POST['pass'];
	$fecha = $_POST['fecha'];
	$sexo = $_POST['sexo'];
	$di = $_SESSION['id'];

$sql = "UPDATE usuario SET `nombre`='$nombre',`num_dc`='$cc',`email`='$email',`celular`='$celular',`nacimiento`='$fecha',`sexo`='$sexo',`tipo`='$tipo',`clave`='$pass' WHERE id_usuario = $di";
$consulta = $conexion->query($sql);

if($consulta){
	header('location:../');
}else{
	echo "error";
}
?>