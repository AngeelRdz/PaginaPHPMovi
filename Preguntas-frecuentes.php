<!DOCTYPE html>
<html>
    
    <head><title>Preguntas Frecuentes - Club Movistar</title>
    <?php include('pages/head.php'); ?>
    </head>
  
  <body data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu.php'); ?>
 

      <?php include('pages/header.php'); ?>
 
  
  <!-- INICIA ZONA MEDIA --> 

	<div class="container" id="cuerpo">
	
	<!-- ZONA DE CONTENIDO VARIABLE --> 

		<div class="row">

			<div id="contenido"> 

				<div class="contenido_ajax">
					
					<p><!DOCTYPE html>
<html> 
	<head>
            <link rel="stylesheet" href="css/estilos_popup.css">
	</head>
	<body>
	
						<h2 style="text-align: center;">Preguntas Frecuentes</h2>
						
		   		<h4 class="preguntas">1. ¿Quién puede inscribirse a Club?</h4> 
			<p class="respuesta">Se pueden inscribir los clientes particulares que cuenten con l&iacute;nea de voz o Internet. Ver T&eacute;rminos y Condiciones.</p>
				<h4 class="preguntas">2. ¿Puedo inscribir a Club Movistar todas mis líneas?</h4> 
			<p class="respuesta">S&iacute;, si cuentas con m&aacute;s de una l&iacute;nea, inscribe todas tus l&iacute;neas m&oacute;viles y de Internet (UMTS).</p>
				<h4 class="preguntas">3. ¿Cómo me registro a Club Movistar?</h4> 	
			<p class="respuesta">Es muy f&aacute;cil, s&oacute;lo tienes que ingresar tu N&uacute;mero Movistar y completar tus datos.</p>
				<h4 class="preguntas">4. ¿Cuánto cuesta inscribirse a Club Movistar?</h4> 	
			<p class="respuesta">Inscribirte a Club Movistar es totalmente gratis. S&oacute;lo queremos recompensarte por formar parte de nosotros.</p>
				<h4 class="preguntas">5. ¿Cómo participo en una promoción?</h4> 
			<p class="respuesta">S&oacute;lo tienes que ingresar con tu usuario, contrase&ntilde;a y participar. Es importante que siempre leas los T&eacute;rminos y Condiciones.</p>
				<h4 class="preguntas">6. ¿Cómo obtengo un descuento en algún establecimiento?</h4> 
			<p class="respuesta">Ingresa a la secci&oacute;n de Descuentos, selecciona el establecimiento que te interesa y ent&eacute;rate de qu&eacute; forma obtenerlo. En algunos casos tendr&aacute;s que imprimir un cup&oacute;n y presentarlo en taquilla, en otros tendr&aacute;s que ingresar un c&oacute;digo y en otros s&oacute;lo necesitar&aacute;s mencionar tu N&uacute;mero Movistar.</p>
				<h4 class="preguntas">7. ¿En las promociones puedo participar más de una vez?</h4> 
			<p class="respuesta">En cada promoci&oacute;n s&oacute;lo podr&aacute;s participar una vez por N&uacute;mero Movistar, si tienes m&aacute;s N&uacute;meros Movistar puedes participar con todos para aumentar tus posibilidades de &eacute;xito pero s&oacute;lo podr&aacute;s ganar una vez. Es decir es un solo premio por cliente.</p>
				<h4 class="preguntas">8. ¿Dónde puedo recoger mi premio?</h4>
			<p class="respuesta">En los T&eacute;rminos y Condiciones de cada promoci&oacute;n se indicar&aacute; el lugar y fecha para recoger tu premio. Es indispensable que para reclamar el premio se presente el ganador con una identificaci&oacute;n oficial.</p>

	</body> 
</html></p>
<p class="moviMuyGrande">&nbsp;</p>
 
				</div>

             </div>

		</div>

 <!-- termina el contenido variable -->

	</div>

  <!-- Termina Zona Media -->

  
</div>

<!-- termina la zona del cuerpo -->


<!-- INICIA VENTANA DE REGISTRO -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        
        <div class="modal-body">
          <div><img src="img/logo_movi.png" id="logoClub2" width="190" height="121"/></div>
		
          <h6>Bienvenido a</h6>
          				
                                  <form action="respuesta_ingreso.php" method="POST" id="formulario">
                                      <h7>Club Movistar</h7>
                                      <div><input type="tel" title="Tu Numero Movistar a registrar debera ser a 10 digitos" id="usuario" name="usuario" class="username popup" maxlength="10" pattern="[0-9]{10}" placeholder="Ingresa tu n&uacute;mero a 10 d&iacute;gitos" onkeypress="return justNumbers(event);" required></div>
                                      <div><input type="password" id="contra" name="contra" class="contrasena popup" placeholder="contraseña" maxlength="10"></div>
                                      
                                      <?php
                            if(isset($_GET["error"])){
                                echo "<label class='error'>Usuario y/o Contraseña incorrectas</label>";
                            }
                        ?>
                                      
									  <div><button class="btn btn-primary" id="boton_entrar">Iniciar Sesi&oacute;n</button>
                                      </div>
                                  </form>
            
                                     <a href="#" data-dismiss="modal" id="cerrar">X</a> 
         <div><a href="#" id="Recuperarcontrasena_login" target="_self">Recuperar contraseña</a></div> 
          
          <div><a href="Registrate.html" id="Registrate_login" target="_self">¿A&uacute;n no eres miembro? Reg&iacute;strate</a></div>
      </div>
          
          <div><img src="img/Logo_movistar_horizontal.png" id="logoClubMovistar"/></div>
          
    </div>
  </div>
</div>
    

<?php include('pages/footer2.php'); ?>
    
<!-- TERMINA VENTANA DE REGISTRO --> 


      <script>
    function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
</script>
      
      
  </body>
</html>