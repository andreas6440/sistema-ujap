<div id="recibo" class="container-fluid my-5">
   <h5 class=" pestaña"><i class="fa fa-filter" ></i> Usuario/ Recibo de pago</h5>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    
                     <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class=" col-sm-12  ">
                      <h3 class="h4 mx-2 py-2 ">Tabla de Recibos de Pago</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-2 col-sm-12 ">
                      <div class="select ml-auto mr-sm-auto">
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
                      <div class="col-lg-2 col-sm-12 mx-4 mx-md-4 ">
                      <div class="select ml-auto mr-sm-auto">
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
                    <div class="col-lg-2 col-sm-12  mx-md-4  ">
                      <div class="select ml-auto mr-sm-auto">
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
                    <div class="col-lg-4 col-sm-12  mx-4 ms-md-4 ">                      
      
      
      <input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg" value="Buscar">
             </div>

                    </div>
                    </div>
                    </div>
                    <?php 

                    $registros = 5;
                    $contador = 1;
                    
                    if(!isset($_GET['pagin'])) { 
                        $inicio = 0; 
                        $pagin = 1; 
                    } else { 
                        $pagin=$_GET['pagin'];
                        $inicio = ($pagin - 1) * $registros; 
                    } 
                    ?>
                    <div class="card-body">
                      <table class="responsive-table table-hover">
    
    <thead>
      <tr class="h5 text-center">
        
                              <th scope="col">#</th>
                              <th scope="col">Nº de Nomina
                              </th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Seleccionar</th>
                            
      </tr>
    </thead>
   
    <tbody>
      
      
       <?php
          require_once("Controllers/ContadorPDF_control.php");
          require_once("Controllers/SeleccionarDoc_control.php");
          
          $cont=1;
          
          $resultados = SRecibos();
          $total_registros = pg_num_rows($resultados);
          $row = SRecibosO($inicio,$registros);
          $total_paginas = ceil($total_registros / $registros);
        
        if ($total_registros) {
          while($row2 = pg_fetch_array($row)){
              
              setlocale(LC_TIME, "es_VE");
              $date = strftime("%B",strtotime($row2["fecha_c"]));
              
              echo '<tr>';
              echo '<th scope="row">'.$cont.'</th>';
              echo '<td data-title="N de Recibo">'.$row2["id_recibo"].'</td>';
             
              echo '<td data-title="Fecha de entrega">'.$row2["fecha_c"].'</td>';
             
        ?>
        <form method="post">
        <?php
              echo '<input type="text" value="'.$row2["id_recibo"].'" name="r'.$cont.'" hidden>';
              echo '<td data-title="Info" >
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <input type="submit" value="Ver" name="1'.$cont.'" class="button type1">
                    </td>';
              echo '</tr>';
              $cont = $cont + 1;
          }
        }
        $cont1 = 1;
        
        while($cont1<=$cont){
            
            if (isset($_REQUEST['1'.$cont1])) {
            
                seleccionarDoc(1,$cont);

            }
            
            $cont1 = $cont1 + 1;
            
        }
          
          ?>
      </form>
   
      
    
    
      
    </tbody>
  </table>
                    </div>
                    
                    <div class="card-footer">
                      <div class="pagination-wrapper">
                          <div class="pagination">
                           <?php
                            if ($total_registros) {

                                if (($pagin - 1) > 0) {
                                    echo "<a class='prev page-numbers' href='?pagin=".($pagin-1)."'>< Anterior</a>";
                                }

                                for ($i = 1; $i <= $total_paginas; $i++) {
                                    if ($pagin == $i) {
                                        echo "<a class='page-numbers current'>". $pagin ."</a>"; 
                                    } else {
                                        echo "<a class='page-numbers' href='?pagin=$i'>$i</a> "; 
                                    }	
                                }

                                if (($pagin + 1)<=$total_paginas) {
                                    echo "<a class='next page-numbers' href='?pagin=".($pagin+1)."'>Siguiente ></a>";
                                }	 
                            }
                            ?>
                            
                          </div>
                        </div>
                    </div>

                </div>
                
              </div>
            </div>
          </div>
         