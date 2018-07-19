<div id="perfil" class="container-fluid my-5 punto  ">
    <h5 class="pestaña"><i class="fa fa-filter" ></i> Usuario/ Perfil</h5>
              <div class="row wrapper">
                <div class="col-lg-8">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4 mx-2">Perfil del usuario</h3>

                    </div>
                    <div class="card-body ">
                      <form method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" name="cedula" id="cedula" type="text"/>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Cédula
                                                        </label>
                                                         <div id="mensaje1" class="errores2 ">Completar Campo</div>           

                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" name="nombre" id="nombre" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre
                                                        </label>
                                                          <div id="mensaje2" class="errores2 ">Completar Campo</div>
                                                

                                                    </div>
                                                  </div>
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" name="apellido" id="apellido" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Apellido
                                                        </label>
                                                          <div id="mensaje3" class="errores2 ">Completar Campo</div>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        

                                    <div class="row">


                                        
                                        <div class="col-md-4">
                                                <div class="group">
                                                <input class="input2" name="email" id="correo" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Correo electronico
                                                        </label>
                                                        <div id="mensaje4" class="errores2 ">Completar Campo</div>
                                                        <div id="mensaje7" class="errores2 ">Correo Invalido</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="group">
                                                <input class="input2" name="telefono" id="telefono" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Teléfono
                                                        </label>
                                                        <div id="mensaje5" class="errores2 ">Completar Campo</div>
                                            </div>
                                        </div>

<div class="col-md-4">
                                                <div class="group">
                                                <input class="input2" name="Nusuario" id="Nusuario" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre de usuario
                                                        </label>
                                                        <div id="mensaje6" class="errores2 ">Completar Campo</div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" id="actualizarperfil" name="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                                <?php
                                                require_once("Controllers/ActualizarUser_control.php");
                                                
                                                ActualizarPerfil($_SESSION['user']); ?>
                                            </div>
                                        </div>
                                    </form>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Cambiar contraseña</h3>

                    </div>
                    <div class="card-body ">
                      <form method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="passa" id="claveActual" type=password required="required" type="text"/>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Contraseña actual
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="pass1" id="claveNueva" type=password required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nueva contraseña
                                                        </label>

                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="pass2" id="claveRepetida" type=password required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Repetir contraseña
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                <div class="col-md-2 mx-2">
                                                  <input type="submit" name="actualizarpass" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                                <?php
                                                require_once("Controllers/ActualizarUser_control.php");
                                                ActualizarPassword(); ?>
                                                </div>
                                                
                                            </div>

                      
                  </form>
                    </div>
                  </div>
</div>
</div>
</div>