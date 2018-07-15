
<div id="Configuraciones" class="container-fluid my-5 punto  ">
    <h5 class=" pestaña"><i class="fa fa-filter" ></i> Administrador/ Configuración</h5>
              <div class="row wrapper">
                <div class="col-lg-5">
                  <div class="card ">
                    
                     <div class="card-header d-flex align-items-center">
                      
                      <h3 class="h4 mx-2 my-2 ">Modificar firma de documentos</h3>
                      </div>
                      
                    
                    
                    <div class="card-body ">
                        <h5 class="h5 mx-2 my-2 ">Firma actual: nombre</h5>
                         <form  class="form-inline ">
                      
                      
             <div class="mr-auto mx-2">     
        
      <input class="form-control" type="search" placeholder="Nº de Cédula" >
      <input type="submit" name="BuCedula" class="btn color-azul btn-submit btn-lg " value="Modificar firma">
             </div>                                    
                                                
    </form>
                      
  </div>
</div>
</div>
<div class="col-lg-7 col-md-12">
                  <div class="card ">
                    
                     <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-5 col-sm-5  ">
                      <h3 class="h4  py-2 ">Rango de usuario </h3>
                      </div>
                      <div class="col-lg-7 col-sm-7 ">
                         <form  class="form-inline ">
                     
                      
             <div  class="mr-auto ">     
      
      <input class="form-control " type="search" name="Numcedula" placeholder="Nº Documento" >
      <input type="submit"  name="Bucedula" class="btn color-azul btn-submit btn-lg " value="Buscar">
             </div>                                    
                                                
    </form>
                    </div >
                    </div>
                    </div>
                    </div>
                      
                    
                    
                    <div class="card-body ">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                     <h5 class="h5 mx-2 my-2 ">Nombre: nombre y apellido</h5>
                      </div>
                    </div>
                    <div class="row">
                      
                           <form  class="form-inline ">
                      
                      
                 
    <div class="col-lg-6 ">
      <div class="select ml-auto mx-2 ">
                        <select class="sele" name="slct" id="slct">
                          <option>Seleccione el año</option>
                          <option value="1">2018</option>
                          <option value="2">2017</option>
                          <option value="3">2016</option>
                          <option value="3">2015</option>
                          <option value="3">2014</option>
                        </select>
                      </div>
                    </div>
<div class="col-lg-6 ">
      <input type="submit" name="burango" class="btn color-azul btn-submit btn-lg mx-2 " value="Modificar rango">
    </div>   
                                             
                                               
    </form>
                   
                    </div>
                    </div>
                        
                       
                      
  </div>

</div>
</div>
</div>
 <div class="row wrapper">
                <div class="col-lg-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4 mx-2">Nuevo usuario RRHH</h3>

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
                                                <input class="input2" name="Nusuario" id="Nusuario" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre de usuario
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" name="clave" id="clave" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Contraseña
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                                    <div class="group">
                                                        
                                         <select class = "form-control input2" id = "rango" name = "rango">
                                                  <option value = "Cedula"> RRHH </option>
                                                  <option value = "Rif"> trabajador </option>
                                                  <option value = "Pasaporte"> Admin </option>
                                                </select>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Rango
                                                        </label>

                                                    </div>
                                                </div>
                                    </div>

                                    
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" name="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Registrar">
                                                <?php
                                                require_once("Controllers/ActualizarUser_control.php");
                                                ActualizarPerfil($_SESSION['user']); ?>
                                            </div>
                                        </div>
                                    </form>
  </div>
</div>
</div>

</div>
</div>