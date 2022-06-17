<?php
require 'conexion.php';
	$claveUR=$_POST['claveUR'];
	$gpo=$_POST['gpo'];
	
	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE clave_usuario=$claveUR;";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']==0){
		$q2 = "SELECT COUNT(*) AS contar FROM cat_gpos WHERE `desc_gpos`='$gpo';";	
		$consulta2 = mysqli_query($conn,$q2);
		$array2 = mysqli_fetch_array($consulta2);		
		if($array2['contar']==0){
			$nombre=$_POST['nombreR'];
			$ApPatR=$_POST['Ap_PatR'];
			$ApMatR=$_POST['Ap_MatR'];
			$CorreoR=$_POST['CorreoR'];	
			$CorreoRs=$_POST['CorreoRs'];
			$claveR=$_POST['claveR'];		
			$ins="INSERT INTO `usuario` (`ID_rol`, `clave_usuario`, `correo_usuario`, `pass_usuario`) VALUES ('P', '$claveUR', '$CorreoR', '$claveR');";
			mysqli_query($conn,$ins)or die(mysql_error());

			$ins3="INSERT INTO `cat_gpos` (`desc_gpos`) VALUES ('$gpo');";
			mysqli_query($conn,$ins3)or die(mysql_error());

			$ID_gpos="SELECT `ID_gpos` FROM `cat_gpos` WHERE `desc_gpos`= '$gpo';";
			$og=mysqli_query($conn,$ID_gpos);
			
			$ng=mysqli_fetch_array($og);

			$ins2="INSERT INTO `datos_prof` (`Nomr_prof`, `ApP_prof`, `ApM_prof`, `no_empleado`, `correo_altU`, `ID_gpos`, `status`) VALUES ('$nombre', '$ApPatR', '$ApMatR', '$claveUR', '$CorreoRs', '$ng[0]', '0');";
			mysqli_query($conn,$ins2)or die(mysql_error());
		
			header("Location: ../Registrar_Profesor.php?msg=true");	
		}else{
			header("Location: ../Registrar_Profesor.php?msg3=true");
		}
	}else{
		header("Location: ../Registrar_Profesor.php?msg2=true");
	}
?>