<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>ProfP</title>
    <meta charset="utf-8">
    <meta name="author" content="Epo5" />
    <meta name="keywords" content="html,css,maquetado, maquetacion" />
    <meta name="copyright" content="©️ Epo5" />
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
          <p><a href="ProfesorP.php">INGENIERIA DE SOFTWARE</a></p>
        </div>
      </div>

      <div class="nav">
        <ul class="menu">
          <li>
            <a>Gestionar</a>
            <ul class="submenu">
              <li><a>Alumno</a></li>
              <li><a>Grupo</a></li>
            </ul>
          </li>

          <li>
            <a>Gestionar Temas</a>
            <ul class="submenu">
              <li><a>Material</a>
                <ul class="submenu2">
                  <li><a>Video</a></li>
                  <li><a>Impresion</a></li>
                  <li><a>Actividad en Linea</a></li>
                  <li><a>Examen/Evaluacion</a></li>
                </ul>
              </li>
              <li><a>Bloque</a>
                <ul class="submenu2">
                  <li><a>Material</a></li>
                  <li><a>Bloque I</a>
                    <ul class="submenu3">
                      <li><a>Tema 1</a></li>
                      <li><a>Tema 2</a></li>
                      <li><a>Tema 3</a></li>
                      <li><a>Tema 4</a></li>
                      <li><a>Tema 5</a></li>
                    </ul>
                  </li>
                  <li><a>Bloque II</a></li>
                  <li><a >Bloque III</a>
                    <ul class="submenu3">
                      <li><a >Tema 1</a></li>
                      <li><a >Tema 2</a></li>
                      <li><a >Tema 3</a></li>
                      <li><a >Tema 4</a></li>
                      <li><a >Tema 5</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a >Libro</a></li>
            </ul>
          </li>

          <li>
            <a>Perfil</a>
              <ul class="submenu">
                <li><a > Foto </a></li>
                <li><a > Datos </a></li>
              </ul>
          </li>

          <li><a>Contraseña</a></li>

          <li>
            <a>Soporte</a>
          </li>

          <li>
            <a>Ayuda</a>
          </li>

        </ul>

        <div class="navD">
          <p><a href="Includes/salirLog.php">Cerrar Sesion</a></p>
        </div>

      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Alumnos en su grupo.</h3>
            <p>
              <table>
                <tr>
					<th class="colsa" colspan="5">Datos</th>
                </tr>
                <tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Boleta</th>
					<th>Correo</th>
				</tr>
			    <?php
					require 'Includes/conexion.php';
					$result=mysqli_query($conn,"SELECT datos_alumno.Nom_alum, datos_alumno.ApP_alum, datos_alumno.ApM_alumn, datos_alumno.Boleta, usuario.correo_usuario FROM datos_alumno INNER JOIN usuario ON (datos_alumno.Boleta=usuario.clave_usuario) INNER JOIN datos_prof ON (datos_alumno.ID_gpo=datos_prof.ID_gpos);");
					while($row=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row["Nom_alum"];?></td>
					<td><?php echo $row["ApP_alum"];?></td>
					<td><?php echo $row["ApM_alumn"];?></td>
					<td><?php echo $row["Boleta"];?></td>
					<td><?php echo $row["correo_usuario"];?></td>                
				</tr>
				<?php
					}              
				?>
			  </table>
            </p>
          </div>
        </div>
      </div>

      <div id="footer">
        <br>
        <p>Copyright ©2022 | Equipo 3 - 3CM13 | ®️Todos los derechos reservados</p>
      </div>

    </div>
  </body>
</html>