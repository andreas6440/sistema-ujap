<?php
require_once "head.php";
?>
        <!-- Form-->
        <section id="banner">
            <div class="bg-color">
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
                                    <form>
                                        <div class="form-group">
                                            <label for="username">
                                                Nombre de Usuario
                                            </label>
                                            <input id="username" name="username" required="required" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">
                                                Contraseña
                                            </label>
                                            <input id="password" name="password" required="required" type="password"/>
                                        </div>
                                        <div class="form-group">
                                            <a class="form-recovery" href="#">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">
                                                Aceptar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="form-panel two">
                                <div class="form-header">
                                    <h1>
                                        Registro de Usuario
                                    </h1>
                                </div>
                                <div class="form-content">
                                    <form>
                                        <div class="form-group">
                                            <label for="username-r">
                                                Nombre de Usuario
                                            </label>
                                            <input id="username-r" name="username-r" required="required" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="cedula">
                                                Cédula
                                            </label>
                                            <input id="cedula" name="cedula" required="required" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-r">
                                                Contraseña
                                            </label>
                                            <input id="password-r" name="password-r" required="required" type="password"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                correo electrónico
                                            </label>
                                            <input id="email" name="email" required="required" type="email"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">
                                                Registrar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
require_once "fbody.php";?>