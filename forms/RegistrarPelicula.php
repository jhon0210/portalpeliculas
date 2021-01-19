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
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css?update=<?php echo rand(); ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body class="hold-transition sidebar-mini small text">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="barrasup">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block dropdown-menu-right">
        <a href="../index.php" class="nav-link text-white">Inicio</a>
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
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <a href="../../index3.html" class="brand-link">
      <div class="text-center col-md-12">
         <img src="../assets/img/LogoCabezera.png">
      </div>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="../tables/ListaPeliculas.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Ver lista de peliculas
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper small text" id="contenidoform">
    <section class="content-header">
      <div class="col-lg-12 text-center">
         <img src="../assets/img/LogoEncabezado3.jpg" alt="">
      </div>
    </section>
    <div class="alert alert-light text-center">
    <strong>Registra aca tu peli!</strong> Atraves de este formulario subir a la plataforma los datos de la pelicula.
  </div>
    <section class="content">
      <div class="container-fluid">
          <div class="card-body" id="contenidocampos">
            <div class="row">
              <form class="form-group-sm col-md-12" id="IngresoPeliculas" method="POST">
              <div class="col-md-10" id="moduloVisita">
                <div class="form-group-sm col-md-10">
                  <label>Ingrese el titulo</label>
                  <div class="form-group-sm" id="titulopelicula">
                    <input type="text" class="form-control input-sm" name="tit" id="tit">
                  </div>
                  <br>
                </div>
                <div class="form-group-sm col-md-10">
                <label>Ingrese la Sinpsis</label>
                 <div class="form-group-sm" id="sinpsis">
                    <textarea type="text" class="form-control input-sm" name="sinop" id="sinop" rows="8" cols="80"></textarea>
                 </div>
                 <br>
                </div>
                <div class="form-group-sm col-md-10">
                <label>Ingrese el año</label>
                  <div class="form-group-sm" id="anioactual">
                    <select class="form-control input-sm" name="anio" id="anio">
                       <option value="2021">2021</option>
                       <option value="2020">2020</option>
                       <option value="2019">2019</option>
                       <option value="2018">2018</option>
                       <option value="2017">2017</option>
                       <option value="2016">2016</option>
                       <option value="2015">2015</option>
                       <option value="2014">2014</option>
                       <option value="2013">2013</option>
                       <option value="2012">2012</option>
                       <option value="2011">2011</option>
                       <option value="2010">2010</option>
                       <option value="2009">2009</option>
                       <option value="2008">2008</option>
                       <option value="2007">2007</option>
                       <option value="2006">2006</option>
                       <option value="2005">2005</option>
                       <option value="2004">2004</option>
                       <option value="2003">2003</option>
                       <option value="2002">2002</option>
                       <option value="2001">2001</option>
                       <option value="2000">2000</option>
                       <option value="1999">1999</option>
                       <option value="1998">1998</option>
                       <option value="1997">1997</option>
                       <option value="1996">1996</option>
                       <option value="1995">1995</option>
                       <option value="1994">1994</option>
                       <option value="1993">1993</option>
                       <option value="1992">1992</option>
                       <option value="1991">1991</option>
                       <option value="1990">1990</option>
                       <option value="1989">1989</option>
                       <option value="1988">1988</option>
                       <option value="1987">1987</option>
                       <option value="1986">1986</option>
                       <option value="1985">1985</option>
                       <option value="1984">1984</option>
                       <option value="1983">1983</option>
                       <option value="1982">1982</option>
                       <option value="1981">1981</option>
                       <option value="1980">1980</option>
                    </select>
                  </div>
                  <br>
                 </div>
                 <br>
                 <div class="form-group-sm col-md-10">
                  <label style="color:white;">Descripcion</label>
                  <button type="button" class="form-control input-sm btn btn-success" name="Regpelicula" id="Regpelicula"><small>Registrar Pelicula</small></button>
                 </div>
             </div>
              <div id="respuesta">

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Portal de Peliculas</a>.</strong> All rights
    reserved.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../assets/js/ajax.js?update=<?php echo rand(); ?>"></script>
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
