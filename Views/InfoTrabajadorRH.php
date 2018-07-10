
<div id="InfoTrabajador" class="container-fluid my-5 punto  ">
    <h5 class=" pestaña"><i class="fa fa-filter" ></i> Recursos Humanos/ Información del usuario</h5>
              <div class="row wrapper">
                <div class="col-lg-8">
                  <div class="card ">
                    
                     <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-6 col-sm-12  ">
                      <h3 class="h4 mx-2 my-2 ">Perfil del Trabajador</h3>
                      </div>
                      <div class="col-lg-6 col-sm-12 ">
                         <form  class="form-inline ">
                      
                      
             <div class="mr-auto mx-2">     
      
      <input class="form-control" type="search" placeholder="Nº de Cédula" >
      <input type="submit" name="BuCedula" class="btn color-azul btn-submit btn-lg " value="Buscar">
             </div>                                    
                                                
    </form>
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


                                        
                                        <div class="col-md-5">
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


                                    </div>
                                    
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" name="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                               
                                            </div>
                                        </div>
                                    </form>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Restaurar Contraseña </h3>

                    </div>
                    <div class="card-body ">
                      <form method="post">
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="group">
                                                        <input class="input2" name="pass1" id="claveNueva" type=password required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nueva Contraseña
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
                                                            Repetir Contraseña
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                <div class="col-md-2 mx-2">
                                                  <input type="submit" name="actualizarpass" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                                
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
                         <form  class="form-inline ">
                      <div class="select ml-auto ">
                        <select id="sele" name="slct" id="slct">
                          <option>Tipo de documento</option>
                          <option value="1">ARC</option>
                          <option value="2">Bono Alimenticio</option>
                          <option value="3">Contancia Simple</option>
                          <option value="4">Constancia de Trayectoria</option>
                          <option value="5">Recibo de Pago</option>

                        </select>
                      </div>
                      
             <div id="documentos" class="mr-auto mx-2">     
      
      <input class="form-control" type="search" name="NumDocumento" id="NumDocumento" placeholder="Nº Documento" >
      <input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg " value="Buscar">
             </div>                                    
                                                
    </form>
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
                              <th scope="col">Fecha de emisión</th>
                              
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
<div class="card-footer">
                      <div class="pagination-wrapper">
  <div class="pagination">
    <a class="prev page-numbers" href="javascript:;">prev</a>
    <span aria-current="page" class="page-numbers current">1</span>
    <a class="page-numbers" href="javascript:;">2</a>
    <a class="page-numbers" href="javascript:;">3</a>
    <a class="page-numbers" href="javascript:;">4</a>
    <a class="page-numbers" href="javascript:;">5</a>
    <a class="page-numbers" href="javascript:;">6</a>
    <a class="page-numbers" href="javascript:;">7</a>
    <a class="page-numbers" href="javascript:;">8</a>
    <a class="page-numbers" href="javascript:;">9</a>
    <a class="page-numbers" href="javascript:;">10</a>
    <a class="next page-numbers" href="javascript:;">next</a>
  </div>
</div>
                    </div>
                </div>
                
              </div>
            </div>
</div>