<?php
session_start();
$link ="";
require_once($link.'cp/conexion.php'); 
header("Content-Type: text/html;charset=utf-8");


$di=$_GET["busqueda"];

$sqlSig="SELECT evento.*, actividades.nombre FROM evento, actividades WHERE evento.id_actividad = $di AND evento.id_actividad=actividades.id_actividad ORDER BY ff_inicio";
$consulta = $conexion->query($sqlSig);


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ver Eventos</title>
	<?= $logo; ?>

<link href = "https://fonts.googleapis.com/css?family=Acme " rel="stylesheet">
<link href = "https://fonts.googleapis.com/css?family=BenchNine " rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="<?= $link; ?>librerias/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?= $link; ?>css/slider.css">

	

</head>
<body>
<div class="fondo">	
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<?php include_once($link.'cuerpo/header.php'); ?>
		</div>
	</div>
	<div class="row cuerpo">
		<div class="col-xs-12 col-sm-8 col-md-8">
			<?php include_once($link.'cuerpo/section.php'); ?>
		</div>
		<div class="hidden-xs col-sm-4 col-md-4">
			<?php include_once($link.'cuerpo/aside.php'); ?>
		</div>
	</div>

</div>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=220380218387628";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript" src="<?= $link; ?>js/slider.js"></script>
</html>