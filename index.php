<?php
session_start();
$usuario=$_SESSION['$userPerfil2'];
$codigo=$_SESSION['$clavePerfil2'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal de Peliculas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?update=<?php echo rand(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed small text">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-success navbar-light text-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block dropdown-menu-right">
        <a href="index.php" class="nav-link text-white">Inicio</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
</div>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <div class="text-center col-md-12">
          <img src="assets/img/LogoCabezera.png" alt="">
      </div>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item has-treeview">
             <a id="opcion4" href="forms/RegistrarPelicula.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Registro Peliculas
              </p>
             </a>
           </li>
           <li class="nav-item has-treeview">
            <a id="opcion4" href="forms/Perfiles.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Administrador Perfiles
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper" id="contenedorcentral">
    <section class="content-header" id="hola">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <div class="row">
              <div class="col-lg-12 text-center">
               <div>
                 <!--<img src="assets/img/LogoPrincipal.jpg" alt="">-->
                 <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="IngresoLoguin.php">Cerrar sesion</a></li>
                 </ol>
               </div>
               <br>
               <br>
               <br>
               <br>
               <img src="assets/img/LogoInicial.png" alt="">
             </div>
           </div>
         </div>
        </div>
       </div>
    </section>

    <?php

    if (isset($usuario)) {

    }else{

    echo  '<script type="text/javascript">'
      ,'window.location.href="http://localhost/Portal/IngresoLoguin.php";'
      ,'</script>';


}

    ?>

</body>
</html>
