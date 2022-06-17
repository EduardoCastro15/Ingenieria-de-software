<?php
require 'conexion.php';

	$Bol=$_POST['Bol'];
	$gpo=$_POST['gpo'];
	$nEmpl=$_POST['nEmpl'];
	$fyh=$_POST['fyh'];
	
	$q = "SELECT COUNT(*) AS agendado FROM `citas` WHERE fecha='fyh';";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['agendado']==0){
		$aCita="INSERT INTO `citas` (`ID_gpos`, `boleta`, `no_empleado`, `fecha`) VALUES ('$gpo', '$Bol', '$nEmpl', 'fyh');";
		mysqli_query($conn,$aCita)or die(mysql_error());
		header("Location: ../AlumnoSoporte.php?msg1=true");
	}else{
		header("Location: ../AlumnoSoporte.php?msg2=true");
	}
?>