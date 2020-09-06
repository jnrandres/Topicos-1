<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinica virtual | Perú</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- PLUGIN CSS -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->



  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="vistas/css/estilos.css">
  <!-- PLUGINS DE JS -->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- SweetAlert -->
    <script src="vistas/plugins/sweetalert/sweetalert2.all.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse ">

  <div class="wrapper">

    <?php
    //CABECERA DE LA WEB
    require_once 'modulos/nav.php';
    // BARRA LATERAL
    require_once 'modulos/barra-lateral.php';
    ?>

    <?php


    if (isset($_GET['ruta'])) {

      if (
        $_GET['ruta'] == 'inicio' ||
        $_GET['ruta'] == 'login' ||
        $_GET['ruta'] == 'olvidePassword' ||
        $_GET['ruta'] == 'registro' ||
        $_GET['ruta'] == 'especialidad-cardiologia' ||
        $_GET['ruta'] == 'especialidad-ginecologia' ||
        $_GET['ruta'] == 'especialidad-gastroenterologia' ||
        $_GET['ruta'] == 'especialidad-odontologia' ||
        $_GET['ruta'] == 'especialidad-oftalmologia' ||
        $_GET['ruta'] == 'especialidad-oncologia' ||
        $_GET['ruta'] == 'especialidad-otorrino' ||
        $_GET['ruta'] == 'especialidad-pediatria' ||
        $_GET['ruta'] == 'especialidad-traumatologia' ||
        $_GET['ruta'] == 'contacto' ||
        $_GET['ruta'] == 'diagnostico' // Solo el medico
      ) {
        require_once 'modulos/' . $_GET['ruta'] . '.php';
      } else {

        if (
          $_GET['ruta'] == 'historialMedico' ||
          $_GET['ruta'] == 'historialCitas' ||
          $_GET['ruta'] == 'evaluacionCovid' ||
          $_GET['ruta'] == 'buscaMedico' ||
          $_GET['ruta'] == 'programarCita' ||
          $_GET['ruta'] == 'menuCitas' ||
          $_GET['ruta'] == 'salir' ||
          $_GET['ruta'] == 'citaCompleta'
        ) {


          if( isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok' ){
            require_once 'modulos/' . $_GET['ruta'] . '.php';
          }else{
            require_once 'modulos/login.php';
          }



        } else {

          require_once 'modulos/404.php';
        }
      }
    } else {
      require_once 'modulos/inicio.php';
    }

    ?>

    <?php
    // PIE DE PAGINA
    require_once 'modulos/footer.php';
    ?>

  </div>
  <!-- ./wrapper -->

  <!-- SCRIPTS -->
  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/historialCitas.js"></script>
  <script src="vistas/js/programarCita.js"></script>
  <script src="vistas/js/buscaMedico.js"></script>

</body>

</html>