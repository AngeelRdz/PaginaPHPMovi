<!DOCTYPE html>
<html>
  
    <head><title>Recuperar Contraseña - Club Movistar</title>
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

    
    <?php include('pages/footer3.php'); ?>




    
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