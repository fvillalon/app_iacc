<?php
session_start();

require_once ("config/config.db.php");

if(!isset($_SESSION[$GLOBALS["APP_NAME"]."_run"]))
{
    echo "<script>location.href = 'login.html';</script>";
}

if($_POST["ACCION"] == "AGREGAR_PRODUCTO")
{

    $sql = "INSERT INTO tt_planificacion_detalle (ID_planificacion, ID_producto) VALUES ( '". $_POST["ID_PLAN"]."' , '". $_POST["ID_producto"]."')";

    $result = $enlace->query($sql);

    if($result)
    {
        echo'<script>var RESPUESTA = true;</script>';
    }
    else
    {
        echo'<script>var RESPUESTA = false;</script>';
    }

}


if($_POST["ACCION"] == "UPDATE_MES_CANTIDAD")
{
    $mes = $_POST["MES"];

    $sql = "UPDATE tt_planificacion_detalle
    SET cant_".$mes." = '" . $_POST["CANT_MES"]. "' , precio = '". $_POST["PRECIO"]."'
     WHERE ID_PLANIFICACION = '" . $_POST["ID_PLAN"]. "'  AND  ID_producto = '". $_POST["PRECIO"]."'";
    $result = $enlace->query($sql);

    if($result)
    {
        echo'<script>var RESPUESTA = true;</script>';
    }
    else
    {
        echo'<script>var RESPUESTA = false;</script>';
    }

}


if($_POST["ACCION"] == "QUITAR_PRODUCTO")
{

    $sql = "DELETE FROM tt_planificacion_detalle
     WHERE ID_PLANIFICACION = '" . $_POST["ID_PLAN"]. "'  AND  ID_producto = '". $_POST["PRECIO"]."'";
    $result = $enlace->query($sql);

    if($result)
    {
        echo'<script>var RESPUESTA = true;</script>';
    }
    else
    {
        echo'<script>var RESPUESTA = false;</script>';
    }

}



?>
