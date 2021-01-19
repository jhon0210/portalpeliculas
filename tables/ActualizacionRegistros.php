<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php

$conexion1=mysqli_connect('localhost','root','Jhon**34','cocjan_requerimientos');

$bodeg_id = $_POST['id_act'];
$Eca = $_POST['bod'];
//$Direccion = $_POST['direc'];
//$Zona = $_POST['zon'];
//$Responsable = $_POST['pers'];
//$Confirmacion = $_POST['conf'];
//$Fecha = $_POST['fech'];
//$Horario = $_POST['hor'];
//$Descripcion = $_POST['descrip'];
//$Novedad = $_POST['nove'];

$sql1 = "UPDATE agenda SET Bodega='$Eca' WHERE Id='$bodeg_id' ";
echo mysqli_query($conexion1,$sql1);



?>
