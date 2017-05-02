<?php
$link="../../../";

require_once($link.'cp/conexion.php');

unset($_SESSION["correo"]);
unset($_SESSION["id"]);
header('location:'.$link.'');



?>