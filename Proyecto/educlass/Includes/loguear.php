<?php
	require 'conexion.php';
	session_start();

	$Usuario_ID_us=$_POST['tusu'];
	$Usuario_Nom = $_POST['Usuario'];
	$Usuario_Pwd = $_POST['clave'];

	$q = "SELECT COUNT(*) AS contar FROM `usuario` WHERE `ID_rol` = '$Usuario_ID_us' AND `clave_usuario` = $Usuario_Nom AND `pass_usuario` = '$Usuario_Pwd';";	
	$consulta = mysqli_query($conn,$q);
	$array = mysqli_fetch_array($consulta);

	if ($Usuario_ID_us!='A') {
		if($Usuario_ID_us=='E'){
			$_val="SELECT `status` FROM `datos_alumno` WHERE `Boleta`='$Usuario_Nom';";
			$consultaS = mysqli_query($conn,$_val);
			$_val2 = mysqli_fetch_array($consultaS);			
		}else{
			$_val="SELECT `status` FROM `datos_prof` WHERE `no_empleado`='$Usuario_Nom';";
			$consultaS = mysqli_query($conn,$_val);
			$_val2 = mysqli_fetch_array($consultaS);
		}
	}

	if($array['contar']>0){
		$_SESSION['username'] = $Usuario_Nom;

		if($Usuario_ID_us=='P'){
			if (($_val2[0]==1)) {
				$_SESSION['tusu'] = 'Profesor';
				header("location: ../ProfesorP.php");	
			}else{
				header("Location: ../Principal.php?error2=true");
			}					
		}elseif ($Usuario_ID_us=='E') {
			if (($_val2[0]==1)) {
				$_SESSION['tusu'] = 'Estudiante';
				header("location: ../AlumnoP.php");
			}else{
				header("Location: ../Principal.php?error2=true");
			}						
		}else{
			$_SESSION['tusu'] = 'Administrador';
			header("location: ../AdministradorP.php");
		}				
	}else{
		header("Location: ../Principal.php?error=true");
	}	
?>