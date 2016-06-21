<!DOCTYPE html>
<html>
    
  <head><title>Club Movistar Vip - Club Movistar</title>
	<?php include('pages/head.php'); ?>
  </head>
  
  <body data-spy="scroll" data-target="#cuerpo">
  
      <?php include('pages/menu2.php'); ?>
 
      <?php include("sesion.php"); ?>

      <?php include('pages/header.php'); ?>
      
  <!-- Inicia Zona Media -->

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

<div class="row">
<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
<p class="moviGrande">Eres nuestro cliente premium, se parte de un mundo exclusivo</p>
<p class="textoClub">Nuestra plataforma más exclusiva y con mejores formas de disfrutar al máximo lo que todo <span class="moviBold">Club Movistar</span> tiene para ti, que eres nuestro cliente distinguido.<br><br>

<span class="moviBold">Club Movistar VIP</span> te ofrece una serie de beneficios exclusivos, regalos y entretenimiento, de la más alta calidad con la intención de brindar una experiencia totalmente VIP.<br><br>
    
Como nuestro cliente premium de Movistar por medio de esta plataforma puedes gozar de experiencias únicas, que van desde invitaciones a cenas gourmet, descuentos y cortesías en SPAs, hoteles y tiendas, acceso a los mejores eventos culturales y musicales, hasta boletos para premieres cinematográficas y mucho más.</p>
<p class="moviGrande">2x1 en salas de cine Platino</p>
<a href="Terminos-condiciones.html">T&eacute;rminos y condiciones</button>&nbsp;</a>&nbsp; <a href="https://clubmovistarvip.com/" target="_blank"><button class="btn btn-primary btns_vip headlineRegular" type="submit">OBTENER</button></a></div>
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

<!-- TERMINA VENTANA DE REGISTRO --> 


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