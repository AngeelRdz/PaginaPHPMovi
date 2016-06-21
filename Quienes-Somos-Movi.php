<!DOCTYPE html>
<html>
  
    <head><title>¿Quienes Somos? - Club Movistar</title>
    <?php include('pages/head.php'); ?>
    </head>
    
  <body data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu2.php'); ?>

      <?php include("sesion.php"); ?>

      <?php include('pages/header.php'); ?>
 
  
  <!-- Inicia Zona Media -->

	<div class="container" id="cuerpo">  

 <!-- zona de contenido variable -->

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
                             
                        <div id="fotoQuienesSomos" class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><img class="visible-lg-block visible-md-block" src="img/quienes_somos.png" width="364" height="531"/> <img class="visible-sm-block" src="img/fotoRegistro_tablet.jpg" width="605" height="233"/> <img  class="visible-xs-block" src="img/quienes_somos.png" width="378" height="272"/></div>
                
                  <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-offset-1 col-xs-10 col-xs-offset-1"><p class="QuienesSomos">¿Quienes Somos?</p>  
                      
                    <p class="textoQuienes">Club Movistar es un programa de beneficios que te recompensa brindándote descuentos en tus lugares favoritos, sorprendentes premios y llevándote a los mejores eventos, partidos y premieres.</p>
                      <p class="bienvenidoQuienes">&iexcl;Bienvenido!</p>
                    
                      <p class="textoQuienes">Para registrarte introduce tu N&uacute;mero Movistar (10 digitos)</p>
                      
                      <div id="error_validate" class="col-md-12 alert alert-warning" style="display:none">Verifica que tus datos sean correctos.</div>
                      
                      <form id="form_registro" class="col-md-12" style="margin-bottom:5%;">
                <div class="form-group"><label for="numeromovistar">N&uacute;mero Movistar</label> <input name="numeromovistar" class="form-control registrate" type="tel" maxlength="10" placeholder="ej: 5512896520" tabindex="0"/></div>
                          
                                          <button id="enviarRegistro" class="btn btn-primary headlineRegular" type="submit">ENVIAR</button> 
                      </form>
                      
                      <a href="Terminos-condiciones.html" id="terminos" target="_self">T&eacute;rminos y condiciones</a>
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
          				
                                  <form action="home/index2.html" name="form1">
                                      <h7>Club Movistar</h7>
                                      <div><input type="tel" title="Tu Numero Movistar a registrar debera ser a 10 digitos" name="username" class="username popup" maxlength="10" pattern="[0-9]{10}" placeholder="Ingresa tu n&uacute;mero a 10 d&iacute;gitos" tabindex="0" onkeypress="return justNumbers(event);" required></div>
                                      <div><input type="password" name="contrasena" class="contrasena popup" placeholder="contraseña" maxlength="10"></div>
									  <div><button class="btn btn-primary" id="boton_entrar" onclick="validar()">Iniciar Sesi&oacute;n</button>
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