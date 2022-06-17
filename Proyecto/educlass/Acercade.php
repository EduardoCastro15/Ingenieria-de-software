<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>Acerca de</title>
    <meta charset="utf-8">
    <meta name="author" content="Epo5" />
    <meta name="keywords" content="html,css,maquetado, maquetacion" />
    <meta name="copyright" content="© Epo5" />
    <meta name="description" content="ejercicio de maquetado" />    
    <link rel="stylesheet" type="text/css" href="Index.css">
    <link rel="stylesheet" type="text/css" href="headerNR.css">
    <link rel="stylesheet" type="text/css" href="navNR.css">
    <link rel="stylesheet" type="text/css" href="contenido.css">
    <link rel="stylesheet" type="text/css" href="SectionNR.css">
    <link rel="stylesheet" type="text/css" href="asideNR.css">
  </head>
  <body>
    <div id="fondoP"></div>

    <div id="contenedor">

      <div id="header"><br/>        
        <div id="heI"></div>
        <div id="heD"></div>
        <div class="heC">
          <p>INGENIERIA DE SOFTWARE</p>
        </div>       
      </div>

      <div class="nav">
        <ul class="menu">
          <li>
            <a href="Principal.php">Principal</a>        
          </li>

          <li>
            <a href="Acercade.php">Acerca de</a>       
          </li>

          <li>
            <a href="PregF.php">Preguntas frecuentes</a>              
          </li>

          <li>
            <a href="Contacto.php">Contacto</a>           
          </li>
        
          <li>
            <a href="Ayuda.php">Ayuda</a>           
          </li>    
        </ul>    
      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Acerca de</h3>    
            <p>
              Proyecto realizado por el <b>Equipo 3</b> para la Unidad de Aprendizaje <em>INGENIERIA DE SOFTWARE</em> que pertenece al plan de estudios 2009 de la Escuela Superior de C&oacute;mputo del Instituto Polit&eacute;cnico Nacional.
            </p>
			<p>
				<h3><b>Equipo 3</b></h3>
			</p>
            <p>
              Esta p&aacute;gina es presentada como una propuesta de proyecto dada por los alumnos:
            </p>          
            <ul>
              <li>Castro Cruces Jorge Eduardo:     <em>Base de Datos y conexi&oacute;n, Vista de Administrador</em></li>
              <li>Jose Oscar Mendoza Cuellar:     <em>Vista de Profesor</em></li>
              <li>Perez Aguilar Ariadna Jaqueline:     <em>Vista de Usuario no Registrado, Vista Alumno</em></li>
            </ul>            
            <p>
              inscritos en el grupo <b>3CM13</b> de la profesora Laura Mendez Segundo
            </p>            
          </div> 
        </div>

        <div id="aside">
          <div id="sesion"><br>
            <h2>Inicio de Sesi&oacute;n</h2><br>
            <form action="Includes/loguear.php" method="POST">
              <label class="titu">Tipo Usuario</label><br>
                <input type="radio" id="tipoA" name="tusu" value="A" required><label for="tipoA">Administrador</label>
                <input type="radio" id="tipoP" name="tusu" value="P" ><label  for="tipoP">Profesor</label> 
                <input type="radio" id="tipoE" name="tusu" value="E"><label for="tipoE">Estudiante</label><br><br>
              <label class="titu">Clave Usuario</label><br>
              <input type="text" id="Usuario" name="Usuario" placeholder="Boleta/No. Empleado" pattern="[0-9]{10}" required><br><br>
              <label class="titu">Contraseña</label><br>
              <input type="password" id="clave" name="clave" required><br>
              <div align="mensaje">
                <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <p style="color: red; text-align: center;">¡Sus datos no son correctos!</p>
                <?php endif; ?>
                <?php if(isset($_GET['error2']) && $_GET['error2'] == 'true'): ?>
                    <p style="color: red; text-align: center;">¡Inhabilitado!</p>
                <?php endif; ?>
              </div>
              <a href="RecContra.php">Olvidaste Contraseña</a><br><br>
              <button type="submit" id="ingresar" name="ingresar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingresar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button><br>             
            </form>            
            <br>
            <a href="Registrar.php" id="reg">Reg&iacute;strate</a>
            <br><br>            
            <script src="fecha.js"></script>
            <p id="reloj">              
            </p>         
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