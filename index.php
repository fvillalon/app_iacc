<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LOGIN PP IACC</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido a APP IACC</h1>
                  </div>
                  <form class="user" action="sesion/_login.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="user_run"  class="form-control form-control-user" id="inputRun"  required placeholder="Run: 123456789-K">
                    </div>
                    <div class="form-group">
                      <input type="password" name="user_pass" class="form-control form-control-user" id="inputPass"  required placeholder="Contraseña">
                    </div>

                    <button  class="btn btn-info btn-user btn-block">
                      Entrar
                    </button>

                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="view/forgot-password.html">Olvido su clave &#63;</a>
                  </div>

                </div>

                    <?php

                    error_reporting(~E_ALL);


                    $GLOBALS["IP"] = "localhost";
                    $GLOBALS["PASS"] = "Dany2008@";
                    $GLOBALS["APP_NAME"] = "template";
                    $GLOBALS["DB"] = "app_iacc";

                    $enlace = mysqli_connect("$GLOBALS[IP]", "root", "$GLOBALS[PASS]", "$GLOBALS[DB]");

                    if (!$enlace) {
                        ?>
                  <div class="text-center">
                        <h3>Atencion! Debe inicializar la base de datos del sistema !</h3>
                        <hr>

                        <a class="btn btn-warning" href="view/importardb.php">INICIALIZAR</a>
                    </div>
                    <br>
                    <?php

                    }

                    ?>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <div id="PHP_RESPONSE" style="display:none;"></div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Valida RUN-->
  <script src="js/jquery.rut.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($){

      $("form input#inputRun")
              .rut({formatOn: 'keyup', validateOn: 'keyup'})
              .on('rutInvalido', function(){
                $(this).addClass("text-danger");

              })
              .on('rutValido', function(){
                $(this).removeClass("text-danger");

              });

      $("form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(), // serializes the form's elements.
          success: function(data)
          {
            $("#PHP_RESPONSE").html(data);
            if(RESPUESTA == true)
            {
              location.href="view/dashboard.php";
            }else
            {
              alert ("Usuario y/o contraseña no validos.");
            }

          }
        });


      });




    });
  </script>


</body>

</html>
