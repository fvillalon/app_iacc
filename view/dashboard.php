<!DOCTYPE html>

<?php
require_once ("../sesion/sesion.php");
require_once ("universal/script/scripthead.php");
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once ("universal/bar/bsidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once ("universal/bar/bartop.php") ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Planificacion Anual</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">AGRAGAR PRODUCTO </h6>
                    </div>
                    <div class="card-body">

                        <button class="btn btn-danger pull-right"> CERRAR</button><br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>PRECIO</th>
                                    <th>ACCION</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th><strike>Producto TEST 1</strike></th>
                                    <th>$ 1.200</th>
                                    <th><button class="btn bg-warning"><i class="fa fa-exclamation"></i></button></th>
                                </tr>
                                <tr>
                                    <th>Producto TEST 2</th>
                                    <th>$ 2</th>
                                    <th><button class="btn bg-success"><i class="fa fa-plus"></i></button></th>
                                </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Planificacion </h6>
                    </div>
                    <div class="card-body">

                        <button class="btn btn-info"> AGREGAR PRODUCTO</button><br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ACCION</th>
                                    <th>Producto</th>
                                    <th>ENE</th>
                                    <th>FEB</th>
                                    <th>MAR</th>
                                    <th>ABR</th>
                                    <th>MAY</th>
                                    <th>JUN</th>
                                    <th>JUL</th>
                                    <th>AGO</th>
                                    <th>SEP</th>
                                    <th>OCT</th>
                                    <th>NOV</th>
                                    <th>DIC</th>
                                    <th>PRECIO</th>
                                    <th>TOTAL</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th><a class="btn bg-danger"><i class="fa fa-times"></i></a></th>
                                    <th>Producto TEST 1</th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th><input value="0" style="width: 50px;"/></th>
                                    <th>$ 1.200</th>
                                    <th>$ 12.000</th>

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
        <?php require_once ("universal/bar/barfooter.php") ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php require_once ("universal/script/scripteof.php") ?>

</body>

</html>
