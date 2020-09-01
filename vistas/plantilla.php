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

  <link rel="stylesheet" href="vistas/css/estilos.css">

  <!-- PLUGINS DE JS -->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

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

    require_once 'modulos/inicio.php';

  ?>

  <?php
    // PIE DE PAGINA
    require_once 'modulos/footer.php';
  ?>

</div>
<!-- ./wrapper -->

</body>

</html>