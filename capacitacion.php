<?php
$link ="";
require_once($link.'cp/conexion.php'); 
header("Content-Type: text/html;charset=utf-8");


$di=$_GET["busqueda"];

$sql="SELECT * FROM evento, actividades WHERE evento.id_actividad = $di AND evento.id_actividad=actividades.id_actividad AND activo = 1 ORDER BY ff_inicio";
$consulta = $conexion->query($sql);

$user = $_SESSION['id'];

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
		<?php while($datos = $consulta->fetch_object()){ $Confirmar=$conexion->query("SELECT conteo FROM conteo_evento WHERE id_usuario = $user AND id_evento = $datos->id_evento AND conteo = 1 "); ?>
			<h4 class="text-center text-primary"><?= $datos->titulo;?></h4>
			<span id="respuesta<?= $datos->id_evento; ?>" class="text-warning">Fecha limite para Inscribirse: <?= $datos->ff_inicio; ?>
			<?php if($Confirmar->num_rows > 0){ echo  '<b class="text-danger pull-right ">Ya estas Inscrito</b>'; 
				}else if (($_SESSION['correo'] ==  "" )) {echo '<a href="'. $link.'views/login/registrar_view.php" class="btn btn-link pull-right "><b class="text-primary">INSCRIBIRME</b></a>';
				}else{echo '<form id="form-suscribirse'.$datos->id_evento.'"><input type="hidden" name="user" value="'.$_SESSION['id'].'"><input type="hidden" name="accion" value="guardar"><input type="hidden" name="evento" value="'.$di.'"><input type="hidden" name="evento" value="'.$datos->id_evento.'"><button class="btn btn-link pull-right inscribirme" id="'.$datos->id_evento.'"><b class="text-success">INSCRIBIRME</b></button></form>';
			} ?></span>
			<table class="table table-bordered table-hover table-condensed table-striped">
				<thead>
					<th  class=" text-center info">Taller</th>
					<th  class=" text-center info">Lugar</th>	
					<th  class=" text-center info">Fecha</th>
				</thead>
				<div id="cuadro_inscribirse"></div>
				<tbody>
				<?php  $consulta_taller= $conexion->query("SELECT * FROM talleres WHERE id_evento = $datos->id_evento");
						while($datos_taller = $consulta_taller->fetch_object()){ ?>
					<tr>
						<td><?= $datos_taller->nombre; ?></td>
						<td><?= $datos_taller->lugar; ?></td>
						<td><?= $datos_taller->fecha; ?></td>
					</tr>

				<?php } ?>
				</tbody>
			</table><br><br>
		<?php } ?>
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
<script type="text/javascript">
	$('.inscribirme').click(function(e){
		 e.preventDefault();
		var id = $(this).attr("id");
		var datos = $("#form-suscribirse"+id).serialize();
		var url = "php/inscribirse.php"
		    $.ajax({
                url: url,
                type: "POST",
                data: datos,
                success: function(data)
                {
                	console.log(data);
                    if (data > 1){
                        $('#respuesta'+data).html('<b class="text-danger pull-right ">Ya estas Inscrito</b>');
                    }else if(data == 0){
                         alert("error al suscribirse");
                    }
                }
            });
	});
</script>
</html>