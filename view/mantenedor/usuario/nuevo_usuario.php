<!DOCTYPE html>

<?php
require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/sesion/sesion.php");
require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/script/scripthead.php") ?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/bsidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/bartop.php") ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">NUEVO USUARIO</h1>


                <div class="row">

                    <div class="col-lg-6">


                            <form class="" action="_accion_nuevo_usuario.php">

                                <table class="table table-bordered">
                                    <tr>
                                        <td>RUN</td>
                                        <td><input id="inputRun" name="RUN" class="form-control form-control-user" />
                                        <br><span style="display: none;" id="rutResponse"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nombre</td>
                                        <td><input name="NOMBRE" class="form-control form-control-user" /></td>
                                    </tr>
                                    <tr>
                                        <td>Apellido Paterno</td>
                                        <td><input name="APELLIDO1" class="form-control form-control-user" /></td>
                                    </tr>
                                    <tr>
                                        <td>Apellido Materno</td>
                                        <td><input name="APELLIDO2" class="form-control form-control-user" /></td>
                                    </tr>
                                    <tr>
                                        <td>Correo Institucional</td>
                                        <td><input placeholder="nombre.apellido" class="form-control form-control-user" /> @redsalud.gob.cl</td>
                                    </tr>
                                    <tr>
                                        <td>Establecimiento</td>
                                        <td>
                                            <select name="ESTAB">
                                                <option value="">SELECCIONE</option>
                                                <option value="0">ESTABLECIMIENTO TEST</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Departamento</td>
                                        <td>
                                            <select name="DPTO">
                                                <option value="">SELECCIONE</option>
                                                <option value="0">DEPARTAMENTO TEST</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Perfil</td>
                                        <td>
                                            <table >
                                                <tr>
                                                    <td>Administrador</td><td><input name="ROL[]" type="checkbox" value="0"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Funcionario</td><td><input name="ROL[]"type="checkbox" value="1"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Abastecimiento</td><td><input name="ROL[]"type="checkbox" value="2"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Finanzas</td><td><input name="ROL[]"type="checkbox" value="3"/></td>

                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Contraseña defecto</td>
                                        <td><input disabled class="form-control form-control-user" value="123" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-right">
                                                <button class="btn btn-success btn-user btn-block" >Registrar</button>
                                            </div></td>
                                    </tr>
                                    <input type="hidden" name="ACCION" value="AGREGAR_USUARIO" \>
                                </table>
                            </form>

                    </div>
                </div>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/bar/barfooter.php") ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/app_iacc/view/universal/script/scripteof.php") ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("form input#inputRun")
            .rut({formatOn: 'keyup', validateOn: 'keyup', useThousandsSeparator : false})
            .on('rutInvalido', function(){
                $(this).addClass("text-danger");
            })
            .on('rutValido', function(){
                $(this).removeClass("text-danger");

            });


        $(document).on("keyup","#inputRun",function(e){
            e.preventDefault(); // avoid to execute the actual submit of the form.

            $("#rutResponse").html("");
            $.ajax({
                type: "POST",
                url: "_accion_nuevo_usuario.php",
                data: { ACCION : "CONSULTA_RUN" , RUN : $(this).val()},
                success: function (data) {

                    $("#PHP_RESPONSE").html(data);
                    if (RESPUESTA == true) {
                        $("#rutResponse").html(MENSAJE);
                    } else {
                        $("#rutResponse").html(MENSAJE);
                    }

                }

        });


        $("form").submit(function (e) {
            $("#GLOBAL_ALERTA_DIV").hide('slide');
            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    $("#PHP_RESPONSE").html(data);
                    if (RESPUESTA == true) {
                        $("#GLOBAL_ALERTA_DIV").show('slide');
                        $("#GLOBAL_ALERTA_COLOR").addClass(COLOR);
                        $("#GLOBAL_ALERTA_TITULO").html(TITULO);
                        $("#GLOBAL_ALERTA_ICON").addClass(ICON);
                        $("#GLOBAL_ALERTA_MENSAJE").html(MENSAJE);

                    } else {
                        $("#GLOBAL_ALERTA_DIV").show('slide');
                        $("#GLOBAL_ALERTA_COLOR").addClass(COLOR);
                        $("#GLOBAL_ALERTA_TITULO").html(TITULO);
                        $("#GLOBAL_ALERTA_ICON").addClass(ICON);
                        $("#GLOBAL_ALERTA_MENSAJE").html(MENSAJE);
                    }

                }
            });
            $("html, body").animate({ scrollTop: 0 }, "slow");


        });

    });
</script>
</body>

</html>
