
<?php

require_once('Controllers/NivelDePaso_control.php');

nivel1();

?>
   <div id="InfoTrabajador" class="container-fluid my-5 punto  ">
    <h5 class=" pestaña"><i class="fa fa-filter" ></i>  Información del usuario</h5>
              <div class="row wrapper">
                <div class="col-lg-8 ">
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
      
      <input class="form-control" type="search" placeholder="Nº de Cédula" id="scedula" name="scedula">
      <input type="submit" name="BuCedula" id="BuCedula" class="btn color-azul btn-submit btn-lg " value="Buscar">
       <div id="mensaje1" class="errores2 ">Completar Campo</div> 
      </div> 
      
                                                
    </form>
                   <?php
                          
                          require_once("Controllers/InfoBasica_control.php");
                          
                          if (isset($_REQUEST["BuCedula"])) {
                              $info = buscarinfo();
                              
                              $prueba = $info;
                              //$info2 = $info;

                              if(pg_num_rows($prueba)==0){
                                   echo '
                                    <label style="color:#DF0101"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Cedula incorrecta</label>
                                        ';
                              }
                               while($row = pg_fetch_array($info)){
                                   $_SESSION['mostrar']=$row["nombre"]." ".$row["apellido"];;
                                   $_SESSION['username'] = $row["usuario"];
                                   $_SESSION['user_d']=$_SESSION['username'];
                               }
                              echo '<div id="voldi"></div>';

                            }
                          
                          
                          ?>
                    </div >
                    </div>
                    </div>
                    </div>
                    <div class="card-body ">
                      <form method="post">
                                           <?php
                      
                      if (isset($_REQUEST["BuCedula"])) {
                              $info2 = buscarinfo();
                            while($row2 = pg_fetch_array($info2)){
                                
                                ?>
                                            <div class="row">
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
        
                                                <div class="col-md-3">
                                                    <div class="group">
                                                    <select class = "form-control input2" id = "rango" name = "nivel">
                                                      <option value = "1"> Trabajador </option>
                                                      <option value = "2"> RRHH </option>
                                                      <?php
                                                        if($_SESSION['nivel']==3){
                                                            echo '<option value = "3"> Admin </option>';
                                                        }
                                                        ?>
                                                      
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


                                        
                                        <div class="col-md-5">
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
                                        


                                    </div>
                                            
                                    <div class="row">
                                            <div class="col-md-4 ">
                                                <input type="submit" name="actualizarperfil" id="actualizarperfil" class="btn color-azul btn-submit btn-lg" value="Guardar Cambios">
                                               <?php
                                                require_once("Controllers/ActualizarUser_control.php");
                                                if(isset($_REQUEST['actualizarperfil'])){
                                                    ActualizarPerfil($_SESSION['username']);
                                                }
                                                 ?>
                                            </div>
                                        </div>
                                        <?php
                                  }
                          }
                           ?> 
                                    </form>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-12">
                  <div class="card ">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Restaurar contraseña </h3>

                    </div>
                    <div class="card-body ">
                      <form method="post">
                                            
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
                                                <?php
                                                    require_once("Controllers/ActualizarUser_control.php");
                                                    if(isset($_REQUEST['actualizarpass'])){
                                                        ActualizarPassword2($_SESSION['username']);
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
                         <form  class="form-inline" method="post">
                      <div class="select ml-auto ">
                        <select class="sele" name="slct" id="slct">
                          <option>Tipo de documento</option>
                          <option value="1">ARC</option>
                          <option value="2">Bono alimenticio</option>
                          <option value="3">Contancia simple</option>
                          <option value="4">Constancia de trayectoria</option>
                          <option value="5">Recibo de pago</option>

                        </select>
                      </div>
                      
             <div id="documentos" class="mx-2">     
      
      <input class="form-control activo"  type="search" name="NumDocumento"  id="NumDocumento" placeholder="Nº Documento">
      <div id="mensaje20" class="errores2 ">Completar Campo</div>
      </div>  
      <div class=" mr-auto ">
      <input type="submit" name="Burecibo" id="Burecibo" class="btn color-azul btn-submit btn-lg " value="Buscar">
      </div>                                  
      <div id="mensaje11" class="errores2 ">Completar Campo</div>                                          
    </form>
                   <?php
                          
                        require_once("Controllers/ContadorPDF_control.php");
                        require_once("Controllers/SeleccionarDoc_control.php");
                          
                          if((isset($_REQUEST['Burecibo']))and(isset($_SESSION['user_d']))){
                              
                              if($_POST['slct']==1){
                                  
                                  $row = SARCM($_POST['NumDocumento'], $_SESSION['user_d']);
                                  
                              }elseif($_POST['slct']==2){
                                  
                                  $row = SBonosM($_POST['NumDocumento'], $_SESSION['user_d']);
                                  
                              }elseif($_POST['slct']==3){
                                  
                                  seleccionarDoc(3,0,1);
                                  
                              }elseif($_POST['slct']==4){
                                  
                                  seleccionarDoc(4,0,1);
                                  
                              }elseif($_POST['slct']==5){

                                  $row = SRecibosM($_POST['NumDocumento'], $_SESSION['user_d']);
                                  
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
      
      <?php
        
        $cont=1;
        if(isset($row)){
          if($row){
              
              while($row2 = pg_fetch_array($row)){
              
                  setlocale(LC_TIME, "es_VE");
                  $date = strftime("%B",strtotime($row2["fecha_c"]));

                  echo '<tr>';
                  echo '<th scope="row">'.$cont.'</th>';
                  if($_POST['slct']==5){
                      echo '<td data-title="N de Recibo">'.$row2["id_recibo"].'</td>';
                  }elseif($_POST['slct']==1){
                      echo '<td data-title="N de ARC">'.$row2["id_arc"].'</td>';
                  }elseif($_POST['slct']==2){
                      echo '<td data-title="N de Bono">'.$row2["id_bono"].'</td>';
                  }
                  echo '<td data-title="Asunto">'.$date.'</td>';
                  if($row2["fecha_v"]!=null){
                      echo '<td data-title="Estado">Revisado</td>';
                  }else{
                      echo '<td data-title="Estado">Sin Revisar</td>';
                  }
                  echo '<td data-title="Fecha de entrega">'.$row2["fecha_c"].'</td>';
                  echo '<td data-title="Fecha de revisado">'.$row2["fecha_v"].'</td>';

            ?>
            <form method="post">
             <?php
                  if($_POST['slct']==5){
              echo '<input type="text" value="'.$row2["id_recibo"].'" name="r'.$cont.'" hidden>';
              echo '<td data-title="Info" >
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <input type="submit" value="Ver" name="1'.$cont.'" class="button type1">
                    </td>';
                  }elseif($_POST['slct']==1){
                      echo '<input type="text" value="'.$row2["id_arc"].'" name="r'.$cont.'" hidden>';
              echo '<td data-title="Info" >
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <input type="submit" value="Ver" name="2'.$cont.'" class="button type1">
                    </td>';
                  }elseif($_POST['slct']==2){
                      echo '<input type="text" value="'.$row2["id_bono"].'" name="r'.$cont.'" hidden>';
              echo '<td data-title="Info" >
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <input type="submit" value="Ver" name="6'.$cont.'" class="button type1">
                    </td>';
                  }
              echo '</tr>';
              $cont = $cont + 1;
          }
        }else{
              //aqui va la vaina pa que diga que no se encontro el doc
          }
        }
        
        
        $cont1 = 1;
        
        while($cont1<=$cont){
            
            if (isset($_REQUEST['1'.$cont1])) {
            
                seleccionarDoc(1,$cont,1);

            }elseif(isset($_REQUEST['2'.$cont1])) {
                
                seleccionarDoc(2,$cont,1);

            }elseif(isset($_REQUEST['6'.$cont1])) {
                
                seleccionarDoc(6,$cont,1);

            }
            
            $cont1 = $cont1 + 1;
            
        }
          
          ?>

     
     
  
      
    </tbody>
  </table>
                    </div>
                </div>
                
              </div>
            </div>
</div>