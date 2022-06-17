<?php
require 'conexion.php';

	$UsuarioC=$_POST['Usuario'];
	$CorreoC=$_POST['Correo'];
	$AsuntoC=$_POST['Asunto'];
	$tusuC=$_POST['tusuC'];
	$desc=$_POST['desc'];

	$ins="INSERT INTO `soporte` (`nom_sop`, `correo_sop`, `asunto_sop`, `usu_sop`, `desc_sop`, `status_sop`) VALUES ('$UsuarioC', '$CorreoC', '$AsuntoC', '$tusuC', '$desc', '0');";
	mysqli_query($conn,$ins)or die(mysql_error());

	header("Location: ../Contacto.php?msg=true");
	
?>