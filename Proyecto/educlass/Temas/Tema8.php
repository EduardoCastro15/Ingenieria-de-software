<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Tema 8</title>
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
              <li><a href="Temas/Temas.php">Bloque III</a>
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
            <h3>Tema 8: </h3>
			<p>
				En el cap&iacute;tulo 8 se encuentran ejercicios en los que se requiere
				de aprender a medir la capacidad de algunos materiales, por ejemplo
				si se utilizan dos vasos, uno se le llena de agua y el otro (siendo de
				distinto material y tamaño), se le intentar&aacute; medir la misma cantidad de
				agua que el primer vaso.
			</p>
			<br>
			<div align="center">
				<img src="Imagenes_Temas/capacidad.jpg" width="400" height="280" title="Medir Vasos">
            </div>

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
