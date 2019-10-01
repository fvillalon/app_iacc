<?php

error_reporting(E_WARNING);


$GLOBALS["IP"] = "localhost";
$GLOBALS["PASS"] = "SUPERCLAVEADMIN";
$GLOBALS["APP_NAME"] = "template";
$GLOBALS["DB"] = "app_iacc";

$enlace = mysqli_connect("$GLOBALS[IP]", "root", "$GLOBALS[PASS]", "$GLOBALS[DB]");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>