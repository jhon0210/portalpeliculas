<?php

$conexion=mysqli_connect('localhost','root','','peliculas');
  $peli=$_POST['tit'];
  $sinopsis=$_POST['sinop'];
  $anioact=$_POST['anio'];

  $sql="INSERT into inventariopelis (Titulo,Simpnosis,Anio)
  values ('$peli','$sinopsis','$anioact')";
  $conexion->query($sql);

  if ($sql == TRUE) {
      echo 1;
  }

  $conexion->close();

?>
