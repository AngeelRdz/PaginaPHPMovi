<!DOCTYPE html>
<html>
    
  <head><title>Club Movistar Plus - Club Movistar</title>
	<?php include('pages/head.php'); ?>
  </head>
  
  <body data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu.php'); ?>
 

      <?php include('pages/header.php'); ?>
 

  <!-- Inicia Zona Media -->

	<div class="container" id="cuerpo"> 
	
<!-- ZONA DE CONTENIDO VARIABLE --> 

		<div class="row">

			<div id="contenido"> 

				<div class="contenido_ajax">

					<p><!DOCTYPE html>
                        
                        <head>
                            <link rel="stylesheet" href="css/estilos_popup.css">
                        </head>

<div class="row">
<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
<p class="moviGrande">Vive la experiencia Movistar con un + adicional</p>
<p class="textoClub">Este es un programa digital de beneficios exclusivos creado con la intención de brindarte un mayor valor agregado.<br><br> Disfruta cada mes de un sinfín de beneficios.</p>
<p class="textoClub">2x1 en salas de cine tradicional, invitaciones a premieres, además de una serie de descuentos y cortesías en restaurantes, lugares de entretenimiento, diversos servicios y establecimientos de salud y belleza.</p>
<p class="moviGrande">Club Movistar PLUS es un programa con un + para ti</p>
<a href="Terminos-condiciones.html">T&eacute;rminos y condiciones</button>&nbsp;</a>&nbsp; <a href="https://clubmovistarplus.com/" target="_blank"><button class="btn btn-primary btns_vip headlineRegular" type="submit">OBTENER</button></a></div>
<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><br /> <img class="img-responsive visible-lg-block visible-md-block" src="img/vip.png" alt="" width="374" height="514" /> <img class="img-responsive hidden-md hidden-lg" src="img/vip_tablet.png" alt="" width="669" height="313" /></div>
</div>
<!-- termina el contenido variable -->
<p>&nbsp;</p>

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
    
    
<!-- TERMINA VENTANA DE REGISTRO --> 


<?php include('pages/footer2.php'); ?>

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