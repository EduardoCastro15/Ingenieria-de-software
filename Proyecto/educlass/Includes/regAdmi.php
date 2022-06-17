<?php
require 'conexion.php';
	$claveUR=$_POST['claveUR'];
	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE clave_usuario=$claveUR;";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']==0){
		$nombre=$_POST['nombreR'];
		$ApPatR=$_POST['Ap_PatR'];
		$ApMatR=$_POST['Ap_MatR'];
		$CorreoR=$_POST['CorreoR'];		
		$claveR=$_POST['claveR'];

		$ins="INSERT INTO `usuario` (`ID_rol`, `clave_usuario`, `correo_usuario`, `pass_usuario`) VALUES ('A', '$claveUR', '$CorreoR', '$claveR');";
		mysqli_query($conn,$ins)or die(mysql_error());

		$ins2="INSERT INTO `datos_admin` (`Nom_adm`, `ApP_adm`, `ApM_adm`, `clave`) VALUES ('$nombre', '$ApPatR', '$ApMatR', '$claveUR');";
		mysqli_query($conn,$ins2)or die(mysql_error());
		header("Location: ../AgregarAdmi.php?msg=true");
	}else{
		header("Location: ../AgregarAdmi.php?msg2=true");
	}
?>