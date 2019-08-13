</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="javascript:void();" >
        <strong> <i class="fas fa-mountain mr-2"></i>Piedra del Canada: El Órigen</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
            <!--li class="nav-item {{ (\Request::is('store/productos') || \Request::is('store/productos/*')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('store.productos') }}">
                    <i class="fas fa-box-open mr-1"></i>Productos
                </a>
              </li>
              <li class="nav-item {{ (\Request::is('store/servicios') || \Request::is('store/servicios/*')) ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('store.servicios') }}">
                      <i class="fas fa-cogs mr-1"></i>Servicios
                    </a>
              </li-->
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
                 
        <?php 
         if(@$_SESSION['usuario']){
          $user = json_decode($_SESSION['usuario']);
        ?>
           <li class="nav-item dropdown active">
                    <a class="nav-link border border-light rounded dropdown-toggle hoverable waves-light" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-running mr-2"></i><?php echo $user->nombreUsuario." ".$user->apellidosUsuario ;?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right menu-sup" aria-labelledby="navbarDropdownMenuLink">
                        <a href="../dashboard/state.php" class="dropdown-item hoverable waves-light <?php echo ($actual == 'state') ? 'dropdown-item-active' : '' ?>"><i class="fas fa-home mr-2"></i>Página principal</a>
                        
                        <a class="dropdown-item hoverable waves-effect"onclick="salir();">
                        <form class="nav_formu" id="logout-form" method="POST" action="../../controllers/auth.php">
                                            <input type="hidden" required value="logout" name="method"></form>
                                        <i class="fas fa-door-open mr-2"></i> Cerrar sesión
                                      </a>                      
                    </div>
                </li>
          <?php
          }else{
            ?>
            <li class="nav-item <?php echo ($actual == 'login') ? 'active' : '' ?>">
            <a href="login.php" class="nav-link border border-light rounded hoverable hoverable waves-light"
              >
              <i class="fas fa-user-check mr-2"></i>Consulta tu estado
            </a>
          </li>
          <li class="nav-item <?php echo ($actual == 'registro') ? 'active' : '' ?>">
            <a href="registro.php" class="nav-link border border-light rounded hoverable waves-light">
              <i class="fas fa-user-plus mr-2"></i>Registrarse
            </a>
          </li>
            <?php
          }
          ?>
          
        </ul>

      </div>

    </div>
  </nav>