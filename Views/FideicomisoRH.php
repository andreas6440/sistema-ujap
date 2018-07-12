<div id="Fideicomiso" class="container-fluid my-5 punto  ">
   <h5 class=" pestaña"><i class="fa fa-filter" ></i> Recursos humanos/ Fideicomiso</h5>
              <div class="row wrapper">
                <div class="col-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      
                      <h3 class="h4 mx-2 py-2 ">Fideicomiso</h3>
                     
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
                    <div class="card-body ">
                      <table class="responsive-table table-hover">
    
    <thead>
      <tr class="h5 text-center">
        
                              <th scope="col">#</th>
                              <th scope="col">Nº de fideicomiso
                              </th>
                              <th scope="col">Fecha de emisión</th>                              
                              <th scope="col">Seleccionar</th>
                            
      </tr>
    </thead>
   
    <tbody>
     
      <?php
          require_once("Controllers/ContadorPDF_control.php");
          require_once("Controllers/SeleccionarDoc_control.php");
          
          $cont=1;
          
          $resultados = SFideicomiso();
          $total_registros = pg_num_rows($resultados);
          $row = SFideicomisoO($inicio,$registros);
          $total_paginas = ceil($total_registros / $registros);
        
        if ($total_registros) {
          
          while($row2 = pg_fetch_array($row)){
              
              setlocale(LC_TIME, "es_VE");
              $date = strftime("%B",strtotime($row2["fecha_c"]));
              
              echo '<tr>';
              echo '<th scope="row">'.$cont.'</th>';
              echo '<td data-title="N de Fideicomiso">'.$row2["id_fideicomiso"].'</td>';
              echo '<td data-title="Fecha de entrega">'.$row2["fecha_c"].'</td>';
              ?>
              <form target="_blank" method="post">
              <?php
              echo '<input type="text" value="'.$row2["id_fideicomiso"].'" name="r'.$cont.'" hidden>';
              echo '<td data-title="Info" >
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <input type="submit" value="Ver" name="5'.$cont.'" class="button type1">
                    </td>';
              echo '</tr>';
              $cont = $cont + 1;
          }
        }
        
        $cont1 = 0;
        
          while($cont1<=$cont){
            
            if (isset($_REQUEST['5'.$cont1])) {
                seleccionarDoc(5,$cont);

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
         