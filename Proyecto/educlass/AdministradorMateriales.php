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
            <h3>Contenido de Apoyo al Estudiante</h3>
			<table style="font-size: 15px;">
              <tr>
                <th class="colsa" colspan="7">Materiales</th>
              </tr>
              <tr>
				<th>ID_mat</th>
				<th>Tipo Material</th>
                <th>Fecha</th>
                <th>No. Emp</th>                               
				<th>Enlace</th>
              </tr>
              <?php
              require 'Includes/conexion.php';
              $result=mysqli_query($conn,"SELECT materiales.ID_mat, cat_materiales.nom_material, materiales.Fecha_carga, datos_prof.no_empleado, materiales.desc_mat FROM materiales INNER JOIN datos_prof ON materiales.no_empleado = datos_prof.no_empleado Inner JOIN cat_materiales ON materiales.ID_tipoM=cat_materiales.ID_tipoM;");
              while($row=mysqli_fetch_array($result)){
              ?>
              <tr>
				<td><?php echo $row["ID_mat"];?></td>
				<td><?php echo $row["nom_material"];?></td>
                <td><?php echo $row["Fecha_carga"];?></td>
                <td><?php echo $row["no_empleado"];?></td>                			
                <td class="elc"><a <?php echo "href=$row[desc_mat]";?> target="_blank"><?php echo $row["desc_mat"];?></a></td>                
              </tr>
              <?php
              }              
              ?>
            </table
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