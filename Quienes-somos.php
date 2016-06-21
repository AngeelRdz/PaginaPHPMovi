<!DOCTYPE html>
<html>
  
    <head><title>¿Quienes Somos? - Club Movistar</title>
    <?php include('pages/head.php'); ?>
    </head>
    
  <body data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu.php'); ?>
 

      <?php include('pages/header.php'); ?>
 
  
  <!-- Inicia Zona Media -->

	<div class="container" id="cuerpo">  

 <!-- zona de contenido variable -->

		<div class="row">

			<div id="contenido"> 

				<div class="contenido_ajax">

					 		<p><!DOCTYPE html>
                        
                                <head>
                                    <link rel="stylesheet" href="css/estilos_popup.css">
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