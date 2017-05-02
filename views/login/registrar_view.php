
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
        <?= $logo; ?>
        
        <title>Logueo de agenda Girardot</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../../librerias/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/registrar.css">     

    </head>

    <body>
          <h4 class="titulo text-center"><b>Informacion Personal</b></h4>
                <div class="container ">
                        <div id="mensaje-autenticacion" class="alert alert-warning ocultar"></div>
                        <form id="form_registro">
                                 <div class="row">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de Persona</i></span>
                                        <select class="form-control" name="tipo">
                                            <option value="NATURAL">NATURAL</option>
                                            <option value="JURIDICA">JURIDICA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nombre"  placeholder="NOMBRE(S)">
                                                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                            </div>
                                            <div id="result-nombre"></div>
                                    </div>
                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="cc" placeholder="NUMERO DOCUMENTO">
                                                <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                                            </div>
                                            <div id="result-cc"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="E-MAIL">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <div id="result-email"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="mobile" placeholder="NUMERO CELULAR">
                                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                        </div>
                                        <div id="result-celular"></div>
                                    </div>
                                </div>
                                   <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="pass" placeholder="CONTRASEÑA">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                        <div id="result-clave"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="reclave" placeholder="REPITE LA CONTRASEÑA">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                        <div id="result-reclave"></div>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nacimiento</span>
                                            <input type="date" class="form-control" name="fecha" placeholder="FECHA NACIMIENTO">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <div id="result-fecha"></div>
                                    </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="radio margin-radio">
                                                <label class="checkbox-inline"><input type="radio" name="sexo" checked="checked" value="MASCULINO">MASCULINO</label>
                                                <label class="checkbox-inline"><input type="radio" name="sexo" value="FEMENINO">FEMENINO</label>
                                                <label class="checkbox-inline"><input type="radio" name="sexo" value="OTROS">OTROS</label>
                                            </div>   
                                        </div>
                                </div> 
                                <div class="row">
                                    <a href="../../" class="btn btn-danger">CANCELAR</a>
                                    <a href="login_view.php" class="btn btn-success">Loguearse</a>
                                    <button class="btn btn-primary pull-center" id="enviar">CREAR</button>
                                </div>
                                                  
                        </form>
                        <div id="mensaje" class="alert alert-danger">
                            <span class="text-center">Error al ingresar usuario</span>
                        </div>
                </div>
   

        <!-- Javascript -->
            
        <script
         src="https://code.jquery.com/jquery-3.1.1.js"
         integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
         crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../../js/login.js"></script>
    </body>

</html>