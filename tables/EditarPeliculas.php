<?php
	if (empty($_POST['idpeli'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['idpeli'])){
	$conexion=mysqli_connect('localhost','root','','peliculas');
	// escaping, additionally removing everything that could be (html/javascript-) code

	  //$cod = mysqli_real_escape_string($conexion,(strip_tags($_POST["cod"],ENT_QUOTES)));
	  $titpeli = mysqli_real_escape_string($conexion,(strip_tags($_POST["titpeli"],ENT_QUOTES)));
	  $sinopeli = mysqli_real_escape_string($conexion,(strip_tags($_POST["sinopeli"],ENT_QUOTES)));
	  $anioestreno = mysqli_real_escape_string($conexion,(strip_tags($_POST["anactual"],ENT_QUOTES)));

	$id=intval($_POST['idpeli']);
	// UPDATE data into database
    $sql = "UPDATE inventariopelis SET Titulo='".$titpeli."', Simpnosis='".$sinopeli."'
		, Anio='".$anioestreno."'
   WHERE Id='".$id."' ";
    $query = mysqli_query($conexion,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }

	} else
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){

			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){

				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>
