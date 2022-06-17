<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>Alum Contra</title>
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
            <h3>Actualizar Contraseña</h3>
            <form id="camcon" method="POST" action="Includes/ActContraAlum.php">
              <fieldset>
                <br>
                <label class="titu">Contraseña Anterior:</label>
                <input type="password" id="passV" name="passV" required><br><br>

                <label class="titu">Nueva Contraseña:</label>
                <input type="password" id="passN" name="passN" required><br><br> 
				
				<label class="titu">Confirmar Nueva Contraseña:</label>
                <input type="password" id="passC" name="passC" required><br><br>

                <label class="titu">Usuario:</label>
                <input type="text" id="claveU" name="claveU" 
				<?php				 
				echo "value=$usuario";
				?>
				readonly="readonly" required><br><br>

                <button type="reset" id="limpiar" name="limpiar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" id="confirma" name="confirma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <br><br>
				<?php if(isset($_GET['msg']) && $_GET['msg'] == 'true'): ?>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: center;">¡Actualizada!</p>
                <?php endif; ?>
				<?php if(isset($_GET['msg2']) && $_GET['msg2'] == 'true'): ?>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: center;">¡Error en Contraseña Actual!</p>
                <?php endif; ?>
				<?php if(isset($_GET['msg3']) && $_GET['msg3'] == 'true'): ?>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: center;">¡Error, no coinciden las contraseñas!</p>
                <?php endif; ?>					
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