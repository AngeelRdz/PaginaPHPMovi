<!DOCTYPE html>
<html>
  
    <head><title>Recuperar Contraseña - Club Movistar</title>
    <?php include('pages/head.php'); ?>
    </head>
    
  <body  data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu.php'); ?>
 

      <?php include('pages/header.php'); ?>
 
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
		  
		  <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
              <p class="moviMuyGrande">Recuperar contrase&ntilde;a</p>
              </div>
              </div>
              
              <div class="row">
              <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0"><form id="reset_form1" class="form-horizontal">
              <p class="moviBold">Cambiar o Recuperar contrase&ntilde;a</p>
              <p>Para cambiar la contrase&ntilde;a o generar una nueva ingresa tu N&uacute;mero Movistar (10 d&iacute;gitos).</p>
              <p>Posteriormente recibir&aacute;s un mensaje en tu mail con un c&oacute;digo que despu&eacute;s podr&aacute;s personalizar aqu&iacute;.</p>
              
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="inputNoMovistar">No. Movistar</label>
              <div class="col-sm-8 col-xs-12"><input id="input_noMovi" class="form-control registrate" type="text" /></div>
              </div>
              
              
                  <div class="checkbox"><label><input type="checkbox" />&iexcl;No soy un robot!</label></div>


              <button id="enviar_reset1" class="btn btn-primary headlineRegular" type="submit">ENVIAR</button></form></div>
              <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0"><form id="reset_form2" class="form-horizontal">
              <p class="moviBold">Personalizar contrase&ntilde;a</p>
              <p>Por favor ingresa los siguientes datos que hemos enviado a tu mail y escoge una nueva contrase&ntilde;a.</p>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="inputNoMovistar">No. Movistar</label>
              <div class="col-sm-8 col-xs-12"><input id="inputEmail" class="form-control registrate" type="text" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="inputPassRecib">Contrase&ntilde;a recibida</label>
              <div class="col-sm-8 col-xs-12"><input id="input_pass_recib" class="form-control registrate" type="text" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="inputNewPass">Nueva contrase&ntilde;a</label>
              <div class="col-sm-8 col-xs-12"><input id="input_new_pass" class="form-control registrate" type="text" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="inputNewPasssConfirm">Confirmar nueva contrase&ntilde;a</label>
              <div class="col-sm-8 col-xs-12"><input id="input_new_pass_caonfirm" class="form-control registrate" type="text" /></div>
              </div>
              
                  
                  <div class="checkbox"><label><input type="checkbox" />&iexcl;No soy un robot!</label></div>
                  
                  
              <button id="enviar_reset2" class="btn btn-primary headlineRegular" type="submit">ENVIAR</button></form></div>
              </div>
<!-- termina el contenido variable -->

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