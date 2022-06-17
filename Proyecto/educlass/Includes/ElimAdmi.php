<?php
	require 'conexion.php';
	$clave=$_POST['clave'];
	
	$ins="DELETE FROM `datos_admin` WHERE `datos_admin`.`clave` =$clave;";
	mysqli_query($conn,$ins)or die(mysql_error());
	
	$ins2="DELETE FROM `usuario` WHERE `usuario`.`clave_usuario` =$clave;";
	mysqli_query($conn,$ins2)or die(mysql_error());
	
	header("Location: ../EliminarAdmi.php?msg=true");
?>