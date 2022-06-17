<?php
require 'conexion.php';
$accion=$_POST['HabA'];
$claveUR=$_POST['no_empleado'];	
	if($accion=='H'){											
		$ins="UPDATE `datos_prof` SET `status` = '1' WHERE `datos_prof`.`no_empleado` ='$claveUR';";
		mysqli_query($conn,$ins)or die(mysql_error());
	}
	header("Location: ../HabProf.php?msg=true");
?>