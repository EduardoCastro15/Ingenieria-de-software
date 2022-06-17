<?php
require 'conexion.php';
	$claveU=$_POST['claveU'];
	$passV=$_POST['passV'];
	
	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE clave_usuario=$claveU AND pass_usuario='$passV';";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']!=0){
		$passN=$_POST['passN'];
		$passC=$_POST['passC'];		
		if($passN==$passC){			
			$actContra="UPDATE `usuario` SET `pass_usuario` = '$passN' WHERE `usuario`.`clave_usuario` ='$claveU';";
			mysqli_query($conn,$actContra)or die(mysql_error());
			header("Location: ../AlumnoContra.php?msg=true");
		}else{
			header("Location: ../AlumnoContra.php?msg3=true");	
		}
	}else{
		header("Location: ../AlumnoContra.php?msg2=true");
	}
?>