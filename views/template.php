<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/x-icon" href="views/dist/img/oficial.png" />
  <title>Registro de Visitas | HNSEB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--==============================================
  PLUGINS DE CSS
  ===============================================-->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="views/plugins/daterangepicker/daterangepicker.css">


  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="views/plugins/toastr/toastr.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="views/dist/css/adminlte.css">
  <!--==============================================
  PLUGINS DE JS
  ===============================================-->
  <script src="views/plugins/jquery/jquery.min.js"></script>
  <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <!-- InputMask -->
  <script src="views/plugins/moment/moment.min.js"></script>
  <!-- date-range-picker -->
  <script src="views/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="views/plugins/datatables/jquery.dataTables.js"></script>
  <script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="views/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- jquery-validation -->
  <script src="views/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition layout-top-nav">
  <!-- Validación de Login -->
  <?php
  echo '<div class="wrapper">';
  // Cabecera Principal
  include('pages/cabecera.php');
  // Menú Principal
  include('pages/menu.php');
  if (isset($_GET["ruta"])) {
    // Rutas dinámicas
    if (
      $_GET["ruta"] == "inicio"
    ) {
      include "pages/" . $_GET["ruta"] . ".php";
    } else {
      include "pages/404.php";
    }
  } else {
    include "pages/inicio.php";
  }
  // Pie de página
  include('pages/pie.php');
  echo '</div>';
  ?>
  <!-- Scripts JS Propios -->
  <script type="text/javascript" src="views/dist/js/agenda.js"></script>
</body>

</html>