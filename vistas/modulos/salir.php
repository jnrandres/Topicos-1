<?php


if (isset($_SESSION['iniciarSesion'])  && $_SESSION['iniciarSesion'] == 'ok') {
} else {
  echo '<script>

  window.location = "registro";

  </script>';

  return;
}

session_destroy();

echo '<script> window.location="inicio" </script>';