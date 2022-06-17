<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>AlumP</title>
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
          <p><a href="AlumnoP.php">INGENIERIA DE SOFTWARE</a></p>
        </div>       
      </div>

      <div class="nav">
        <ul class="menu">
          <li>
            <a>Matematicas</a>
            <ul class="submenu">                        
              <li><a>Bloque I</a>
                <ul class="submenu2">                  
                  <li><a>Tema 1</a></li>
                  <li><a>Tema 2</a></li>
                  <li><a>Tema 3</a></li>
                  <li><a>Tema 4</a></li>
                </ul>
              </li>
              <li><a>Bloque II</a>
                <ul class="submenu2">                  
                  <li><a>Tema 1</a></li>
                  <li><a>Tema 2</a></li>
                  <li><a>Tema 3</a></li>
                  <li><a>Tema 4</a></li>
                </ul>
              </li>
              <li><a href="Temas/Temas.php">Bloque III</a>
			     <ul class="submenu2">                  
                  <li><a href="Temas/Tema1.php">Tema 1</a></li>
                  <li><a href="Temas/Tema2.php">Tema 2</a></li>
                  <li><a href="Temas/Tema3.php">Tema 3</a></li>
                  <li><a href="Temas/Tema4.php">Tema 4</a></li>
				  <li><a href="Temas/Tema5.php">Tema 5</a></li>
				  <li><a href="Temas/Tema6.php">Tema 6</a></li>
				  <li><a href="Temas/Tema7.php">Tema 7</a></li>
				  <li><a href="Temas/Tema8.php">Tema 8</a></li>
				  <li><a href="Temas/Tema9.php">Tema 9</a></li>
                </ul>
              </li>              
            </ul>        
          </li>

          <li><a href="Preguntas/Preguntas.php">Guia Estudio</a></li>

          <li>
            <a>Materiales</a> 
            <ul class="submenu">
              <li><a href="AlumVideo.php">Video</a></li>
              <li><a href="AlumImpresion.php">Impresion</a></li>
              <li><a href="AlumActLin.php">Actividad en Linea</a></li>
              <li><a href="AlumAuEval.php">Examen/Evaluacion</a></li>
			  <li><a href="AlumBiblio.php">Bibliografia</a></li>
              <li><a href="Libro.php">Libro</a></li>              
            </ul>
          </li>

          <li>
            <a>Actualizar Perfil</a> 
              <ul class="submenu">                               
                <li><a href="AlumnoDatos.php"> Datos </a></li>
                <li><a href="AlumnoContra.php"> Cambiar Contraseña </a></li>                
              </ul>
          </li> 

          <li>
            <a href="AlumnoSoporte.php">Soporte</a>           
          </li>    

          <li>
            <a href="AlumnoAyuda.php">Ayuda</a>                          
          </li>

        </ul>

        <div class="navD">
          <p><a href="Includes/salirLog.php">Cerrar Sesion</a></p>          
        </div>    
        
      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Mi Perfil</h3> 
			<table>
              <tr>
                <th class="colsa" colspan="11">Datos</th>
              </tr>
              <tr>                
                <th>Correo Principal</th>                  
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>                                
                <th>Grupo</th> 
              </tr>
              <?php
              require 'Includes/conexion.php';
              $result1=mysqli_query($conn,"SELECT usuario.correo_usuario, datos_alumno.Nom_alum, datos_alumno.ApP_alum, datos_alumno.ApM_alumn, cat_gpos.desc_gpos FROM datos_alumno INNER JOIN usuario ON (datos_alumno.Boleta=usuario.clave_usuario) INNER JOIN cat_gpos ON (datos_alumno.ID_gpo=cat_gpos.ID_gpos) WHERE Boleta='$usuario'");
              while($row1=mysqli_fetch_array($result1)){
              ?>
              <tr>                
                <td><?php echo $row1["correo_usuario"];?></td>                
                <td><?php echo $row1["Nom_alum"];?></td>
                <td><?php echo $row1["ApP_alum"];?></td>
                <td><?php echo $row1["ApM_alumn"];?></td>                                                  
                <td><?php echo $row1["desc_gpos"];?></td>
              </tr>
              <?php
              }              
              ?>
            </table>
			<br>
			<form action="Includes/AlumAct.php" method="POST">
				<table>
				  <tr>
					<th class="colsa" colspan="6">Actualiza</th>
				  </tr>
				  <tr>
					<th>Boleta</th>				  
					<th>Correo Alternativo</th>
					<th>Telefono</th>
					<th>Tutor</th>
					<th>Tel Tutor</th>                                 
					<th></th> 
				  </tr>
				  <?php
				  require 'Includes/conexion.php';
				  $result=mysqli_query($conn,"SELECT datos_alumno.Boleta, datos_alumno.Correo_altU, datos_alumno.telefono, datos_alumno.nom_tutor, datos_alumno.tutor_tel FROM datos_alumno WHERE Boleta='$usuario'");
				  while($row=mysqli_fetch_array($result)){
				  ?>
				  <tr>
					<td><input type="text" id="claveU" name="claveU" <?php echo "value=$row[Boleta]";?> readonly="readonly"></td>				  
					<td><input type="email" id="correoAlt" name="correoAlt" <?php echo "value=$row[Correo_altU]";?>></td>
					<td><input type="text" id="tel" name="tel" pattern="[0-9]{10}" <?php echo "value=$row[telefono]";?>></td>
					<td><input type="text" id="nomT" name="nomT"  <?php echo "value=$row[nom_tutor]";?>></td>
					<td><input type="text" id="telT" name="telT" pattern="[0-9]{10}" <?php echo "value=$row[tutor_tel]";?>></td>                                   
					<td><button type="submit" id="envia" name="envia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actualiza&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></td>                                   
				  </tr>
				  <?php
				  }              
				  ?>
				</table>
				<?php if(isset($_GET['msg']) && $_GET['msg'] == 'true'): ?>
                    <p style="color: red; text-align: center;">¡Actualizados!</p>
                <?php endif; ?>
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