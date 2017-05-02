
<?php
$link =  '../../';
require_once($link.'cp/principal.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logueo de agenda Girardot</title>
        <?= $logo; ?>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../../librerias/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/registrar.css">     

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg  ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-sm-4  col-sm-offset-4 text login">
                            <h4 class="titulo text-center"><b>Eventos Girardot</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
			                    <form id="form-login" role="form" action="login_view.php" method="post" class="login-form">
                                <h3>Logueate</h3>
                                <a href="../../" class="btn btn-danger">Cancelar</a>
                                <a href="registrar_view.php" class="btn btn-info">¿Eres Nuevo?</a><br>
                                <p>Introduce tu correo y clave:</p>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="correo">Correo</label>
			                        	<input type="text" name="usuario" placeholder="Correo o Numero Documento" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="clave">clave</label>
			                        	<input type="password" name="clave" placeholder="clave..." class="form-password form-control" id="form-password">
			                        </div>
                                    <div id="mensaje-error"></div>
			                        <button  class="btn btn-primary" id="enviar">Loguearte!</button><br>
			                    </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
    <!-- Javascript -->
            
     <script
         src="https://code.jquery.com/jquery-3.1.1.js"
         integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
         crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../../js/login.js"></script>
        <script type="text/javascript">

            $('#enviar').on("click", function(e){
                 e.preventDefault();
                loguearse(); 
            });

    function loguearse()
    {

            var url = "php/ingresarLoguearse.php";
            var datos = $('#form-login').serialize();
            $.ajax({
                url: url,
                type: "POST",
                data: datos,
                success: function(data)
                {
                        console.log(data);
                     if (data > 0){
                        window.location.href = "../../";
                    }else if(data == 0){
                        $('#mensaje-error').html('<span class="text-danger">los datos no coinciden</span>');
                    }
                }
            });
    }

        </script>
</html>