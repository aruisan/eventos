<?php	
session_start();
if (empty($_SESSION['correo'])) {
$_SESSION['correo'] = '';
}

if (empty($_SESSION['id'])){
$_SESSION['id'] = 0;
}

$logo = '<link rel="icon" type="image/png" href="'.$link.'imagenes/logo2.png" />';
?>
