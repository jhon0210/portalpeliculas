<?php

$conexion=mysqli_connect('localhost','root','','peliculas');
$validacion=$_POST['user'];
$sqlVal="Select * from usuarios where Usuario='$validacion'";
$resultado=mysqli_query($conexion,$sqlVal);
if ($Registros=mysqli_fetch_array($resultado)>0) {

	echo 3;
}else{
  $nom=$_POST['nom'];
  $user=$_POST['user'];
  $clave=$_POST['clave'];

  $sql="INSERT into usuarios (Nombre,Usuario,Clave)
  values ('$nom','$user','$clave')";
  $conexion->query($sql);

  if ($sql == TRUE) {
      echo 1;
  }

  $conexion->close();
}
?>
