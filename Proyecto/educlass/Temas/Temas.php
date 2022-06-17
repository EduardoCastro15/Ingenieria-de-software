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
    
    <link rel="stylesheet" type="text/css" href="../Index.css">
    <link rel="stylesheet" type="text/css" href="../headerRegU.css">
    <link rel="stylesheet" type="text/css" href="../navRegU.css">
    <link rel="stylesheet" type="text/css" href="../sectionRegU.css">
	<link rel="stylesheet" type="text/css" href="../tablas.css">
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
          <p><a href="../AlumnoP.php">INGENIERIA DE SOFTWARE</a></p>
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
              <li><a href="Temas.php">Bloque III</a>
			     <ul class="submenu2">                  
                  <li><a href="Tema1.php">Tema 1</a></li>
                  <li><a href="Tema2.php">Tema 2</a></li>
                  <li><a href="Tema3.php">Tema 3</a></li>
                  <li><a href="Tema4.php">Tema 4</a></li>
				  <li><a href="Tema5.php">Tema 5</a></li>
				  <li><a href="Tema6.php">Tema 6</a></li>
				  <li><a href="Tema7.php">Tema 7</a></li>
				  <li><a href="Tema8.php">Tema 8</a></li>
				  <li><a href="Tema9.php">Tema 9</a></li>
                </ul>
              </li>              
            </ul>        
          </li>

          <li><a href="../Preguntas/Preguntas.php">Actividad</a></li>

          <li>
            <a>Materiales</a> 
            <ul class="submenu">
              <li><a href="../AlumVideo.php">Video</a></li>
              <li><a href="../AlumImpresion.php">Impresion</a></li>
              <li><a href="../AlumActLin.php">Actividad en Linea</a></li>
              <li><a href="../AlumAuEval.php">Examen/Evaluacion</a></li>
			  <li><a href="../AlumBiblio.php">Bibliografia</a></li>
              <li><a href="../Libro.php">Libro</a></li>              
            </ul>
          </li>

          <li>
            <a>Actualizar Perfil</a> 
              <ul class="submenu">                               
                <li><a href="../AlumnoDatos.php"> Datos </a></li>
                <li><a href="../AlumnoContra.php"> Cambiar Contraseña </a></li>                
              </ul>
          </li> 

          <li>
            <a href="../AlumnoSoporte.php">Soporte</a>           
          </li>    

          <li>
            <a href="../AlumnoAyuda.php">Ayuda</a>                          
          </li>

        </ul>

        <div class="navD">
          <p><a href="../Includes/salirLog.php">Cerrar Sesion</a></p>          
        </div>    
        
      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Temario</h3>
			 <table>
              <tr>
                <th class="colsa" colspan="2">Bloque III</th>
              </tr>
              <tr>
                <th>Tema No.</th>
                <th>Nombre</th>                                             
              </tr>
              <?php
              require '../Includes/conexion.php';
              $result=mysqli_query($conn,"SELECT ID_tema, desc_tema FROM `cat_tema` WHERE ID_tema!=10;");
              while($row=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $row["ID_tema"];?></td>
                <td><?php echo $row["desc_tema"];?></td>				
              </tr>
              <?php
              }              
              ?>
            </table>
          </div> 
        </div>        
      </div>

      <div id="footer">        
        <br>
        <p>Copyright ©2021 | Equipo5 - 2CV15 | ®Todos los derechos reservados</p>        
      </div>

    </div>
  </body>
</html>