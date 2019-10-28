<?php
session_start();
require_once ("../config/config.db.php");

$fecha_bitacora = date("Y-m-d H:i:s");
$id_bitacora = $_SESSION[$GLOBALS["APP_NAME"] . "_ID_bitacora"];

$sql = "UPDATE bitacora SET
                    fecha_salida = '$fecha_bitacora'
                    WHERE 
                    ID_registro = '" . $id_bitacora ."'";
$result1 = $enlace->query($sql);

mysqli_close($enlace);

header("Location: ../index.php");

?>
