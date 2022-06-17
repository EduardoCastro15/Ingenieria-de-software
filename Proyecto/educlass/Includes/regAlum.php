<?php
require 'conexion.php';
	$claveUR=$_POST['bolAR'];
	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE clave_usuario=$claveUR;";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']==0){
		$nombre=$_POST['nombreR'];
		$ApPatR=$_POST['Ap_PatR'];
		$ApMatR=$_POST['Ap_MatR'];
		$CorreoR=$_POST['CorreoR'];
		$CorreoRs=$_POST['CorreoRs'];
		$telAR=$_POST['telAR'];				
		$gpo=$_POST['gpo'];
		$nombreTR=$_POST['nombreTR'];
		$telTR=$_POST['telTR'];
		$claveR=$_POST['claveR'];

		$ins="INSERT INTO `usuario` (`ID_rol`, `clave_usuario`, `correo_usuario`, `pass_usuario`) VALUES ('E', '$claveUR', '$CorreoR', '$claveR');";
		mysqli_query($conn,$ins)or die(mysql_error());

		$ins2="INSERT INTO `datos_alumno` (`Nom_alum`, `ApP_alum`, `ApM_alumn`, `Boleta`, `Correo_altU`, `telefono`, `nom_tutor`, `tutor_tel`, `ID_gpo`, `status`) VALUES ('$nombre', '$ApPatR', '$ApMatR', '$claveUR', '$CorreoRs', '$telAR', '$nombreTR', '$telTR', '$gpo', '0');";
		mysqli_query($conn,$ins2)or die(mysql_error());
		header("Location: ../Registrar_Alumno.php?msg=true");
	}else{
		header("Location: ../Registrar_Alumno.php?msg2=true");
	}
?>