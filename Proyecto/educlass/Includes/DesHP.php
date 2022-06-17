<?php
require 'conexion.php';
$accion=$_POST['DA'];
$claveUR=$_POST['no_empleado'];	
	if($accion=='D'){
		$ins="UPDATE `datos_prof` SET `status` = '0' WHERE `datos_prof`.`no_empleado` ='$claveUR';";
		mysqli_query($conn,$ins)or die(mysql_error());
	}
	header("Location: ../HabProf.php?msg2=true");
?>