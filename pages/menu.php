<?php
session_start();
?>

<!-- INICIO DEL MENU -->

<div id="barraMenu" class="hidden-xs"> </div>

<div id="barraMenu2" class="hidden-sm hidden-md hidden-lg"> </div>

<div class="container" id="contenedorCuerpo">

	<div class="row" id="menuNavegacion">  

<!-- ESTE LOGO ES EL DE MOVI EN VERSION  DESKTOP "MOVISTAR" -->

		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
            
            <!-- LOGO DE MOVISTAR QUE SE ENCUENTRA EN LA BARRA DE MENU-->
            
		<a href="index.php">  <img id="logoMovi_phone" src="img/logo_movi_phone.png" width="178" height="37"/></a>

 		</div>

		<div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">

			<nav role="navigation" class="navbar navbar-default" id="menuGeneral">

<!-- Brand and toggle get grouped for better mobile display -->

        		<div class="navbar-header">

            		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" id="botonMobile">

                	<span class="sr-only">Menú</span>

                	<span class="icon-bar"></span>

                	<span class="icon-bar"></span>

                	<span class="icon-bar"></span>

            		</button>

        		</div>

<!-- INICIA EL MENU Y SUBMENU -->
       			<div id="navbarCollapse" class="collapse navbar-collapse">

            		<ul class="menu">	<li class="inicio first">
									 				<a href="index.php" target="_self">Inicio</a></li>
                        
                                                <li class="divider-vertical-second-menu"></li>
												
												<li class="submenu">
									 				<a>¿Qué es?<span class="icon-circle-down"></span></a>
													
													<ul class="children">	
														<li class="registratee first">
									 				          <a href="Registrate.php" target="_self">Regístrate</a>
												        </li>	
												
                                                        <li class="recuperar-password">
                                                            <a href="Recuperar-password.php" target="_self">Recuperar Contraseña</a>
                                                        </li>	

                                                        <li class="preguntas-frecuentes last">
                                                            <a href="Preguntas-frecuentes.php" target="_self">Preguntas Frecuentes</a>
                                                        </li>	

                                                        <li class="quienes somos">
                                                            <a href="Quienes-somos.php" target="_self">¿Quienes Somos?</a>
                                                        </li>
												
												    </ul>
                                                </li>
												 
                                                    
													<li class="divider-vertical-second-menu"></li>
                        
                        
                                                <li class="submenu">
									 				  <a>Beneficios<span class="icon-circle-down"></span></a>
                        
													<ul class="children">	
                                                        <li class="alimentos-y-bebidas last">
									 				<a href="#myModal" data-toggle="modal">Alimentos y Bebidas</a>
												</li> <li class="entretenimiento first" id="li_entretenimiento">
									 				<a href="#myModal" data-toggle="modal">Entretenimiento</a>
												</li> <li class="salud-y-belleza">
									 				<a href="#myModal" data-toggle="modal">Salud y Belleza</a>
												</li> <li class="vida-estilo">
									 				<a href="#myModal" data-toggle="modal">Vida y Estilo</a>
												</li></ul>
                                                </li>
                        	
                                                        <li class="divider-vertical-second-menu"></li>
                                                            <li class="Club-vip last">
									 				          <a href="Club-Plus.php" target="_self">Club Movistar Plus</a> 
                                                            </li>
                                                        <li class="divider-vertical-second-menu"></li><li class="Club-vip last">
                                                            <a href="Club-vip.php" target="_self">Club Movistar VIP</a>
                                                        </li>
                        
                                                        <li class="divider-vertical-second-menu"></li>
                        
                                                                <?php
                                                                    //session_start();
                                                                    if(isset($_SESSION["id"])){

                                                                    }else{?>
                                                                        <li>
                                                                             <a href="#myModal" data-toggle="modal">Mi Cuenta</a>
                                                                        </li> 
                                                                <?php } ?>
                                                        
                                                                <?php
                                                                    if(isset($_SESSION["id"])){?>
                                                                        <li id="perfil">
                                                                                <a href="logout.php" class="link_menu">Logout</a>
                                                                        </li>

                                                                        <li class="divider-vertical-second-menu"></li>

                                                                        <li id="perfil">
                                                                                <a href="MiPerfil.php">Mi Perfil</a>
                                                                        </li>
                                                                <?php } ?>
                                                        
                    </ul>
        		</div>

			</nav>

		</div> 
    
		</div>     
	</div>
			   
 <!--  TERMINA ZONA SUPERIOR  -->