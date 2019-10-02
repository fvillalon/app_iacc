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

<div class="container-fluid">
    <div class="card shadow mb-4" id="GLOBAL_ALERTA_DIV" style="display: none;">

        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="GLOBAL_ALERTA_COLOR">
            <h6 class="m-0 font-weight-bold "  style="color: #000;">
                <i class="fas" id="GLOBAL_ALERTA_ICON"></i> <span id="GLOBAL_ALERTA_TITULO"></span></h6>
            <i class="fas fa-times fa-sm fa-fw  fa-2x" id="GLOBAL_ALERTA_CERRAR"></i>
        </div>
        <div class="card-body" id="GLOBAL_ALERTA_MENSAJE">
            TEXTO
        </div>
    </div>
</div>
