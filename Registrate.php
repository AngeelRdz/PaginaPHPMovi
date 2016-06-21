<!DOCTYPE html>
<html>
  
    <head><title>Regístrate - Club Movistar</title> 
    <?php include('pages/head.php'); ?>
    </head>

  <body data-spy="scroll" data-target="#cuerpo"> 
  
     <?php include('pages/menu.php'); ?>
 

      <?php include('pages/header.php'); ?>
		
 <!--  TERMINA ZONA SUPERIOR  --> 
 

<!-- INICIA ZONA MEDIA -->  

	<div class="container" id="cuerpo">
	
	<!-- ZONA DE CONTENIDO VARIABLE --> 

		<div class="row">

			<div id="contenido"> 

				<div class="contenido_ajax">

					<p><!DOCTYPE html> 
                        
                        <head>
                            <link rel="stylesheet" href="css/estilos_popup.css">
                        </head>
	 
                <div id="fotoRegistro" class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><img class="visible-lg-block visible-md-block" src="img/fotoRegistro.jpg" alt="" width="364" height="531" /> <img class="visible-sm-block" src="img/fotoRegistro_tablet.jpg" alt="" width="605" height="233" /> <img class="visible-xs-block" src="img/fotoRegistro_phone.jpg" alt="" width="378" height="272" /></div>
                <div class="col-lg-6 col-lg-offset-0  col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1"><p class="moviMuyGrande">Club Movistar<sup>&reg;</sup></p>
                <p class="textoRegistro">Es un programa de beneficios que te recompesa brind&aacute;ndote descuentos en tus lugares favoritos, sorprendentes premios y llev&aacute;ndote a los mejores eventos, partidos y premiers.</p>
                <p class="bienvenidoRegistro">&iexcl;Bienvenido!</p>
                <p class="textoRegistro">Para registrarte introduce tu N&uacute;mero Movistar (10 digitos)</p>
                
                <form id="form_registro" class="col-md-12">
                <div class="form-group"><label for="numeromovistar">N&uacute;mero Movistar</label> <input title="Tu Numero Movistar a registrar debera ser a 10 digitos" name="numeromovistar" class="form-control registrate" type="tel" maxlength="10" placeholder="ej: 55555555" pattern="([0-9]{10})" tabindex="0" onkeypress="return justNumbers(event);" required/></div>
                <div class="form-group"><label for="nombre">Tu Nombre</label> <input name="nombre" class="form-control registrate" type="text"  tabindex="1" pattern="([a-z A-Z ñáéíóú]{2,60})" title="Escribe tu nombre, por favor" required/></div>
                <div class="form-group"><label for="email">Tu Email</label> <input name="email" class="form-control registrate" type="email" tabindex="2" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="midireccion@mimail.com" required/></div>
                
                <div class="checkbox"><label><input name="norobot" value="norobot" type="checkbox"  tabindex="3"/> &iexcl;No soy un robot!</label></div>
                <input type="hidden" name="register" class="hidden" id="hidden" value="register" />
                <button id="enviarRegistro" class="btn btn-primary headlineRegular" type="submit">ENVIAR</button> 
                
                    <br>
                    <br>
                    
                    
                    <a href="Terminos-condiciones.html" class="terminos" id="terminos" target="_self">T&eacute;rminos y condiciones </a>
                    </form>
                
                    
                    </div>
                    
                </div>
                
                </p>

				</div>

             </div>

		</div>
    <br>
    <br>
    <br>

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