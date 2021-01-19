<?php
$userPerfil=$_POST['usuario'];
$clavePerfil=$_POST['contraseña'];
session_start();
$_SESSION['$userPerfil2']=$userPerfil;
$_SESSION['$clavePerfil2']=$clavePerfil;
$conexion=mysqli_connect('localhost','root','','peliculas');
$sqlVal1="Select * from usuarios where Usuario='$userPerfil' and Clave='$clavePerfil'";
$resultado=mysqli_query($conexion,$sqlVal1);
if ($Registros=mysqli_fetch_array($resultado)) {
	 	echo 3;
}else{
		echo 4;
}

?>
