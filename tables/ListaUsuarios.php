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
  <title>Lista de perfiles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <link href="css/toastr.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/style.css?update=<?php echo rand(); ?>">
</head>
<body class="hold-transition sidebar-mini small text">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="barrasupadmin">
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
          <img src="img/LogoCabezera.png">
       </div>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item has-treeview">
                 <a id="ConsultaVisitas" href="../forms/Perfiles.php" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                     Registrar nuevo usuario
                   </p>
                 </a>
               </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper small text text-center" id="panelcentral">
    <section class="content-header">
      <div class="col-lg-12 text-center">
         <img src="../assets/img/usuarios.png" alt="">
      </div>
    </section>
    <div class="container">
<div id="Datos1" class="card-body">
  <table id="example1" class="table table-bordered table-striped table-sm table-condensed table-responsive">
    <thead>
    <tr id="titulos">
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Clave</th>
      <th>Accion</th>
    </tr>
    </thead>
    <?php
        $conexion=mysqli_connect("localhost","root","","peliculas");
        $sql="select * from usuarios" ;
        $resultado=mysqli_query($conexion,$sql);
        while ($Registros=mysqli_fetch_array($resultado)) {
           ?>

           <tr>
               <td><?php echo $Registros['Nombre'] ?></td>
               <td><?php echo $Registros['Usuario'] ?></td>
               <td><?php echo $Registros['Clave'] ?></td>
               <td id="ModuloEditable" class="project-actions">

            <a id="ModificarDatos" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editProductModal" data-cod='<?php echo $Registros['Id'];?>' data-nomb='<?php echo $Registros['Nombre'];?>' data-users='<?php echo $Registros['Usuario'];?>'
              data-clav='<?php echo $Registros['Clave'];?>'>
                <i class="fas fa-pencil-alt">
                </i>

            </a>
            <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteUsuario" data-idelimuser='<?php echo $Registros['Id'];?>'>
                <i class="fas fa-trash">
                </i>

            </a>
        </td>
           </tr>

    <?php
    }?>
  </table>
</div>
  <div id="editProductModal" class="modal fade">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<form name="edit_product" id="edit_product">
            <div class="modal-header">
            <div class="col-lg-12 text-center">
            </div>
            </div>
  					<div class="modal-body">
                <div class="form-row">
  						   <div class="form-group col-md-12">
                  <input type="hidden" name="cod" id="cod">
                  <div class="form-group col-md-12" id="segcampo">
                    <label><small>Nombre</small></label>
                    <input type="text" name="nomb" id="nomb" class="form-control input-sm text-center">
                  </div>
  					     	<div class="form-group col-md-12">
  						  	 <label><small>Usuario</small></label>
  						     <input type="text" name="users" id="users" class="form-control input-sm text-center">
  					    	</div>
  						    <div class="form-group col-md-12">
  						  	  <label><small>Contraseña</small></label>
  						    	<input type="text" name="clav" id="clav" class="form-control input-sm text-center">
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
      <div id="deleteUsuario" class="modal fade">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<form name="delete_product" id="delete_user">
      					<div class="modal-header">
      						<h4 class="modal-title">Eliminar Registro</h4>
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      					</div>
      					<div class="modal-body">
      						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
      						<input type="hidden" name="idelimuser" id="idelimuser">
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
