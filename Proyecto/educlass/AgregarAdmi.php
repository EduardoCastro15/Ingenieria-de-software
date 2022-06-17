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
            <h3>Agregar Administrador</h3>
			<form action="Includes/regAdmi.php" method="POST">
              <fieldset style="border-radius: 1em; margin: 100px; margin-top: 20px; text-align: center;">                
                <br><br>
                <label class="titu">Nombre: </label>
                <input type="text" id="nombreR" name="nombreR" pattern="[A-Za-z]+" required>&nbsp;
                <label class="titu">Apellido Paterno: </label>
                <input type="text" id="Ap_PatR" name="Ap_PatR" pattern="[A-Za-z]+" required>&nbsp;
                <label class="titu">Apellido Materno: </label>
                <input type="text" id="Ap_MatR" name="Ap_MatR" pattern="[A-Za-z]+" required><br><br><br>

                <label class="titu">Correo Principal</label>&nbsp;
                <input type="email" id="CorreoR" name="CorreoR" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
                <label class="titu">Clave Usuario</label>&nbsp;
                <input type="text" id="claveUR" name="claveUR" pattern="[0-9]{10}" placeholder="##########" required>&nbsp;&nbsp;<br><br>                                              
                <br>
				<label class="titu">Contraseña</label>
                <input type="password" id="claveR" name="claveR" required>
                <br><br>                              
                <button type="reset" id="limpiar" name="limpiar" value="limpiar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Limpiar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" id="envia" name="envia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>                
                  <?php if(isset($_GET['msg']) && $_GET['msg'] == 'true'): ?>
					<br><br>
                    <p style="color: red; font-weight: bold; font-size: 30px; text-align: right;">Datos enviados</p>
                  <?php endif; ?>                
				  <?php if(isset($_GET['msg2']) && $_GET['msg2'] == 'true'): ?>
					<br><br>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: right;">La clave de ususario ya se encuentra registrado, Verificar Datos.</p>
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