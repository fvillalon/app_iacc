<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <div>
        <b><?php echo  $_SESSION[$GLOBALS["APP_NAME"]."_departamento"]?></b></br>
        <small><?php echo  $_SESSION[$GLOBALS["APP_NAME"]."_establecimiento"] ?></small>
    </div>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $_SESSION[$GLOBALS["APP_NAME"]."_nombre"] ?></span>
                <i class="fa fa-lg fa-user-alt"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-power-off text-danger fa-sm fa-fw mr-2 "></i>
                    Salir
                </a>
            </div>
        </li>

    </ul>

</nav>