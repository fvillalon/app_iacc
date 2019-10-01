<?php
session_start();

require_once("config.php");

if(!isset($_SESSION[$GLOBALS["APP_NAME"]."_run"]))
{
    echo "<script>location.href = 'login.html';</script>";
}

 $sql = "SELECT nombres , nombre_departamento ,nombre_establecimiento FROM vw_funcionario
 WHERE run_usuario = ".$_SESSION[$GLOBALS["APP_NAME"]."_run"] ." ";
$result = $enlace->query($sql);

/*
CREATE VIEW vw_funcionario AS (
SELECT t1.run_funcionario , t1.nombres , t2.nombre_departamento , t3.nombre_establecimiento
    FROM tm_usuario t1
    INNER JOIN tm_departamento t2 ON t2.ID_departamento = t1.ID_departamento
    INNER JOIN tm_establecimiento t3 ON t3.ID_establecimiento = t2.ID_departamento
);
*/

while($fila = $result->fetch_assoc())
{
    $_SESSION[$GLOBALS["APP_NAME"]."_nombre"] = $fila["nombres"];
    $_SESSION[$GLOBALS["APP_NAME"]."_departamento"] = $fila["nombre_departamento"];
    $_SESSION[$GLOBALS["APP_NAME"]."_establecimiento"] = $fila["nombre_establecimiento"];
}

?>