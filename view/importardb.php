<?php
session_start();
require_once ("config/config.db.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="" >
<style>
    .container {
        margin-top: 30px;
        width: 400px;
    }
</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row">


        <!-- Nested Row within Card Body -->
        <form method="post">
            <h2>LEA ATENTAMENTE!</h2> <br>
            <p>A continuacion se importara la BASE DE DATOS del sistema, esta es necesaria para que el sistema pueda
                funcionar.<br>
                Si ejecuta esta accion se eliminara cualquier contenido previo cargado y se ejecutara una instalacion
                limpia de la BASE DE DATOS.<br>
                Para confirmar escriba "CONFIRMAR" (en mayusculas sin comillas)  y luego presione el boton ACEPTAR
            </p>
            <input name="CLAVE" placeholder="ESCRIBA AQUI" ><br></br>
            <button class="btn btn-success" name="CONFIRMAR" value="CONFIRMAR" id="CONFIRMAR">ACEPTAR</button>

            <button class="btn btn-danger"   id="CANCELAR"onclick="location.href='index.php'" type="button">CANCELAR</button>
        </form>


    </div>

    <hr>

    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>




</div>
<div id="PHP_RESPONSE" style="display:none;"></div>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Valida RUN-->
<script src="../js/jquery.rut.min.js"></script>
<script>

    $(document).ready(function(){


        $(document).on("click", "#CONFIRMAR", function() {

            $(this).prop("disabled", true);
            $(this).addClass("bg-secondary");

            var $bar = $('.progress-bar');
            var progress = setInterval(function () {


                if ($bar.width() >= 300) {
                    clearInterval(progress);
                    $('.progress').removeClass('active');
                } else {
                    $bar.width($bar.width() + 40);
                }
                //$bar.text($bar.width() / 3.5 + "%");
            }, 2000);

            $("#CANCELAR").prop("disabled", true);
            $("#CANCELAR").addClass("bg-secondary");

        });

    });



</script>


</body>

</html>


<?php

if (isset($_POST["CONFIRMAR"]) && $_POST["CLAVE"] == "CONFIRMAR") {

// Name of the file
    $filename = 'bd/ini-app_iacc.sql';
// MySQL host
    $mysql_host = $GLOBALS["IP"];
// MySQL username
    $mysql_username = $GLOBALS["DB_USER"];
// MySQL password
    $mysql_password = $GLOBALS["DB_PASS"];
// Database name
    $mysql_database = $GLOBALS["DB_NAME"];

// Connect to MySQL server
    $con = @new mysqli($mysql_host, $mysql_username, $mysql_password);

// Check connection
    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $con->connect_errno;
        echo "<br/>Error: " . $con->connect_error;
    }

// Temporary variable, used to store current query
    $templine = '';
// Read in entire file
    $lines = file($filename);
// Loop through each line
    foreach ($lines as $line) {
// Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '')
            continue;

// Add this line to the current segment
        $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';') {
            // Perform the query
            $con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': <br /><br />');
            // Reset temp variable to empty
            $templine = '';
        }
    }
    echo "Exito al Importar la base de datos";

    $con->close($con);
    $_POST = array();

}
else if(isset($_POST["CONFIRMAR"]) && $_POST["CLAVE"] != "CONFIRMAR")
{
    echo "<h1>Debe CONFIRMAR</h1>";
}


?>



