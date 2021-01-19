<?php
	if (empty($_POST['cod'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['cod'])){
	$conexion=mysqli_connect('localhost','root','','peliculas');
	// escaping, additionally removing everything that could be (html/javascript-) code

	  //$cod = mysqli_real_escape_string($conexion,(strip_tags($_POST["cod"],ENT_QUOTES)));
	  $nom = mysqli_real_escape_string($conexion,(strip_tags($_POST["nomb"],ENT_QUOTES)));
	  $user = mysqli_real_escape_string($conexion,(strip_tags($_POST["users"],ENT_QUOTES)));
	  $clav = mysqli_real_escape_string($conexion,(strip_tags($_POST["clav"],ENT_QUOTES)));

	$id=intval($_POST['cod']);
	// UPDATE data into database
    $sql = "UPDATE usuarios SET Nombre='".$nom."', Usuario='".$user."'
		, Clave='".$clav."'
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
