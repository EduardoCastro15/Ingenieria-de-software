<?php
require 'conexion.php';	
	$CorreoC=$_POST['CorreoC'];	
	$CU=$_POST['CU'];
	
	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE clave_usuario=$CU AND `correo_usuario`='$CorreoC'";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']==1){

		$actContra="UPDATE `usuario` SET `pass_usuario`='anzm' WHERE `usuario`.`clave_usuario`='$CU' AND `usuario`.`correo_usuario`='$CorreoC';";
		mysqli_query($conn,$actContra)or die(mysql_error());
		header("Location: ../RecContra.php?msg=true");
	}else{
		header("Location: ../RecContra.php?msg2=true");
	}
?>