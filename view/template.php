<!DOCTYPE html>

<?php require_once ("../sesion/sesion.php") ?> // DEBE SER RELATIVO
<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/".$GLOBALS["APP_NAME"]."/view/universal/script/scripthead.php") ?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/".$GLOBALS["APP_NAME"]."/view/universal/bar/bsidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/".$GLOBALS["APP_NAME"]."/view/universal/bar/bartop.php") ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/".$GLOBALS["APP_NAME"]."/view/universal/bar/barfooter.php") ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/".$GLOBALS["APP_NAME"]."/view/universal/script/scripteof.php") ?>

</body>

</html>
