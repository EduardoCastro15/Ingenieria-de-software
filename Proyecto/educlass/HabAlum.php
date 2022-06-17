<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>Admin</title>
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
            <h3>Habilitar Alumno</h3>    
            <form style="border-radius:1em; margin-left: 200px; margin-right: 200px; margin-top: 30px; text-align: center;" action="Includes/Hab.php" method="POST">
              <fieldset>
                <label >Habilitar Alumno</label><br>
                  <select name="bol" id="bol">
                    <option value="0">Seleccione:</option>
                    <?php  
                    require 'Includes/conexion.php';                  
                    $query1 = $conn -> query ("SELECT * FROM datos_alumno WHERE status=0;");
                    while ($valores1 = mysqli_fetch_array($query1)) {                      
                      echo '<option value="'.$valores1['Boleta'].'">'.$valores1['Boleta'].'</option>';
                    }
                    ?>                                
                  </select><br><br>
				  <button type="submit" id="HabA" name="HabA" value='H'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
				  <br><br>				
              </fieldset>
            </form>
			
			<form style="border-radius: 10em; margin-left: 200px; margin-right: 200px; margin-top: 30px; text-align: center;" action="Includes/DesH.php" method="POST">
              <fieldset>                
                <label>Desabilitar Alumno</label><br>
                  <select name="bol" id="bol">
                    <option value="0">Seleccione:</option>
                    <?php  
                    require 'Includes/conexion.php';                  
                    $query2 = $conn -> query ("SELECT * FROM datos_alumno WHERE status=1;");
                    while ($valores2 = mysqli_fetch_array($query2)) {                      
                      echo '<option value="'.$valores2['Boleta'].'">'.$valores2['Boleta'].'</option>';
                    }
                    ?>                                
                  </select><br><br>
				<button type="submit" id="DA" name="DA" value='D'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>				  
				<br><br>
              </fieldset>
            </form>
			<?php if(isset($_GET['msg']) && $_GET['msg'] == 'true'): ?>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: center;">¡Usuario Habilitado!</p>
                <?php endif; ?>
			<?php if(isset($_GET['msg2']) && $_GET['msg2'] == 'true'): ?>
                    <p style="color: red; font-weight: bold; font-size: 25px; text-align: center;">¡Usuario Deshabilitado!</p>
                <?php endif; ?>				
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