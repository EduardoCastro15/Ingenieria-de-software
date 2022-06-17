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
            <h3>Contacto</h3>
            <form class="duda" action="Includes/ContactoAlum.php" method="POST">
              <fieldset>
				<table>              
				<tr>                
					<th>Correo Principal</th>                  
					<th>Nombre</th>                                					
				</tr>
				<?php
					require 'Includes/conexion.php';
					$result1=mysqli_query($conn,"SELECT usuario.correo_usuario, datos_alumno.Nom_alum, datos_alumno.ApP_alum, datos_alumno.ApM_alumn FROM datos_alumno INNER JOIN usuario ON (datos_alumno.Boleta=usuario.clave_usuario) WHERE Boleta='$usuario'");
					while($row1=mysqli_fetch_array($result1)){
				?>
              <tr>                
				<td><input type="text" id="Correo" name="Correo" <?php echo "value=$row1[correo_usuario]";?> readonly="readonly"></td>
				<td><input type="text" id="Usuario" name="Usuario" <?php echo "value=$row1[Nom_alum]&nbsp;$row1[ApP_alum]&nbsp;$row1[ApM_alumn]";?> readonly="readonly"></td>                                                                                                               
              </tr>
              <?php
              }              
              ?>
            </table>
				<label class="titu">Asunto</label>
                <input type="text" id="AsuntoC" name="Asunto" pattern="[A-Za-z ]+" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
                <br><label class="titu">Descripci&oacute;n</label><br>
                <textarea id="desc" name="desc" rows="8" cols="100" required></textarea><br><br>
                <button type="reset" id="limpiar" name="limpiar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" id="envia" name="envia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
				<?php if(isset($_GET['msg']) && $_GET['msg'] == 'true'): ?>
                    <a style="color: red; font-weight: bold; font-size: 25px; text-align: right; text-decoration: none;">Enviado</a>
                <?php endif; ?>
                <br><br>
              </fieldset>
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