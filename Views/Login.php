<?php 
require_once "Controllers/Login_control.php";
require_once "Controllers/Validaciones_control.php";
        $login = new Login_control;
        $val= new  Validacion;

 ?>
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
                                        Iniciar Sesión
                                    </h1>
                                </div>
                                <div class="form-content">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="username">
                                                Nombre de Usuario
                                            </label>
                                            <input  id="username" name="username" autocomplete="of"  autofocus  type="text"/>
                                            <div id="mensaje1" class="errores">Campo requerido</div>
                                            </div>
                                        <div class="form-group">
                                            <label for="password">
                                                Contraseña
                                            </label>
                                            <input id="password" name="password" autocomplete="of"  type="password"/>
                                             <div id="mensaje2" class="errores">Campo requerido</div>
                                       
                                        </div>
                                        <div class="form-group">
                                            <a id="OlClave" class="form-recovery" href="#">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <input class="boton-azul" type="submit" name="submit" id="submit" value="Entrar">
                                        </div>
                                    
                                    </form>
                                    <?php 
                                    if (isset($_POST['submit'])) {
                                        $re= $val->Login_val();
                                       if ($re==true) {
                                        $login->loguear();
                                        }
    
                                    } ?>

                                </div>
                            </div>
                            <div class="form-panel two">
                                <div class="form-header">
                                    <h1>
                                        Registro de Usuario
                                    </h1>
                                </div>
                                <div class="form-content container">
                                    <form method="post">
                                        <div class="form-row">
                                        <div class="form-group col-md-6 my-2">
                                            <label for="username-r">
                                                Nombre de Usuario
                                            </label>
                                            <input id="username-r" name="username-r" required="required" type="text"/>
                                        </div>
                                        <div class="form-group col-md-6 my-2">
                                            <label for="password-r">
                                                Contraseña
                                            </label>
                                            <input id="password-r" name="password-r" required="required" type="password"/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 my-2">
                                            <label for="cedula">
                                                Cédula
                                            </label>
                                            <input id="cedula" name="cedula" required="required" type="text"/>
                                        </div>
                                        <div class="form-group col-md-6 my-2">
                                            <label for="nombre">
                                                Nombre
                                            </label>
                                            <input id="nombre" name="nombre" required="required" type="text"/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 my-2">
                                            <label for="apellido">
                                                Apellido
                                            </label>
                                            <input id="apellido" name="apellido" required="required" type="text"/>
                                        </div>
                                        <div class="form-group col-md-6 my-2">
                                            <label for="telefono">
                                                Numero de telefono
                                            </label>
                                            <input id="telefono" name="telefono" required="required" type="text"/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 my-2">
                                            <label for="email">
                                                Correo electrónico
                                            </label>
                                            <input id="email" name="email" required="required" type="email"/>
                                        </div>
                                        
                                    </div>
                                    
                                           <div class="form-group">
                                            <input class="boton-blanco" type="submit" name="registrar" value="Registrar">
                                            
                                        </div>
                                    </form>

 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
