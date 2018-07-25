
<?php 

require_once "Controllers/Validaciones_control.php";
require_once "Controllers/Login_control.php";
require_once "Controllers/NivelDePaso_control.php";
require_once "Controllers/ActualizarUser_control.php";

nivel2();
$login = new Login_control;
if (isset($_REQUEST['registrar'])) {
    $login->registrar();
}

if (isset($_REQUEST['firma'])) {
    ActualizarFirma();
}

 ?>
   <div id="Configuraciones" class="container-fluid my-5 punto  ">
    <h5 class=" pestaña"><i class="fa fa-filter" ></i> Administrador/ Configuración</h5>
              <div class="row wrapper">
                <div class="col-lg-12">
                  <div class="card ">
                    
                     <div class="card-header d-flex align-items-center">
                      
                      <h3 class="h4 mx-2 my-2 ">Modificar firma de documentos</h3>
                      </div>
                      
                    
                    
                    <div class="card-body ">
                        <h5 class="h5 mx-2 my-2 ">Firma actual: <?php
                            
                            require_once "Controllers/Firma_control.php";
                            
                            $row = firma();
                            while($row2 = pg_fetch_array($row)){
                                echo $row2["nombre"];
                                echo " ". $row2["apellido"];
                            }
                            ?></h5>
                         <form method="post">
                      
                      
                         <div class="mr-auto mx-2">    
                             <div class="row">
                            <div class="col-lg-3">
                                <input class="form-control" type="text" name="ci" placeholder="Nº de Cédula" >
                             </div>
                             <div class="col-lg-3">
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre" >
                             </div>
                             <div class="col-lg-3">
                                <input class="form-control" type="text" name="apellido" placeholder="Apellido" >
                             </div>
                             <div class="col-lg-3">
                                <input type="submit" name="firma" class="btn color-azul btn-submit btn-lg " value="Modificar firma">
                             </div>
                            </div>
                    
                         </div>                                    

                </form>
                      
  </div>
</div>
</div>
</div>
 <div class="row wrapper">
                <div class="col-lg-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4 mx-2">Nuevo usuario</h3>

                    </div>
                    <div class="card-body ">
                      <form method="post">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="group">
                                                        <input class="input2" name="cedula" id="cedula" type="text"/>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Cédula
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="group">
                                                        <input class="input2" name="nombre" id="nombre" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="group">
                                                        <input class="input2" name="apellido" id="apellido" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Apellido
                                                        </label>
                                                    </div>
                                                </div>

                                        <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" name="email" id="correo" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Correo electronico
                                                        </label>
                                            </div>
                                        </div>
                                            </div>
                                        

                                    <div class="row">


                                       
                                        <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" name="telefono" id="telefono" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Teléfono
                                                        </label>
                                            </div>
                                        </div>

<div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" name="username-r" id="Nusuario" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre de usuario
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" name="password-r" id="clave" type="password"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Contraseña
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                                    <div class="group">
                                                        
                                         <select class = "form-control input2" id = "rango" name = "nivel">
                                                  <option value = "1"> Trabajador </option>
                                                  <option value = "2"> RRHH </option>
                                                  <option value = "3"> Admin </option>
                                                </select>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nivel
                                                        </label>

                                                    </div>
                                                </div>
                                    </div>

                                    
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" name="registrar" class="btn color-azul btn-submit btn-lg" value="Registrar">
                                            </div>
                                        </div>
                                    </form>
  </div>
</div>
</div>

</div>
</div>