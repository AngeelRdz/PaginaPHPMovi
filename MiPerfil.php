<!DOCTYPE html>
<html>
  
    <head><title>Mi Perfil - Club Movistar</title>
    <?php include('pages/head.php'); ?>
    </head>
  
  <body  data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu2.php'); ?>
 
      <?php include("sesion.php"); ?>

      <?php include('pages/header.php'); ?>
 
<!-- INICIA ZONA MEDIA --> 

	<div class="container" id="cuerpo">
	
	<!-- ZONA DE CONTENIDO VARIABLE --> 

		<div class="row">

			<div id="contenido"> 

				<div class="contenido_ajax">

					<p><!DOCTYPE html>
                        
                        <head>
                             <style>
                                .adrespo { 
                                    color: #10628a;  
                                    font-family: Headline-Bold;
                                    margin-left: 71%;
                                    font-size: 16pt;
                                }  
                            </style>
                        </head>
		  
		  <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
              <p class="moviMuyGrande">Mi Perfil</p>
              </div>
              </div>
              
              <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0"><form id="reset_form5" class="form-horizontal">
              <p class="moviBold">* Si deseas actualizar tus datos haz click en modificar</p>
                  <br>
             <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="nombre_perfil">Nombre: </label>
              <div class="col-sm-8 col-xs-12"><input id="nombre_perfil" class="form-control registrate" placeholder="Nombre" type="text" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="numerotelefonico_perfil">N&uacute;mero telef&oacute;nico: </label>
              <div class="col-sm-8 col-xs-12"><input id="numerotelefonico_perfil" class="form-control registrate" type="tel" maxlength="10" pattern="([0-9]{10})" placeholder="N&uacute;mero telef&oacute;nico" onkeypress="return justNumbers(event);" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="numerointerior_perfil">N&uacute;mero interior: </label>
              <div class="col-sm-8 col-xs-12"><input id="numerointerior_perfil" class="form-control registrate" type="text" placeholder="N&uacute;mero interior" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="colonia_perfil">Colonia: </label>
              <div class="col-sm-8 col-xs-12"><input id="colonia_perfil" class="form-control registrate" type="text" placeholder="Colonia" /></div>
              </div>
                  
                  <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="delegacion_perfil">Delegaci&oacute;n: </label>
              <div class="col-sm-8 col-xs-12"><input id="delegacion_perfil" class="form-control registrate" type="text" placeholder="Delegaci&oacute;n" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="email_perfil">Email: </label>
              <div class="col-sm-8 col-xs-12"><input id="email_perfil" class="form-control registrate" name="email" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="midireccion@mimail.com" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="calle_perfil">Calle: </label>
              <div class="col-sm-8 col-xs-12"><input id="calle_perfil" class="form-control registrate" type="text" placeholder="Calle" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="numeroexterior_perfil">N&uacute;mero exterior:  </label>
              <div class="col-sm-8 col-xs-12"><input id="numeroexterior_perfil" class="form-control registrate" type="text" placeholder="N&uacute;mero exterior" /></div>
              </div>
                  
                  <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="codigopostal_perfil">C&oacute;digo postal: </label>
              <div class="col-sm-8 col-xs-12"><input id="codigopostal_perfil" class="form-control registrate" type="text" placeholder="C&oacute;digo postal" /></div>
              </div>
              <div class="form-group"><label class="control-label col-sm-4 col-xs-12" for="estado_perfil">Estado: </label>
              <div class="col-sm-8 col-xs-12"><input id="estado_perfil" class="form-control registrate" type="text" placeholder="Estado" /></div>
              </div>
             
               <button id="modificar" class="btn btn-primary headlineRegular" type="submit">MODIFICAR</button></form></div>
              </div>

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
          				
                                  <form action="" method="post">
                                      <h7>Club Movistar</h7>
                                      <div><input type="tel" title="Tu Numero Movistar a registrar debera ser a 10 digitos" name="username" class="username" maxlength="10" pattern="[0-9]{10}" placeholder="Ingresa tu n&uacute;mero a 10 d&iacute;gitos" tabindex="0" onkeypress="return justNumbers(event);" required></div>
                                      <div><input type="password" name="contrasena" class="contrasena" placeholder="contraseña" maxlength="10"></div>
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

<?php include('pages/footer3.php'); ?>

<!-- TERMINA VENTANA DE REGISTRO --> 

 <!-- INICIA VENTANA MODAL DE LA TRIVIA -->
     <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content3">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Contesta la Trivia</h5>
        </div>
        <div class="modal-body">
		
          <p>¿Quienes son las autoras del libro?</p>
		  
		  <input type="text" class="form-control" id="recipient-name">
		  
		  <br><p>¿Como se llaman los protagonistas de la historia?</p>
		  
		  <input type="text" class="form-control" id="recipient-name">
		  
		  <br><p>¿Porque te gustaria ganar el libro?</p>
		  
		  <input type="text" class="form-control" id="recipient-name">
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		  <button  type = "button"  class = "btn btn-default"> Guardar respuestas </ button> 
        </div>
      </div>
    </div>
  </div>
    
    <!-- TERMINA VENTANA MODAL DE LA TRIVIA -->


    
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