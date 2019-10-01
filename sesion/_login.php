<?php
session_start();
require_once ("../config/config.db.php");

$user_run = $_POST['user_run'];
$user_pass = md5($_POST['user_pass']); // encriptada


$run_valido = str_replace(".", "", "$user_run"); // reemplaza los puntos por espacion en blanco
$run_formato = explode("-", $run_valido);

$run = $run_formato[0];
$dv = strtoupper($run_formato[1]); // lo pasa a mayusculas


$sql = "SELECT run_usuario, nombres , ID_usuario  FROM tm_usuario WHERE run_usuario = '$run' AND dv_usuario = '$dv' AND contrasena = '$user_pass'";
$result = $enlace->query($sql);

while ($fila = $result->fetch_assoc()) {

    $_SESSION[$GLOBALS["APP_NAME"] . "_run"] = $fila["run_usuario"];
    $ID_usuario = $fila["ID_usuario"];

}

$fecha_bitacora = date("Y-m-d H:i:s");

$sql = "INSERT INTO bitacora (
                    ID_usuario,
                    fecha_ingreso
                    ) VALUES (    
                    '" . $ID_usuario . "' ,
                    '" . $fecha_bitacora . "' 
                    )";
$result1 = $enlace->query($sql);

$sql = "SELECT ID_registro FROM bitacora WHERE ID_usuario = '$ID_usuario' AND fecha_ingreso = '$fecha_bitacora'";
$result2 = $enlace->query($sql);

while ($fila = $result2->fetch_assoc()) {
    $_SESSION[$GLOBALS["APP_NAME"] . "_ID_bitacora"] = $fila["ID_registro"];
}

if ($ID_usuario && $result1) {
    echo '<script>var RESPUESTA = true;</script>';
} else {
    echo '<script>var RESPUESTA = false;</script>';
}

mysqli_close($enlace);

?>
