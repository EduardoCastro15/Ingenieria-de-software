<?php
require 'conexion.php';
	if($_POST){					
		$claveU=$_POST['claveU'];
		$correoAlt=$_POST['correoAlt'];
		$tel=$_POST['tel'];
		$nomT=$_POST['nomT'];
		$telT=$_POST['telT'];

		$actDA="UPDATE `datos_alumno` SET `Correo_altU` = '$correoAlt', `telefono` = '$tel', `nom_tutor` = '$nomT', `tutor_tel` = '$telT' WHERE `datos_alumno`.`Boleta` = $claveU;";
		mysqli_query($conn,$actDA)or die(mysql_error());

	}
	header("Location: ../AlumnoDatos.php?msg=true");
?>