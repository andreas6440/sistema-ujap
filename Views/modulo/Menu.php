<nav class="navbar navbar-dark bg-dark fixed-top punto  ">
   
   <img class="img-responsive img-rounded logo-little mx-2" src="Views/Assets/img/logo.ico" >
   <div class="navbar-header mr-auto opcion ">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                    
                  <div class="brand-text brand-big "><span>Universidad </span><strong> José Antonio Páez</strong></div>
                  <div class="brand-text brand-small "><strong>Ujap</strong></div></a>
                <button id="show-sidebar" type="button" class="btn btn-dark my-0"><i class="fa fa-bars"></i></button>
    </div>

    <div class="navbar-header ml-auto">
                <div id="opciones" class="navbar-brand gru-minuscula ">
                          
                
                
                <a href="?p=Perfil" class="brand-big  d-inline mx-2 ">
                    <span> Perfil <i class="fa fa-user-o"></i> </span>
                </a>
                <a href="?p=Salir" class="brand-big  d-inline mx-2 ">
                    <span> Cerrar Sesión <i class="fa fa-sign-out"></i> </span>
                </a>
            
                 </div>
                
              </div>
  </nav>
</div>
   <div class="page-wrapper cool-theme ">
        
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand p-2 mx-2">
                    <img class="img-responsive img-rounded logo-little" src="Views/Assets/img/logo.ico" >
                    <a href="#" class="mx-2"> UJAP</a>
                    <div id="close-sidebar">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/bootstrap4/assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search baba">
                    

                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>  
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        
                        <li>
                            <a href="?p=ARC">
                                <i class="fa fa-bar-chart" ></i>
                                <span>ARC</span>
                            </a>
                        </li>
                       
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-clipboard"></i>  Constancia de Trabajo
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
          <form target="_blank" method="post">
              <input type="submit" class="dropdown-item" value="Simple" name="constanciab">
          </form>
          <?php 
              
              if (isset($_REQUEST['constanciab'])) {
                
                    $_SESSION['doc'] =  3;
                    echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

                }
              
              ?>
          <form target="_blank" method="post">
              <input type="submit" class="dropdown-item" value="Trayectoria" name="constanciad">
          </form>
          <?php 
              
              if (isset($_REQUEST['constanciad'])) {
                
                    $_SESSION['doc'] =  4;
                    echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

                }
              
              ?>
        </div>
      </li>
       <li>
                            <a href="?p=CestaTicked">
                                <i class="fa fa-cutlery" ></i>
                                <span>Bono alimenticio</span>
                            </a>
                        </li>
                        <li>
                            <a href="?p=Recibo">
                                <i class="fa fa-file-text"></i>
                                <span>Recibo de Pago</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div   class="sidebar-footer">
                
                
                <a href="?p=Perfil" class="baba">
                    <i class="fa fa-user"></i>
                    
                </a>
                <a href="#" class="baba">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        
       
        <!-- sidebar-wrapper  -->
        <main class="page-content">

        