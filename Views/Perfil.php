
<?php

require_once("Controllers/InfoBasica_control.php");
require_once("Controllers/ActualizarUser_control.php");

if(isset($_POST['actualizarperfil'])){
    
    ActualizarPerfil($_SESSION['user']);
    
}


if(isset($_POST['actualizarpass'])){
    
    ActualizarPassword();
    
}
 


$row = mostrarinfo();
 while($row2 = pg_fetch_array($row)){

?>
   <div id="perfil" class="container-fluid my-5 punto  ">

    <h5 class="pestaña"><i class="fa fa-filter" ></i> Perfil</h5>
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
                                                       <?php
                                                        echo'<input class="input2" name="cedula" id="cedula" autocomplete="of" type="text" placeholder='.$row2["cedula"].' />';
                                                        ?> 
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
                                                       <?php
                                                        echo '<input class="input2" name="nombre" id="nombre" autocomplete="of" type="text" placeholder='. $row2["nombre"].' />';
                                                        ?>

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
                                                       <?php
                                                        echo '<input class="input2" name="apellido" id="apellido" autocomplete="of" type="text" placeholder='. $row2["apellido"].'  />';
                                                        ?>
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
                                                <?php
                                                echo '<input class="input2" name="email" id="correo" type="text" autocomplete="of" placeholder='. $row2["email"].' />';
                                                    ?>

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
                                                <?php
                                                echo '<input class="input2" name="telefono" id="telefono" type="text" autocomplete="of" placeholder='.$row2["telefono"].' />';
                                                ?>

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
                                                <?php
                                                echo '<input class="input2" name="Nusuario" id="Nusuario" type="text" autocomplete="of" placeholder='.$row2["usuario"].' />';
                                                    }?> 

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
                                                <input type="submit" name="actualizarperfil" id="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
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
                                                        <input class="input2" name="passa" id="claveActual" type=password  type="text"/>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Contraseña actual
                                                        </label>
                                                        
                                                        <label id="mensaje11" class="errores2 ">  Completar Campo</label>
                                                        <div id="mensaje8" class="errores2 ">Se necesita minimo 8 caracteres</div>
                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="pass1" id="claveNueva" type=password  type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nueva contraseña
                                                        </label>
                                                        <div id="mensaje12" class="errores2 ">Completar Campo</div>
                                                        <div id="mensaje9" class="errores2 ">Se necesita minimo 8 caracteres</div>
                                                        <div id="mensaje14" class="errores2 ">Contraseñas no coinciden </div>

                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="pass2" id="claveRepetida" type=password  type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Repetir contraseña
                                                        </label>
                                                        <div id="mensaje13" class="errores2 ">Completar Campo</div>
                                                        <div id="mensaje10" class="errores2 ">Se necesita minimo 8 caracteres</div>
                                                        <div id="mensaje15" class="errores2 ">Contraseñas no coinciden </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                <div class="col-md-2 mx-2">
                                                  <input type="submit" name="actualizarpass" id="actualizarpass" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                               
                                                </div>
                                                
                                            </div>

                      
                  </form>
                    </div>
                  </div>
</div>
</div>
</div>