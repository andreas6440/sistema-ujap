        <section id="banner" >

            <div class="bg-color ">
                <div class="container-fluid">
                    <div class="materialContainer">
                        <div class="form">
                            <div class="form-toggle">
                            </div>
                            <div class="form-panel one">
                                <div class="form-header">
                                    <h1>
                                        Elegir tipo de usuario
                                    </h1>
                                </div>
                                <div class="form-content mr-auto">
                                    <form method="post" class="form2">                                  
                                      
                                          <div class="inputGroup">
                                            <input id="radio1" name="radio" type="radio" value="1"/>
                                            <label for="radio1">General</label>
                                          </div>
                                          <div class="inputGroup">
                                            <input id="radio2" name="radio" type="radio" value="2"/>
                                            <label for="radio2">Recursos Humanos</label>
                                          </div>
                                          
                                          <?php
                                        if($_SESSION['nivel']==3){
                                            echo '<div class="inputGroup">';
                                            echo '<input id="radio3" name="radio" type="radio" value="3" />';
                                            echo '<label for="radio3">Admin</label>';
                                            echo '</div>';
                                        }
                                        ?>


                                        <div class="form-group">
                                            <input class="boton-azul" type="submit" name="snivel" id="submit" value="Entrar">
                                        </div>
                                        <?php
                                        
                                            if(isset($_REQUEST['snivel'])){
                                                $_SESSION['opcion']=$_POST['radio'];
                                                $_SESSION['rut']='Perfil';
                                                echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
                                            }
                                        
                                        
                                        ?>

                                    </form>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
