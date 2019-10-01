<?php
session_start();

require_once("config.php");
require_once("funciones.php");

if (!isset($_SESSION[$GLOBALS["APP_NAME"] . "_run"])) {
    echo "<script>location.href = 'login.html';</script>";
}

echo '<script>var RESPUESTA = false;</script>';
echo '<script>var ICON = "fa-exclamation-triangle";</script>';
echo '<script>var COLOR = "bg-danger";</script>';
echo '<script>var TITULO = "NO SE DEFINIO ACCION";</script>';
echo '<script>var MENSAJE = "NO SE DEFINIO ACCION";</script>';


if ($_POST["ACCION"] == "AGREGAR_USUARIO") {
    $validaciones = true;
    $MENSAJE = "";

    try {

        $enlace->autocommit(FALSE);

        if (!$_POST["RUN"]) // VALIDA RUT
        {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> DEBE INGRESAR UN RUN<br>";
            $validaciones = false;

        }
        if (!valida_rut($_POST["RUN"])) // VALIDA RUT
        {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> DEBE INGRESAR UN RUN VALIDO<br>";
            $validaciones = false;
        }



        if ($validaciones == true) {
            $run_formato = explode("-", $_POST["RUN"]);

            $run_usuario = $run_formato[0];
            $dv_usuario = $run_formato[1];
            $sql = "SELECT nombres FROM tm_usuario WHERE run_usuario =  '$run_usuario'";
            $result = $enlace->query($sql);

            if ($result->num_rows > 0) {
                while ($fila = $result->fetch_assoc()) {
                    $nombre_usuario_existe = $fila["nombres"];
                }
                $PHP_RESPUESTA = false;
                $PHP_ICON = "fa-exclamation-triangle";
                $PHP_COLOR = "bg-warning";
                $PHP_TITULO = "NO SE AGREGO USUARIO";
                $PHP_MENSAJE = "EL REGISTRO YA EXISTE<br>Nombre : $nombre_usuario_existe";
                throw new Exception(__LINE__);
            }
        }

        if (strlen($_POST["NOMBRE"]) < 3) {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> NOMBRE DEBE TENER AL MENOS 3 CARACTERES<br>";
            $validaciones = false;

        }

        if (strlen($_POST["APELLIDO1"]) < 3) {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> APELLIDO PATERNO DEBE TENER AL MENOS 3 CARACTERES<br>";
            $validaciones = false;
        }

        if (strlen($_POST["APELLIDO2"]) < 3) {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> APELLIDO MATERNO DEBE TENER AL MENOS 3 CARACTERES<br>";
            $validaciones = false;
        }
        if (!$_POST["ROL"]) // VALIDA RUT
        {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> DEBE SELECCIONAR UN PERFIL<br>";
            $validaciones = false;

        }
        if ($_POST["ESTABLECIMIENTO"] != 0) {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> DEBE SELECCIONAR UN ESTABLECIMIENTO<br>";
            $validaciones = false;
        }

        if ($_POST["DEPARTAMENTO"] != 0) {
            $MENSAJE .= "<i class=\"fa fa-exclamation fa-1x\"></i> DEBE SELECCIONAR UN DEPARTAMENTO<br>";
            $validaciones = false;
        }


        if ($validaciones == true) {


            $sql = "INSERT INTO tm_usuario (
                run_usuario,
                dv_usuario,
                nombres,
                apellido_paterno,
                apellido_materno,
                contrasena) VALUES (    
                '" . $run_usuario . "' ,
                '" . $dv_usuario . "' ,
                '" . $_POST["NOMBRE"] . "' ,
                '" . $_POST["APELLIDO1"] . "' ,
                '" . $_POST["APELLIDO2"] . "' ,
                MD5('123'))";
            $result1 = $enlace->query($sql);

            $ID_usuario = NULL;
            $sql = "SELECT ID_usuario FROM tm_usuario WHERE run_usuario = '$run_usuario'";
            $result2 = $enlace->query($sql);

            while($fila = $result2->fetch_assoc())
            {
                $ID_usuario = $fila["ID_usuario"];
            }

            $valida_perfiles = true;
            foreach ( $_POST["ROL"] as $item) {
                echo "<br>".$sql = "INSERT INTO tr_usuario_perfil (
                ID_usuario,
                ID_perfil
                ) VALUES (    
                '" . $ID_usuario . "' ,
                '" . $item . "') ";
                $result = $enlace->query($sql);
                if (!$result) {
                    $valida_perfiles = false;
                }
            }



            if (!$result || !$valida_perfiles) {
                $PHP_RESPUESTA = false;
                $PHP_ICON = "fa-exclamation-triangle";
                $PHP_COLOR = "bg-warning";
                $PHP_TITULO = "NO SE AGREGO USUARIO";
                $PHP_MENSAJE = 'ERROR AL INSERTAR EL REGISTRO';
                throw new Exception(__LINE__);
            }

            $enlace->commit();

        } else {
            $PHP_RESPUESTA = false;
            $PHP_ICON = "fa-exclamation-triangle";
            $PHP_COLOR = "bg-warning";
            $PHP_TITULO = "NO SE AGREGO USUARIO";
            $PHP_MENSAJE = "$MENSAJE";
            throw new Exception(__LINE__);
        }

        echo '<script>var RESPUESTA = true;</script>';
        echo '<script>var ICON = "fa-success";</script>';
        echo '<script>var COLOR = "bg-success";</script>';
        echo '<script>var MENSAJE = "SE AGREGO USUARIO CORRECTAMENTE";</script>';
        echo '<script>var TITULO = "EXITO";</script>';


    } catch (Exception $e) {
        $enlace->rollback();

        echo "<script>console.log('ERR LINEA " . $e->getMessage() . "');</script>";
        echo "<script>var RESPUESTA = false;</script>";
        echo "<script>var ICON = '$PHP_ICON';</script>";
        echo "<script>var COLOR = '$PHP_COLOR'</script>";
        echo "<script>var TITULO ='$PHP_TITULO';</script>";
        echo "<script>var MENSAJE = '$PHP_MENSAJE';</script>";
    }


}


?>
