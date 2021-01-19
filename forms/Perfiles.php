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
  <title>Administrador de Usuarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/style.css?update=<?php echo rand(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body class="hold-transition sidebar-mini small text">
 <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#F5550A;">
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
         <img src="../tables/img/LogoCabezera.png">
      </div>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="../tables/ListaUsuarios.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Ver lista de usuarios
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper small text" style="background:white;">
    <section class="content-header">
      <div class="col-lg-12 text-center">
         <img src="../assets/img/administrador.jpg" alt="">
      </div>
    </section>
    <div class="alert alert-light text-center">
      <strong>Formulario de perfiles!</strong> Atraves de este formulario puedes generar tu usuario y contraseña.
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card-body" style="margin-left:20%;">
          <div class="row">
            <form class="form-group-sm col-md-12" id="IngresoUsuarios" method="POST">
              <div class="col-md-10" id="moduloVisita">
                <div class="form-group-sm col-md-10">
                  <label>Ingrese el nombre</label>
                  <div class="form-group-sm" id="nombreUsuario">
                        <input type="text" class="form-control input-sm" name="nom" id="nom" style="font-size:10px;">
                  </div>
                  <br>
                  <div class="alert alert-danger col-md-8" role="alert" id="ControlCaracteres">
                   <strong>Advetencia!</strong> El nombre debe contener almenos 5 caracteres
                  </div>
                 </div>
                 <div class="form-group-sm col-md-10">
                  <label>Ingrese el usuario</label>
                   <div class="form-group-sm" id="nickUsuario">
                      <input type="text" class="form-control input-sm" name="user" id="user" style="font-size:10px;">
                  </div>
                  <br>
                  <div class="alert alert-danger col-md-8" role="alert" id="ControlEspecial">
                    <strong>Advetencia!</strong> El usuario solo debe contener el signo: '_', letras y numeros, Ejemplo: Mgalvis_36 o MGALVIS_36
                  </div>
                 </div>
                 <div class="form-group-sm col-md-10">
                  <label>Ingrese la contraseña</label>
                    <div class="form-group-sm" id="contraseña">
                      <input type="password" class="form-control input-sm" name="clave" id="clave" style="font-size:10px;">
                    </div>
                  <br>
                  <div class="alert alert-danger col-md-8" role="alert" id="ControlPassword">
                    <strong>Advetencia!</strong> La clave debe contener almenos una mayuscula y un numero
                  </div>
                 </div>
                 <br>
                 <div class="form-group-sm col-md-10">
                  <label style="color:white;">Descripcion</label>
                  <button type="button" class="form-control input-sm btn btn-success" name="RegUsuario" id="RegUsuario"><small>Registrar Usuario</small></button>
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
      <b>Version</b> 3.0.5
    </div>
    <strong>Corporacion Civica Juventudes de Antioquia &copy; 2020-2021 <a href="http://www.cocjant-esp.com">COCJANT-ESP</a>.</strong> All rights
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
