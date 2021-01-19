<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Inicio sesion</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css?update=<?php echo rand(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container" id="Marco">
       <div class="col-md-12" id="contenedorsup">
         <div  class="text-center" id="contenedorlogo" class="img-responsive">
              <img src="assets/img/LogoPrincipal.jpg" alt="">
         </div>
         <div class="box success">
           <header>
              <h5>Panel de Ingreso</h5>
           </header>
         </div>
         <div class="col-md-6" id="contenedorimg">
           <img src="img/Portada.jpg" alt="" class="img-fluid img-responsive">
         </div>
         <form class="form-group col-md-3" id="ValPerfil" method="POST">
           <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario">
              <small id="emailHelp" class="form-text text-muted">Esta informacion es confidencial.</small>
           </div>
           <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" name="contraseña" id="contraseña">
              <small id="emailHelp" class="form-text text-muted">Esta informacion es confidencial.</small>
           </div>
           <div class="form-group">
             <div class="alert alert-danger" role="alert" id="MensajeErrorVacio">
               <strong>Advertencia!</strong>  Hay campos vacios
             </div>
             <div class="alert alert-danger" role="alert" id="MensajeUsuarioErrado">
               <strong>Advertencia!</strong>  El usuario no existe
             </div>
           </div>
           <div class="form-group form-check">
           </div>
           <button type="button" class="btn btn-warning btn-rect col-md-6" id="IngresoModulos">Ingresar</button>
         </form>
       </div>
     </div>

     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
     <script src="assets/vendor/php-email-form/validate.js"></script>
     <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
     <script src="assets/vendor/counterup/counterup.min.js"></script>
     <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="assets/vendor/venobox/venobox.min.js"></script>
     <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
     <script src="assets/vendor/typed.js/typed.min.js"></script>
     <script src="assets/vendor/aos/aos.js"></script>
     <script src="assets/js/main.js"></script>
     <script src="assets/js/ElementosConsulta.js"></script>
     <script src="assets/js/ajax.js"></script>

   </body>
</html>
