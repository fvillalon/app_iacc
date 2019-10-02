<!DOCTYPE html>

<?php
require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/sesion/sesion.php"); // DEBE SER RELATIVO
require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/script/scripthead.php");
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/bsidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/bartop.php") ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Mantenedor de Usuario
                    <button href="#" data-toggle="modal" data-target="#helpModal" class="fa-pull-right" ><i class="fa fa-question-circle"></i></button></h1>


                <!-- DataTales Example -->


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> </h6>
                    </div>
                    <div class="card-body">

                        <a href="nuevo_usuario.php" class="btn btn-info"> AGREGAR USUARIO</a><br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ACCION</th>
                                    <th>RUN</th>
                                    <th>Nombre</th>
                                    <th>Departamento</th>
                                    <th>Establecimiento</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>
                                        <button class="btn bg-danger text-white"><i class="fa fa-times"></i></button>
                                        <button class="btn bg-info  text-white"><i class="fa fa-pencil-alt"></i></button>
                                    </th>
                                    <th>1-9</th>
                                    <th>Administrador</th>
                                    <th>Departamento TEST</th>
                                    <th>Establecimiento TEST</th>


                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn bg-danger text-white"><i class="fa fa-times"></i></button>
                                        <button class="btn bg-info  text-white"><i class="fa fa-pencil-alt"></i></button>
                                    </th>
                                    <th>2-7</th>
                                    <th>NUEVO USUARIO TEST</th>
                                    <th>Departamento TEST</th>
                                    <th>Establecimiento TEST</th>


                                </tr>

                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/barfooter.php") ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/script/scripteof.php") ?>

</body>

</html>
