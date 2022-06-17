<?php
	require 'conexion.php';

	$ID_mat=$_POST['ID_mat'];		
	$ins="DELETE FROM `materiales` WHERE `materiales`.`ID_mat` =$ID_mat ";
	mysqli_query($conn,$ins)or die(mysql_error());
	
	header("Location: ../EliminarMaterial.php?msg=true");
?>