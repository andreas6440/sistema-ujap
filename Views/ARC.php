<div class="container-fluid my-5 punto  ">
  <h5><i class="fa fa-filter" ></i> Usuario/ ARC</h5>
              <div class="row wrapper">
                <div class="col-12">
                  <div class="card ">
                    <div class="card-close">
                      <div class="dropdown">
                        <!--======================
                            posiblemente lo quite /aqui deberia que al seleccionarce un año , se vean los recibos de ese año
                            =====================-->
                            
                             <h5 class="h6 d-inline ">año: aqui pon el año seleccionado</h5>
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle "><i class="fa fa-caret-down"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-calendar"></i>2018</a><a href="#" class="dropdown-item remove"> <i class="fa fa-calendar"></i>2017</a>
                          <a href="#" class="dropdown-item remove"> <i class="fa fa-calendar"></i>2016</a>
                          <a href="#" class="dropdown-item remove"> <i class="fa fa-calendar"></i>2015</a>
                          <a href="#" class="dropdown-item remove"> <i class="fa fa-calendar"></i>2014</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4 mx-2">Tabla de ARC</h3>

                    </div>
                    <div class="card-body ">
                      <table class="responsive-table table-hover">
    
    <thead>
      <tr class="h5 text-center">
        
                              <th scope="col">#</th>
                              <th scope="col">Nº de ARC
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
          
          $row = SARC();
          
          while($row2 = pg_fetch_array($row)){
              
              setlocale(LC_TIME, "es_VE");
              $date = strftime("%B",strtotime($row2["fecha_c"]));
              
              echo '<tr>';
              echo '<th scope="row">'.$cont.'</th>';
              echo '<td data-title="N de ARC">'.$row2["id_arc"].'</td>';
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

                </div>
                
              </div>
            </div>
          </div>
         