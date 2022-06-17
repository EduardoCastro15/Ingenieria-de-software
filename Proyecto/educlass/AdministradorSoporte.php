<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>AdminP</title>
    <meta charset="utf-8">
    <meta name="author" content="Epo5" />
    <meta name="keywords" content="html,css,maquetado, maquetacion" />
    <meta name="copyright" content="© Epo5" />
    <meta name="description" content="Principal Proyecto" />    
    
    <link rel="stylesheet" type="text/css" href="Index.css">
    <link rel="stylesheet" type="text/css" href="headerRegU.css">
    <link rel="stylesheet" type="text/css" href="navRegU.css">
    <link rel="stylesheet" type="text/css" href="sectionRegU.css">
    <link rel="stylesheet" type="text/css" href="tablas.css">
  </head>
  <body>
    <div id="fondoP"></div>

    <div id="contenedor">

      <div id="header"><br/>                      
        <div id="heI"></div>        
        <div id="heD">        
          <p id="husu">
            <?php 
            $usuario = $_SESSION['username']; 
            $tusu = $_SESSION['tusu'];
            echo "$usuario";
            echo "<p>$tusu</p>"; 
            if(!isset($usuario)){
              header("location: Principal.php");
            }
            ?>
          </p>          
        </div>
        <div id="heC">          
          <p><a href="AdministradorP.php">INGENIERIA DE SOFTWARE</a></p>
        </div>       
      </div>

      <div class="nav">
        <ul class="menu">
          <li>
            <a href="GestionaU.php">Gestionar Usuario</a>
            <ul class="submenu">
              <li><a href="GestionaAdmi.php">Administrador</a></li>
              <li><a href="GestionaProf.php">Profesor</a></li>
              <li><a href="GestionaAlum.php">Alumno</a></li>              
            </ul>        
          </li>

          <li>
            <a>Habilitar Usuario</a> 
            <ul class="submenu">            
              <li><a href="HabProf.php">Profesor</a></li>
			  <li><a href="HabAlum.php">Alumno</a></li>                            
            </ul>
          </li>
		  
		   <li>
            <a href="AdministradorMateriales.php">Gestionar Contenido</a>
            <ul class="submenu">
              <li><a href="EliminarMaterial.php">Eliminar Material</a></li>                                         
            </ul>        
          </li>

          <li>
            <a>Perfil</a> 
              <ul class="submenu">                            
                <li><a href="AdministradorPerfil.php"> Datos </a></li> 
				<li><a href="AdministradorContra.php">Actualizar Contraseña</a></li>				
              </ul>
          </li>           
        
          <li>
            <a href="AdministradorSoporte.php">Soporte</a>           
          </li>    

          <li>
            <a href="">Ayuda</a>             
          </li>

        </ul>

        <div class="navD">
          <p><a href="Includes/salirLog.php">Cerrar Sesion</a></p>             
        </div>    

      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Solicitud de Soporte</h3>
			<form action="Includes/Atendida.php" method="POST" style="text-align: center;">
				<table>
				  <tr>
					<th class="colsa" colspan="7">Atenci&oacute;n</th>
				  </tr>
				  <tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Asunto</th>
					<th>Tipo Usuario</th>
					<th>Descripcion</th>
					<th>Status</th>
				  </tr>
				  <?php
				  require 'Includes/conexion.php';
				  $result=mysqli_query($conn,"SELECT * FROM `soporte`");
				  while($row=mysqli_fetch_array($result)){
				  ?>
				  <tr>
					<td><?php echo $row["ID_sop"];?></td>					
					<td><?php echo $row["nom_sop"];?></td>
					<td><?php echo $row["correo_sop"];?></td>
					<td><?php echo $row["asunto_sop"];?></td>
					<td><?php echo $row["usu_sop"];?></td>
					<td><?php echo $row["desc_sop"];?></td>
					<td><?php echo $row["status_sop"];?></td>
				  </tr>
				  <?php
				  }              
				  ?>
				</table>
				<br><br>
				<label class="titu">Seleccionar el ID para marcar el reporte como atendido</label><br>
				<label class="titu">ID Soporte</label>&nbsp;
                <select name="idsop" id="idsop">
                   <option value="0">Seleccione:</option>
                   <?php  
                    require 'Includes/conexion.php';                  
                    $query = $conn -> query ("SELECT * FROM `soporte` WHERE status_sop=0");
                    while ($valores = mysqli_fetch_array($query)) {                      
                      echo '<option value="'.$valores['ID_sop'].'">'.$valores['ID_sop'].'</option>';
                    }
					?>                                
                </select><br><br><br>
				<button type='submit' id='atendida' name='atendida'>&nbsp;Atendida&nbsp;</button>				
			</form>			
          </div> 
        </div>        
      </div>

      <div id="footer">        
        <br>
        <p>Copyright ©2022 | Equipo 3 - 3CM13 | ®Todos los derechos reservados</p>        
      </div>

    </div>
  </body>
</html>