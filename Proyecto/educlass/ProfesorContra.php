<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>Prof Contra</title>
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
          <p id="husu">Nombre Usuario</p>
          <p>Tipo</p>
        </div>
        <div id="heC">          
          <p><a href="Principal.html">INGENIERIA DE SOFTWARE</a></p>
        </div>       
      </div>

      <div class="nav">
        <ul class="menu">
          <li>
            <a>Gestionar</a>
            <ul class="submenu">                        
              <li><a href="">Alumno</a></li>
              <li><a href="">Grupo</a></li>
            </ul>        
          </li>

          <li>
            <a>Gestionar Temas</a> 
            <ul class="submenu">              
              <li><a>Material</a>
                <ul class="submenu2">                  
                  <li><a href="">Video</a></li>
                  <li><a href="">Impresion</a></li>
                  <li><a href="">Actividad en Linea</a></li>
                  <li><a href="">Examen/Evaluacion</a></li>
                </ul>
              </li>
              <li><a>Bloque</a>              
                <ul class="submenu2">
                  <li><a>Material</a></li>
                  <li><a href="">Bloque I</a>
                    <ul class="submenu3">
                      <li><a href="">Tema 1</a></li>
                      <li><a href="">Tema 2</a></li>
                      <li><a href="">Tema 3</a></li>
                      <li><a href="">Tema 4</a></li>
                      <li><a href="">Tema 5</a></li>
                    </ul>
                  </li>
                  <li><a href="">Bloque II</a></li>
                  <li><a href="">Bloque III</a>
                    <ul class="submenu3">
                      <li><a href="">Tema 1</a></li>
                      <li><a href="">Tema 2</a></li>
                      <li><a href="">Tema 3</a></li>
                      <li><a href="">Tema 4</a></li>
                      <li><a href="">Tema 5</a></li>
                    </ul>
                  </li>                  
                </ul>
              </li>
              <li><a href="">Libro</a></li>              
            </ul>
          </li>

          <li>
            <a>Actualizar Perfil</a> 
              <ul class="submenu">
                <li><a href=""> Foto </a></li>                
                <li><a href=""> Datos </a></li>                
              </ul>
          </li> 

          <li><a href="ProfesorContra.html">Contraseña</a></li>
        
          <li>
            <a href="">Soporte</a>           
          </li>    

          <li>
            <a href="">Ayuda</a>             
          </li>

        </ul>

        <div class="navD">
          <p><a href="">Cerrar Sesion</a></p>          
        </div>    
        
      </div>

      <div id="contenido">

        <div id="section">
          <div class="article1"><br>
            <h3>Actualizar Contraseña</h3>
            <form id="camcon">
              <fieldset>
                <br>
                <label class="titu">Contraseña Anterior:</label>
                <input type="password" id="claveA" name="claveA" required><br><br>

                <label class="titu">Nueva Contraseña:</label>
                <input type="password" id="claveN" name="claveN" required><br><br> 

                <label class="titu">Confirmar Contraseña:</label>
                <input type="password" id="claveC" name="claveC" required><br><br>

                <button type="reset" id="limpiar" name="limpiar" value="limpiar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" id="confirma" name="confirma" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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