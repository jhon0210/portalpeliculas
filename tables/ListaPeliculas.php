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
  <title>Lista Peliculas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <script src="daterangepicker/daterangepicker.js?update=<?php echo rand(); ?>"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css?update=<?php echo rand(); ?>">
  <!--<link rel="stylesheet" href="Plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">-->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/style.css?update=<?php echo rand(); ?>">
  <script src="plugins/jquery/jquery.min.js"></script>
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
    <a href="/index.htm" target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=400'); return false;">
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
                 <a id="ConsultaVisitas" href="../forms/RegistrarPelicula.php" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                     Registrar nueva pelicula
                   </p>
                 </a>
               </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper small text text-center" style="background:white;">
    <section class="content-header">
      <div class="col-lg-12 text-center">
         <img src="../assets/img/LogoInicial.png" alt="">
      </div>
    </section>
    <div class="container">
     <div id="Datos1" class="card-body" style="background:white;">
      <table id="example2" class="table table-bordered table-striped table-sm table-condensed table-responsive">
       <thead>
        <tr style="background:#70A332;color:white;">
          <th>Titulo</th>
          <th>Sinopsis</th>
          <th>Año de estreno</th>
          <th>Accion</th>
        </tr>
       </thead>

    <?php

        $conexion=mysqli_connect("localhost","root","","peliculas");
        $sql="select * from inventariopelis" ;
        $resultado=mysqli_query($conexion,$sql);
        while ($Registros=mysqli_fetch_array($resultado)) {
           ?>

           <tr>
               <td><?php echo $Registros['Titulo'] ?></td>
               <td><?php echo $Registros['Simpnosis'] ?></td>
               <td><?php echo $Registros['Anio'] ?></td>
               <td class="project-actions">

            <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editPeli" data-idpeli='<?php echo $Registros['Id'];?>' data-titpeli='<?php echo $Registros['Titulo'];?>' data-sinopeli='<?php echo $Registros['Simpnosis'];?>'
              data-anactual='<?php echo $Registros['Anio'];?>'>
                <i class="fas fa-pencil-alt">
                </i>

            </a>
            <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteRegPeli" data-ideliminpeli='<?php echo $Registros['Id'];?>'>
                <i class="fas fa-trash">
                </i>

            </a>
        </td>
           </tr>

    <?php
    }?>


  </table>
</div>



  <div id="editPeli" class="modal fade">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<form name="edit_pelicula" id="edit_pelicula">
            <div class="modal-header">
            <div class="col-lg-12 text-center">
            </div>
            </div>
  					<div class="modal-body">
                <div class="form-row">
  						<div class="form-group col-md-12">
                <input type="hidden" name="idpeli" id="idpeli">
                <div class="form-group col-md-12" id="segcampo">
                  <label><small>Titulo</small></label>
                  <input type="text" name="titpeli" id="titpeli" class="form-control input-sm text-center" style="font-size:9px;">
                </div>
  						<div class="form-group col-md-12">
  							<label><small>Sinopsis</small></label>
  							<input type="text" name="sinopeli" id="sinopeli" class="form-control input-sm text-center" style="font-size:9px;">
  						</div>
  						<div class="form-group col-md-12">
  							<label><small>Año</small></label>
  							<input type="text" name="anactual" id="anactual" class="form-control input-sm text-center" style="font-size:9px;">
  						</div>
	           </div>
  					</div>
  					<div class="modal-footer">
  						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
  						<input type="submit" class="btn btn-info" value="Actualizar">
  					</div>
  				</form>
        </div>
        </div>
  			</div>
  		</div>

      <div id="deleteRegPeli" class="modal fade">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<form name="delete_pelicula" id="delete_pelicula">
      					<div class="modal-header">
      						<h4 class="modal-title">Eliminar Registro</h4>
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      					</div>
      					<div class="modal-body">
      						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
      						<input type="hidden" name="ideliminpeli" id="ideliminpeli">
      					</div>
      					<div class="modal-footer text-center">
      						<input type="submit" class="btn btn-danger" value="Eliminar">
      					</div>
      				</form>
      			</div>
      		</div>
      	</div>
    </div>

  <div class="container content-wrapper col-lg-12" id="contenido" style="background:white;margin-left:0%;width:auto;">
            <div class="card" style="background:white;">
              <div id="ResultadoVisitas">

              </div>

              <div id="ResultadoMicroRutas">

              </div>

              <div id="ResultadoConcertacion">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../assets/js/ajax.js?update=<?php echo rand(); ?>"></script>
<script src="../assets/boostrap/js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
