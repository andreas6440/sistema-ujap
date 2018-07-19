<div id="ARC" class="container-fluid my-5 punto  ">
  <h5 class=" pestaña"><i class="fa fa-filter" ></i> Usuario/ ARC</h5>
              <div class="row wrapper">
                <div class="col-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <div class="container-fluid">
                        <div class="row">
                          <div class=" col-sm-12  ">
                      <h3 class="h4 mx-2 py-2 ">Tabla de Recibos de Pago</h3>
                      </div>
                    </div>
                    <form method="get">
                    <div class="row">
                      <div class="col-lg-3 col-sm-12 ">
                      <div class="select ml-auto ">
                        <select class="sele" name="slct" id="slct">
                          <option>Seleccione el año</option>
                          <option value=<?php echo date('Y');?>><?php echo date('Y');?></option>
                          <option value=<?php echo date('Y')-1;?>><?php echo date('Y')-1;?></option>
                          <option value=<?php echo date('Y')-2;?>><?php echo date('Y')-2;?></option>
                          <option value=<?php echo date('Y')-3;?>><?php echo date('Y')-3;?></option>
                          <option value=<?php echo date('Y')-4;?>><?php echo date('Y')-4;?></option>
                        </select>
                      </div>
                    </div >
                      <div class="col-lg-3 col-sm-12  ">
                      <div class="select ml-auto  ">
                        <select class="sele" name="slctI" id="slctI">
                          <option>Mes Inicio</option>
                          <option value="1">Enero</option>
                          <option value="2">Febrero</option>
                          <option value="3">Marzo</option>
                          <option value="4">Abril</option>
                          <option value="5">Mayo</option>
                          <option value="6">Junio</option>
                          <option value="7">Julio</option>
                          <option value="8">Agosto</option>
                          <option value="9">Septiembre</option>
                          <option value="10">Octubre</option>
                          <option value="11">Noviembre</option>
                          <option value="12">Diciembre</option>
                        </select>
                      </div>
                    </div >
                    <div class="col-lg-3 col-sm-12 ">
                      <div class="select ml-auto  ">
                        <select class="sele" name="slctF" id="slctF">
                          <option>Mes Fin</option>
                          <option value="1">Enero</option>
                          <option value="2">Febrero</option>
                          <option value="3">Marzo</option>
                          <option value="4">Abril</option>
                          <option value="5">Mayo</option>
                          <option value="6">Junio</option>
                          <option value="7">Julio</option>
                          <option value="8">Agosto</option>
                          <option value="9">Septiembre</option>
                          <option value="10">Octubre</option>
                          <option value="11">Noviembre</option>
                          <option value="12">Diciembre</option>
                        </select>
                      </div>
                    </div >
                     <div class="col-lg-3 col-sm-12   ">                      
      
      
      <input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg" value="Buscar">
             </div>

                    </div>
                    </form>
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
          require_once("Controllers/SeleccionarDoc_control.php");
          
          $cont=1;
          
          $resultados = SARC($_SESSION['user']);
          $total_registros = pg_num_rows($resultados);
          $row = SARCO($inicio,$registros,$_SESSION['user']);
          $total_paginas = ceil($total_registros / $registros);
        
        if ($total_registros) {
          
          while($row2 = pg_fetch_array($row)){
              
              $fechac=$row2["fecha_c"];
              if(isset($_REQUEST['Burecibo'])){
                  if(($_GET['slct']==substr($fechac, 0, 4))and($_GET['slctI']<=substr($fechac, 5, 2))and($_GET['slctF']>=substr($fechac, 5, 2))){

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
                  echo '<td data-title="Fecha de entrega">'.$fechac.'</td>';
                  echo '<td data-title="Fecha de revisado">'.$row2["fecha_v"].'</td>';
                  ?>
                  <form method="post">
                  <?php
                  echo '<input type="text" value="'.$row2["id_arc"].'" name="r'.$cont.'" hidden>';
                  echo '<td data-title="Info" >
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <input type="submit" value="Ver" name="2'.$cont.'" class="button type1">
                        </td>';
                  echo '</tr>';
                  $cont = $cont + 1;
              }
              }else{
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
                  echo '<td data-title="Fecha de entrega">'.$fechac.'</td>';
                  echo '<td data-title="Fecha de revisado">'.$row2["fecha_v"].'</td>';
                  ?>
                  <form method="post">
                  <?php
                  echo '<input type="text" value="'.$row2["id_arc"].'" name="r'.$cont.'" hidden>';
                  echo '<td data-title="Info" >
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <input type="submit" value="Ver" name="2'.$cont.'" class="button type1">
                        </td>';
                  echo '</tr>';
                  $cont = $cont + 1;
              }
          }
        }
        
        $cont1 = 0;
        
          while($cont1<=$cont){
            
            if (isset($_REQUEST['2'.$cont1])) {
                seleccionarDoc(2,$cont,0);

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
         