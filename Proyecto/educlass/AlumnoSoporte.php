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
            <h3>Agendar Cita</h3>
            <form class="duda" action="Includes/Cita.php" method="POST">
              <fieldset>
			  <br>
				<table>              
				<tr>                
					<th>Boleta</th>                  
					<th>Grupo</th>                                					
					<th>Clave Profesor</th>                                					
				</tr>
				<?php
					require 'Includes/conexion.php';
					$gpoC=mysqli_query($conn,"SELECT ID_gpo as gpo FROM datos_alumno WHERE Boleta=$usuario;");
					$gpoR=mysqli_fetch_array($gpoC);
					$gpo=$gpoR['gpo'];
					$result1=mysqli_query($conn,"SELECT datos_alumno.Boleta, datos_alumno.ID_gpo, datos_prof.no_empleado FROM datos_alumno INNER JOIN cat_gpos ON datos_alumno.ID_gpo=cat_gpos.ID_gpos INNER JOIN datos_prof ON cat_gpos.ID_gpos=datos_prof.ID_gpos WHERE datos_alumno.ID_gpo=cat_gpos.ID_gpos=datos_prof.ID_gpos=$gpo AND datos_alumno.Boleta=$usuario;");
					while($row1=mysqli_fetch_array($result1)){
				?>
              <tr>                
				<td><input type="text" id="Bol" name="Bol" <?php echo "value=$row1[Boleta]";?> readonly="readonly"></td>
				<td><input type="text" id="gpo" name="gpo" <?php echo "value=$row1[ID_gpo]";?> readonly="readonly"></td>
				<td><input type="text" id="nEmpl" name="nEmpl" <?php echo "value=$row1[no_empleado]";?> readonly="readonly"></td>
              </tr>
              <?php
              }              
              ?>
            </table>
			<br><br>
				<label class="titu">Fecha y Hora</label>
                <input type="datetime-local" id="fyh" name="fyh" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:00" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			
                <br><br><br>
                <button type="reset" id="limpiar" name="limpiar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" id="envia" name="envia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
				<?php if(isset($_GET['msg1']) && $_GET['msg1'] == 'true'): ?>
                    <a style="color: red; font-weight: bold; font-size: 25px; text-align: right; text-decoration: none;">Agendada</a>
                <?php endif; ?>
				<?php if(isset($_GET['msg2']) && $_GET['msg2'] == 'true'): ?>
                    <a style="color: red; font-weight: bold; font-size: 25px; text-align: right; text-decoration: none;">Seleccionar otra fecha/hora</a>
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