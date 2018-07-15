<div id="Cticked" class="container-fluid my-5 punto">
   <h5 class=" pestaña"><i class="fa fa-filter" ></i> Usuario/ Bono alimenticio</h5>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    
                     <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class=" col-sm-12  ">
                      <h3 class="h4 mx-2 py-2 ">Tabla de bono alimenticio</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-sm-12 ">
                      <div class="select ml-auto ">
                        <select class="sele" name="slct" id="slct">
                          <option>Seleccione el año</option>
                          <option value="1">2018</option>
                          <option value="2">2017</option>
                          <option value="3">2016</option>
                          <option value="3">2015</option>
                          <option value="3">2014</option>
                        </select>
                      </div>
                    </div >
                      <div class="col-lg-3 col-sm-12  ">
                      <div class="select ml-auto  ">
                        <select class="sele" name="slctI" id="slctI">
                          <option>Mes Inicio</option>
                          <option value="1">enero</option>
                          <option value="2">blah</option>
                          <option value="3">blah</option>
                          <option value="3">blah</option>
                          <option value="3">blah</option>
                        </select>
                      </div>
                    </div >
                    <div class="col-lg-3 col-sm-12 ">
                      <div class="select ml-auto  ">
                        <select class="sele" name="slctF" id="slctF">
                          <option>Mes Fin</option>
                          <option value="1">enero</option>
                          <option value="2">blah</option>
                          <option value="3">blah</option>
                          <option value="3">blah</option>
                          <option value="3">blah</option>
                        </select>
                      </div>
                    </div >
                    <div class="col-lg-3 col-sm-12   ">                  
      
      
      <input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg" value="Buscar">
             </div>

                    </div>
                    </div>
                    </div>
                    <div class="card-body">
                      <table class="responsive-table table-hover">
    
    <thead>
      <tr class="h5 text-center">
        
                              <th scope="col">#</th>
                              <th scope="col">Nº de bono Alimenticio
                              </th>
                              <th scope="col">Asunto</th>
                              <th scope="col">Estado</th>
                              <th scope="col">Recibido</th>
                              <th scope="col">Revisado</th>
                              <th scope="col">Seleccionar</th>
                            
      </tr>
    </thead>
   
    <tbody>
      
      
       <?php
          require_once("Controllers/ContadorPDF_control.php");
          
          $cont=1;
          
          $row = SRecibos();
          
          while($row2 = pg_fetch_array($row)){
              
              setlocale(LC_TIME, "es_VE");
              $date = strftime("%B",strtotime($row2["fecha_c"]));
              
              echo '<tr>';
              echo '<th scope="row">'.$cont.'</th>';
              echo '<td data-title="N de Recibo">'.$row2["id_recibo"].'</td>';
              echo '<td data-title="Asunto">'.$date.'</td>';
              if($row2["fecha_v"]!=null){
                  echo '<td data-title="Estado">Revisado</td>';
              }else{
                  echo '<td data-title="Estado">Sin Revisar</td>';
              }
              echo '<td data-title="Fecha de entrega">'.$row2["fecha_c"].'</td>';
              echo '<td data-title="Fecha de revisado">'.$row2["fecha_v"].'</td>';
              echo '<td data-title="Info" ><button class="button type1">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver
                    </button></td>';
              echo '</tr>';
          }
          
          ?>
      
   
    
      
    
    
      
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
         