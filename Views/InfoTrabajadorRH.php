
<div id="InfoTrabajador" class="container-fluid my-5 punto  ">
    <h5 class=" pestaña"><i class="fa fa-filter" ></i> Recursos humanos/ Información del usuario</h5>
              <div class="row wrapper">
                <div class="col-lg-12">
                  <div class="card ">
                    
                     <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-5 col-sm-12  ">
                      <h3 class="h4 mx-2 my-2 ">Perfil del trabajador</h3>
                      </div>
                      <div class="col-lg-7 col-sm-12 ">
                         <form  class="form-inline" method="post">
                      
                      
             <div class="mr-auto mx-2">     
      
      <input class="form-control" type="search" placeholder="Nº de Cédula" name="scedula">
      <input type="submit" name="BuCedula" class="btn color-azul btn-submit btn-lg " value="Buscar">
             </div>                                    
                                                
    </form>
                   <?php
                          
                          require_once("Controllers/InfoBasica_control.php");
                          if (isset($_REQUEST["BuCedula"])) {
                              $info = buscarinfo();
                              echo"<br>";
                              echo"<h2>";
                               while($row = pg_fetch_array($info)){
                                   echo $row["nombre"];
                                   echo " ";
                                   echo $row["apellido"];
                                   $_SESSION['username'] = $row["usuario"];
                               }
                              echo"</h2>";

                            }
                          
                          ?>
                    </div >
                    </div>
                    </div>
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
                                            </div>
                                        </div>


                                    </div>
                                    
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" name="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                               <?php
                                                require_once("Controllers/ActualizarUser_control.php");
                                                if(isset($_SESSION['username'])){
                                                    ActualizarPerfil($_SESSION['username']);
                                                }
                                                 ?>
                                            </div>
                                        </div>
                                    </form>
  </div>
</div>
</div>

</div>
<div class="row wrapper">
                <div class="col-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-4 col-sm-12  ">
                      <h3 class="h4 mx-2 py-2 ">Documentos del usuario</h3>
                      </div>
                      <div class="col-lg-8 col-sm-12 ">
                         <form  class="form-inline" method="post" target="_blank">
                      <div class="select ml-auto ">
                        <select id="sele" name="slct" id="slct">
                          <option>Tipo de documento</option>
                          <option value="1">ARC</option>
                          <option value="2">Bono alimenticio</option>
                          <option value="3">Contancia simple</option>
                          <option value="4">Constancia de trayectoria</option>
                          <option value="5">Recibo de pago</option>

                        </select>
                      </div>
                      
             <div id="documentos" class="mr-auto mx-2">     
      
      <input class="form-control activo" type="search" name="NumDocumento" id="NumDocumento" placeholder="Nº Documento" >
      <input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg activo" value="Buscar">
             </div>                                    
                                                
    </form>
                   <?php
                          
                          if(isset($_REQUEST['Burecibo'])){
                              if($_POST['slct']==1){
                                  
                                  
                                  
                              }elseif($_POST['slct']==2){
                                  
                                  
                                  
                              }elseif($_POST['slct']==3){
                                  
                                  seleccionarDoc(3);
                                  
                              }elseif($_POST['slct']==4){
                                  
                                  seleccionarDoc(4);
                                  
                              }elseif($_POST['slct']==5){
                                  
                                  
                                  
                              }
                          }
                          
                          ?>
                    </div >
                    </div>
                    </div>
                    </div>
                    <div class="card-body ">
                      <table class="responsive-table table-hover">
    
    <thead>
      <tr class="h5 text-center">
        
                             <th scope="col">#</th>
                              <th scope="col">Nº de Documento
                              </th>
                              <th scope="col">Asunto</th>
                              <th scope="col">Estado</th>
                              <th scope="col">Recibido</th>
                              <th scope="col">Revisado</th>
                              <th scope="col">Seleccionar</th>
                            
      </tr>
    </thead>
   
    <tbody>
      
      <tr>
        <th scope="row">1</th>
        <td data-title="Fecha">15-1-2018</td>
        <td data-title="Nº de ARC">Universal</td>
        
        <td data-title="Info" ><button class="button type1">
                                 <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver
                                </button></td>
     
    
    </tr>

     
     
  
      
    </tbody>
  </table>
                    </div>
                </div>
                
              </div>
            </div>
</div>