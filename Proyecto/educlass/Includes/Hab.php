<?php
require 'conexion.php';
$accion=$_POST['HabA'];
$claveUR=$_POST['bol'];	
	if($accion=='H'){											
		$ins="UPDATE `datos_alumno` SET `status` = '1' WHERE `datos_alumno`.`Boleta` ='$claveUR';";
		mysqli_query($conn,$ins)or die(mysql_error());
	}
	header("Location: ../HabAlum.php?msg=true");
?>