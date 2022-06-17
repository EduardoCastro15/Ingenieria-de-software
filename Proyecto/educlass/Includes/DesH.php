<?php
require 'conexion.php';
$accion=$_POST['DA'];
$claveUR=$_POST['bol'];	
	if($accion=='D'){
		$ins="UPDATE `datos_alumno` SET `status` = '0' WHERE `datos_alumno`.`Boleta` = '$claveUR';";
		mysqli_query($conn,$ins)or die(mysql_error());
	}
	header("Location: ../HabAlum.php?msg2=true");
?>