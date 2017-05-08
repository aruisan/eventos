
<br><h2 class="text-center">Editando perfil</h2><br>

<form id="form_registro" method="POST" action="php/ingresar_Editar_Perfil.php">
                                 <div class="row">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tipo de Persona</i></span>
                                        <select class="form-control" name="tipo">
                                            <option value="NATURAL" <?php if ($datos->tipo=="NATURAL"){echo 'selected="selected"';}?>>NATURAL</option>
                                            <option value="JURIDICA" <?php if ($datos->tipo=="JURIDICA"){echo 'selected="selected"';}?>>JURIDICA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre; ?>" placeholder="NOMBRES COMPLETOS">
                                                <span class="input-group-addon"><i class="fa fa-id-card-o"></i></span>
                                            </div>
                                    </div>
                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="cc"  value="<?= $datos->num_dc; ?>" placeholder="NUMERO DOCUMENTO">
                                                <span class="input-group-addon"><i class="fa fa-cc"></i></span>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email"  value="<?= $datos->email; ?>" placeholder="E-MAIL">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="mobile"  value="<?= $datos->celular; ?>" placeholder="NUMERO CELULAR">
                                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                        </div>
                                    </div>
                                </div>
                                   <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="pass"  value="<?= $datos->clave; ?>" placeholder="CONTRASEÑA">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                         <div class="input-group">
                                            <span class="input-group-addon">Nacimiento</span>
                                            <input type="date" class="form-control" name="fecha"  value="<?= $datos->nacimiento; ?>">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="radio margin-radio">
                                                <label class="checkbox-inline"><input type="radio" name="sexo" <?php if ($datos->sexo=="M"){echo 'checked="checked"';}?> value="M">MASCULINO</label>
                                                <label class="checkbox-inline"><input type="radio" name="sexo" <?php if ($datos->sexo=="F"){echo 'checked="checked"';}?> value="F">FEMENINO</label>
                                                <label class="checkbox-inline"><input type="radio" name="sexo" <?php if ($datos->sexo=="O"){echo 'checked="checked"';}?> value="O">OTROS</label>
                                            </div>   
                                        </div>
                                </div> 
                                <div class="row">
				  <div class="pull-center">
                                    <button class="btn btn-danger" id="cancelar-editar-perfil">Cancelar</button>
                                    <button class="btn btn-success pull-center" id="enviar">Editar</button>
				   </div>
                                </div>                    
                        </form>
