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
            
    <link rel="stylesheet" type="text/css" href="indexB.css">
	<link rel="stylesheet" type="text/css" href="../headerRegU.css">
    <link rel="stylesheet" type="text/css" href="../navRegU.css">
    <link rel="stylesheet" type="text/css" href="indexC.css">  
    	
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
              header("location: ../Principal.php");
            }
            ?>
          </p>          
        </div>
        <div id="heC">          
          <p><a href="../AlumnoP.php">Tecnolog&iacute;as para la Web</a></p>
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
                  <li><a href="../Temas/Tema1.php">Tema 1</a></li>
                  <li><a href="../Temas/Tema2.php">Tema 2</a></li>
                  <li><a href="../Temas/Tema3.php">Tema 3</a></li>
                  <li><a href="../Temas/Tema4.php">Tema 4</a></li>
				  <li><a href="../Temas/Tema5.php">Tema 5</a></li>
				  <li><a href="../Temas/Tema6.php">Tema 6</a></li>
				  <li><a href="../Temas/Tema7.php">Tema 7</a></li>
				  <li><a href="../Temas/Tema8.php">Tema 8</a></li>
				  <li><a href="../Temas/Tema9.php">Tema 9</a></li>
                </ul>
              </li>              
            </ul>        
          </li>

          <li><a href="Preguntas.php">Guia Estudio</a></li>

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
            <h3>Actividad bloque 3</h3><br>            
			<form>
				<h2 align="center"><u>Otra vez 100</u></h2>
				<dl>
				  <dt><label class="p1">En el vivero venden plantas de menta sueltas y por cajas con 10 piezas. Para tener 
						38 plantas, María decidió comprar 2 cajas y 18 plantas sueltas. En cambio, Pablo compro 1 caja y 
						y 28 plantas. ¿Cada uno juntó las 38 plantas?</label></dt>
				  <input type="image" src="Imagenes/p1.jpg" alt="p1" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="a" name="r" value="a" required><label for="a">Si</label><!--Respuesta-->
					<input type="radio" id="b" name="r" value="b"><label  for="b">No</label> 
				</dd>
					<dt><label class="p1"> ¿Porqué? </label></dt>
					<dd>
					<input type="text" id="c" name="r" placeholder="Escribe tu respuesta."><br><br>
					</dd>
				  
				  <dt><label class="p2">Trabaja en parejas. Cada uno encontrará fichas rojas y azules en su caja de sorpresas.
						Las fichas rojas valen 10 y las fichas azules valen 1. ¿Qué numeros se forman con las fichas de cada quién?</label></dt>
				  <input type="image" src="Imagenes/p2.jpg" alt="p2" width="200" height="100" style="float:center">
				  <dt><label class="p2">Escribe ambas respuestas.</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br>
					</dd>
					<dt><label class="p2">y</label></dt>
					<dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
					</dd>
				  
				  <dt><label class="p3">Encuentra diferentes maneras de formar el número 46 con fichas rojas y azules.
						¿Qué número se forma con 2 fichas rojas y 36 azules?</label></dt>
				  <input type="image" src="Imagenes/p3.jpg" alt="p3" width="200" height="100" style="float:center">
				  <dd>
					<input type="radio" id="d" name="r" value="d" required><label for="g">56</label>
					<input type="radio" id="e" name="r" value="e"><label  for="h">46</label> <!--Respuesta-->
					<input type="radio" id="f" name="r" value="f"><label for="i">33</label><br><br>
				  </dd>
				  
				  <dt><label class="p4">¿Y con 4 decenas y 26 unidades?</label></dt>
				  <input type="image" src="Imagenes/p4.jpg" alt="p4" width="200" height="100" style="float:center">
				  <dd>
					<input type="radio" id="g" name="r" value="g" required><label for="g">56</label>
					<input type="radio" id="h" name="r" value="h"><label  for="h">66</label> 
					<input type="radio" id="i" name="r" value="i"><label for="i">36</label><br><br><!--Respuesta-->
				  </dd>
				  
				  <dt><label class="p5">Si Rosa tiene 3 fichas rojas y 15 azules, y tú tienes 4 rojas,
						¿quién puede formar el número mayor?</label></dt>
				  <input type="image" src="Imagenes/p3.jpg" alt="p3" width="200" height="100" style="float:center">
				  <dd>
					<input type="radio" id="j" name="r" value="j" required><label for="g">Rosa</label>
					<input type="radio" id="k" name="r" value="k"><label  for="h">Raúl</label> 
					<input type="radio" id="l" name="r" value="l"><label for="i">Yo</label><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Más sobre el peso.</u></h2>
				<dl>
				  <dt><label class="p6">Formen equipos, y sobrepesen dos objetos. Digan cual es más pesado. 
						¿Qué sucederá si los colocan en la balanza?</label></dt>
				  <input type="image" src="Imagenes/p5.jpg" alt="p5" width="300" height="200" style="float:center">
				  <dt><label class="p6">Escribe tu respuesta.</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p7">¿Ocurrio lo que esperaban?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p8">¿Porqué?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p9">Por equipos recibiran cinco bolsas a pesar, usen la abalanza para ordenar
						las 5 bolsas, de la más ligera a la más pesada. </label></dt>
				  <input type="image" src="Imagenes/p6.jpg" alt="p6" width="300" height="200" style="float:center">
				  <dd>
				  <dt><label class="p9">Escribe como quedaron ordenadas las bolsas de tu equipo.</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p10">¿Cómo le hicieron para ordenar las bolsas?</label></dt>
				  <dd>
				  <input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Secuencia de sucesos en el tiempo: día, semana y mes.</u></h2>
				<dl>
				  <dt><label class="p11">Por turnos pasen a consultar la lista de asistencia y respondan las preguntas.</label></dt>
				  <input type="image" src="Imagenes/p7.jpg" alt="p7" width="300" height="200" style="float:center">
				  <dt><label class="p12">¿Qué día de la semana es hoy?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p13">¿Quiénes faltaron el miércoles anterior?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p14">¿Qué día fue ayer?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p15">¿Cuántos compañeros faltaron el jueves anterior? </label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p16">¿Qué día de la semana faltaron más alumnos?</label></dt>
				  <dd>
				  <input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
		
				<h2 align="center"><u>Estrategias de suma y resta.</u></h2>
				<dl>
				  <dt><label class="p17">Trabajen en parejas.</label></dt>
				  <input type="image" src="Imagenes/p8.jpg" alt="p8" width="400" height="300" style="float:center">
				  <dt><label class="p18">Luisa compró estos libros:</label></dt>
				   <input type="image" src="Imagenes/p9.jpg" alt="p9" width="200" height="100" style="float:center">
				   <dt><label class="p19">¿Cuánto pagó?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <input type="image" src="Imagenes/p10.jpg" alt="p10" width="400" height="200" style="float:center">
				  <dt><label class="p20">¿Cuánto dinero tengo ahora?</label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				  <dt><label class="p21">Para calcular cuánto dinero tiene, Fernando hizo lo siguiente.
				  Búco 37 en la recta.</label></dt>
				   <input type="image" src="Imagenes/p11.jpg" alt="p11" width="300" height="100" style="float:center">
				   <dt><label class="p22">Avanzo 25 lugares con saltos de 10 y uno de 5.</label></dt>
				   <input type="image" src="Imagenes/p12.jpg" alt="p12" width="300" height="100" style="float:center">
				  <dt><label class="p23">¿A que número llegó? </label></dt>
				  <dd>
					<input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				   <input type="image" src="Imagenes/p13.jpg" alt="p13" width="400" height="200" style="float:center">
				  <dt><label class="p24">¿Cuánto le falta a Layla para comprar el libro?</label></dt>
				  <dd>
				  <input type="text" placeholder="Escribe tu respuesta."><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Mosaicos y configuraciones geométricas.</u></h2>
				<dl>
				  <dt><label class="p25">En el dibujo identifica cada ficura geométrica e ilumínala con el color correspondiente.</label></dt>
				  <input type="image" src="Imagenes/p14.jpg" alt="p14" width="400" height="300" style="float:center">
				  <dt><label class="p26">Sube tu respuesta.</label></dt>
				   <input type="file" id="archivo" name="archivo"accept=".doc,.docx,.pdf"><br><br>
				   <dt><label class="p27">Escribe cuántas figuras geométricas de cada tipo coloreaste.</label></dt>
				  <input type="image" src="Imagenes/p15.jpg" alt="p15" width="400" height="200" style="float:center">
				    <dt><label class="p27">Sube tu respuesta.</label></dt>
					 <input type="file" id="archivo" name="archivo"accept=".doc,.docx,.pdf"><br><br>
				   <dt><label class="p28">Colorea este diseño con los colores de cada figura geométrica. </label></dt>
				  <input type="image" src="Imagenes/p16.jpg" alt="p16" width="400" height="300" style="float:center">
				   <dt><label class="p29">Sube tu respuesta.</label></dt>
				   <input type="file" id="archivo" name="archivo"accept=".doc,.docx,.pdf"><br><br>
				  <dt><label class="p30">Escribe cuántas figuras geométricas de cada tipo coloreaste.</label></dt>
				  <input type="image" src="Imagenes/p17.jpg" alt="p17" width="400" height="200" style="float:center">
				  <dt><label class="p31">Sube tu respuesta.</label></dt>
				<input type="file" id="archivo" name="archivo"accept=".doc,.docx,.pdf"><br><br>
				  <dt><label class="p32">Observa los tapetes de José y Sara. Colorea lo que falta.</label></dt>
				   <input type="image" src="Imagenes/p18.jpg" alt="p18" width="300" height="100" style="float:center">
				   <dt><label class="p33">Completa.</label></dt>
				  <dt><label class="p16">En el de José hay </label>
				  <input type="text" id="nombre" name="nombre" placeholder="Escribe la respuesta.">
				  <label class="p16">triángulos de color azul. </label>
				  <dt><label class="p17">En el de Sara hay</label>
				  <input type="text" id="nombre" name="nombre" placeholder="Escribe la respuesta.">
				  <label class="p16">triángulos de color azul.</label>
				</dl>
			
				<!------------------------------------------------------------------------------------------------------------>
			
				<h2 align="center"><u>M&aacute;s sobre las longitudes</u></h2>
				<dl>
				  <dt><label class="p1">¿Qu&eacute; zapato tendra la agujeta m&aacute;s larga?</label></dt>
				  <input type="image" src="Imagenes/cordones.png" alt="cordones" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="a" name="r" value="a" required><label for="a">Botas</label><!--Respuesta-->
					<input type="radio" id="b" name="r" value="b"><label  for="b">Zapatos de f&uacute;tbol</label> 
					<input type="radio" id="c" name="r" value="c"><label for="c">Tenis</label><br><br>
				  </dd>
				  
				  <dt><label class="p2">¿Cu&aacute;les de est&aacute;s porterias son las m&aacute;s grandes?</label></dt>
				  <input type="image" src="Imagenes/porteria.png" alt="porteria" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="d" name="r" value="d" required><label for="d">1, 2 y 5</label>
					<input type="radio" id="e" name="r" value="e"><label  for="e">3, 4 y 6</label> 
					<input type="radio" id="f" name="r" value="f"><label for="f">1, 2 y 6</label><br><br><!--Respuesta-->
				  </dd>
				  
				  <dt><label class="p3">¿Cu&aacute;l de est&aacute;s carreteras es la m&aacute;s larga?</label></dt>
				  <input type="image" src="Imagenes/carretera.png" alt="carretera" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="g" name="r" value="g" required><label for="g">1</label>
					<input type="radio" id="h" name="r" value="h"><label  for="h">2</label> <!--Respuesta-->
					<input type="radio" id="i" name="r" value="i"><label for="i">3</label><br><br>
				  </dd>
				  
				  <dt><label class="p4">¿Cu&aacute;l de est&aacute;s carreteras es la m&aacute;s corta?</label></dt>
				  <input type="image" src="Imagenes/carretera.png" alt="carretera" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="g" name="r" value="g" required><label for="g">1</label>
					<input type="radio" id="h" name="r" value="h"><label  for="h">2</label> 
					<input type="radio" id="i" name="r" value="i"><label for="i">3</label><br><br><!--Respuesta-->
				  </dd>
				  
				  <dt><label class="p5">Mi de tu estatura y anotala</label></dt>
				  <input type="image" src="Imagenes/estatura.png" alt="estatura" width="200" height="200" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_1" name="Respuesta_1" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Figuras en cuerpos geom&eacute;tricos</u></h2>
				<dl>
				  <dt><label class="p6">De los siguientes objestos ¿Cu&aacute;les no ruedan? </label></dt>
				  <input type="image" src="Imagenes/rodar.png" alt="rodar" width="200" height="200" style="float:center">
				  <dd>
					<input type="radio" id="j" name="r" value="j" required><label for="j">Goma</label>
					<input type="radio" id="k" name="r" value="k"><label  for="k">Pelota</label> <!--Respuesta-->
					<input type="radio" id="l" name="r" value="l"><label for="l">Libro</label><br><br>
				  </dd>
				  
				  <dt><label class="p7">¿En que se parecen los objetos que ruedan?</label></dt>
				  <input type="image" src="Imagenes/pelota.png" alt="pelota" width="100" height="100" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_2" name="Respuesta_2" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p8">Dibuja una galleta que tenga la misma forma que la caja y subelo</label></dt>
				  <input type="image" src="Imagenes/caja.png" alt="caja" width="100" height="100" style="float:center">
				  <dd>
				  <input type="file" id="archivo_1" name="archivo_1" accept="image/jpg,image/png"><br><br>
				  </dd>
				  
				  <dt><label class="p9">¿Cu&aacute;l de est&aacute;s es un rectangulo?</label></dt>
				  <input type="image" src="Imagenes/figuras.png" alt="figura" width="300" height="100" style="float:center">
				  <dd>
					<input type="radio" id="m" name="r" value="m" required><label for="m">1</label>
					<input type="radio" id="n" name="r" value="n"><label  for="n">2</label> 
					<input type="radio" id="o" name="r" value="o"><label for="o">3</label><!--Respuesta-->
					<input type="radio" id="p" name="r" value="p"><label for="p">4</label><br><br>
				  </dd>
				  
				  <dt><label class="p10">Mide tu estatura y anotala</label></dt>
				  <input type="image" src="Imagenes/estatura.png" alt="robot" width="200" height="200" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_3" name="Respuesta_3" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p11">Dibuja una parque y subelo</label></dt>
				  <dd>
					<button type="file" id="archivo_2" name="archivo_2" accept="image/jpg,image/png"></button><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>M&aacute;s de capacidad</u></h2>
				<dl>
				  <dt><label class="p11">Si tienes un vaso con agua y el otro sin agua ¿C&oacute;mo le har&iacute;as para llenar ambos vasos con la misma cantidad de agua?</label></dt>
				  <input type="image" src="Imagenes/agua.png" alt="agua" width="200" height="200" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_4" name="Respuesta_4" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p12">Con un molde de cualquier forma se debe llenar al ras con plastilina. Una vez hecho esto sacar plastilina y subir una foto</label></dt>
				  <input type="image" src="Imagenes/molde.png" alt="molde" width="200" height="200" style="float:center">
				  <dd>
					<input type="file" id="archivo_3" name="archivo_3" accept="image/jpg,image/png"><br><br>
				  </dd>
				</dl>
				 
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Cooperativa de manteles</u></h2>
				<dl>
				  <dt><label class="p13">En una hoja tamaño carta dibujar un mantel y en otra media hoja dibujar un mantel más pequeño. Una vez realizado esto subirlo<label></dt>
				  <dd>
					<input type="file" id="archivo_4" name="archivo_4" accept="image/jpg,image/png"><br><br>
				  </dd>
				  
				  <dt><label class="p14">Si tienes 25 manteles ¿Cu&aacute;ntos hacen falta para tener 100?</label></dt>
				  <dd>
					<input type="text" id="Respuesta_5" name="Respuesta_5" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p15">Si tienes 10 manteles grandes y 5 pequeños, los grandes los das a 10 pesos y los pequeños a 1 ¿Cu&aacute;nto dinero obtendrias de la venta?</label></dt>
				  <input type="image" src="Imagenes/manteles.png" alt="manteles" width="200" height="200" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_6" name="Respuesta_6" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p16">Si tienes 200 pesos ¿Cu&aacute;ntos manteles debes de vender para tener 265?</label></dt>
				  <input type="image" src="Imagenes/manteles.png" alt="manteles" width="200" height="200" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_7" name="Respuesta_7" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				</dl>
				
				<!------------------------------------------------------------------------------------------------------------>
				
				<h2 align="center"><u>Evaluaci&aacute;n</u></h2>
				<dl>
				  <dt><label class="p17">Armando y Laura pusieron agua en tres vasos. El primero es m&aacute;s lleno. los otros tienen la misma cantidad de liquido. Dibuja el agua en cada vaso y subelo.</label></dt>
				  <input type="image" src="Imagenes/Vasos.png" alt="Vasos" width="200" height="200" style="float:center">
				  <dd>
					<input type="file" id="archivo_5" name="archivo_5" accept="image/jpg,image/png"><br><br>
				  </dd>
				  
				  <dt><label class="p18">Dibuja la huella que deja cada figura de la imagen y subela.</label></dt>
				  <input type="image" src="Imagenes/huella.png" alt="huella" width="200" height="200" style="float:center">
				  <dd>
					<input type="file" id="archivo_6" name="archivo_6" accept="image/jpg,image/png"><br><br>
				  </dd>
				  
				  <dt><label class="p19">Escribe los n&uacute;umeros que faltan</label></dt>
				  <input type="image" src="Imagenes/numeros.png" alt="numeros" width="500" height="100" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_8" name="Respuesta_8" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p20">Escribe 8 maneras de obtene el n&uacute;umero 100</label></dt>
				  <input type="image" src="Imagenes/sumas.png" alt="sumas" width="200" height="100" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_9" name="Respuesta_9" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				  
				  <dt><label class="p21">Viridiana orden&oacute; las actividades de la semana como en la imagen. Su maestro le dijo que hay un error en el orden ¿Cu&aacute;l es?</label></dt>
				  <input type="image" src="Imagenes/semana.png" alt="semana" width="500" height="100" style="float:center">
				  <dd>
					<input type="text" id="Respuesta_10" name="Respuesta_10" placeholder="Escribe tu respuesta." required><br><br>
				  </dd>
				</dl>
				
				<input type="submit" id="enviar" name="enviar" value="enviar">
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