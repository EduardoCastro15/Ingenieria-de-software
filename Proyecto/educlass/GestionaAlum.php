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
            <h3>Alumnos</h3>    
            <table>
              <tr>
                <th class="colsa" colspan="12">Datos Usuario Tipo Alumno</th>
              </tr>
              <tr>
                <th>Boleta</th>
                <th>Correo Principal</th>
                <th>Contraseña</th>    
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>                
                <th>Correo Alternativo</th>
                <th>Telefono</th>
                <th>Tutor</th>
                <th>Tel Tutor</th>
                <th>Status</th>  
                <th>Grupo</th>
              </tr>
              <?php
              require 'Includes/conexion.php';
              $result=mysqli_query($conn,"SELECT usuario.clave_usuario, usuario.correo_usuario, usuario.pass_usuario, datos_alumno.Nom_alum, datos_alumno.ApP_alum, datos_alumno.ApM_alumn, datos_alumno.Correo_altU, datos_alumno.telefono, datos_alumno.nom_tutor, datos_alumno.tutor_tel, datos_alumno.status, cat_gpos.desc_gpos FROM datos_alumno INNER JOIN usuario ON (datos_alumno.Boleta=usuario.clave_usuario) INNER JOIN cat_gpos ON (datos_alumno.ID_gpo=cat_gpos.ID_gpos);");
              while($row=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $row["clave_usuario"];?></td>
                <td><?php echo $row["correo_usuario"];?></td>
                <td><?php echo $row["pass_usuario"];?></td>
                <td><?php echo $row["Nom_alum"];?></td>
                <td><?php echo $row["ApP_alum"];?></td>
                <td><?php echo $row["ApM_alumn"];?></td>                                
                <td><?php echo $row["Correo_altU"];?></td>
                <td><?php echo $row["telefono"];?></td>
                <td><?php echo $row["nom_tutor"];?></td>
                <td><?php echo $row["tutor_tel"];?></td>
                <td><?php echo $row["status"];?></td>    
                <td><?php echo $row["desc_gpos"];?></td>                  
              </tr>
              <?php
              }              
              ?>
            </table>    
<button type="button" onclick="window.print()" value="Imprimir" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imprime&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>             						
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