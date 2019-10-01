<?php

require_once ("config.ini.php");

$enlace = mysqli_connect("$GLOBALS[IP]", "$GLOBALS[DB_USER]", "$GLOBALS[DB_PASS]", "$GLOBALS[DB_NAME]");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>