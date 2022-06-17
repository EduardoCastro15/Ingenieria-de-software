<?php
	require 'conexion.php';
	$accion=$_POST['idsop'];		
	
	$ins="UPDATE `soporte` SET `status_sop`='1' WHERE `soporte`.`ID_sop`=$accion;";
	mysqli_query($conn,$ins)or die(mysql_error());
	header("Location: ../AdministradorSoporte.php");
?>