<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Viviana Villamayor - Psicóloga</title>
  <meta name="description" content="viviana c. villamayor fleitas, psicologa, vigo">
  <meta name="author" content="http://ryck.me/">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
<script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?sensor=false&language=es&region=ES">
</script>
<script type="text/javascript">
  function initialize() {
  
    var myLatlng = new google.maps.LatLng(42.227736,-8.718976);
    var myOptions = {
      zoom: 12,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("mapa_contacto"), myOptions);
    
    var marker = new google.maps.Marker({
    	position: myLatlng,
        map: map,
        title:"KAPS"
    }); 

  }    

</script>  
</head>

<body onload="initialize()">

  <div class="container">
	<header class="front row">
		<div class="three columns" id="logo">
				<a href="http://vivianavillamayor.com"><img src="img/logo.png" alt="Viviana Villamayor" /></a>
		</div>	
		<div class="twelve columns slogan offset-by-one">
		  <hgroup>
			  <h1>Viviana C. Villamayor Fleitas</h1>
			  <h2>Licenciada en Psicología. Col. Nº G-4272</h2>
			  <h2>Máster en Psicología Clínica y de la Salud</h2>
			  <h3><span><img src="img/75-phone.png" alt="fijo" /> 902 810 210</span><span><img src="img/32-iphone.png" alt="móvil" /> 622 484 945</span></h3>
		  </hgroup>
		</div>
	</header>
	
    <div id="main" role="main" class="clearfix">
		<div class="three columns" id="sidebar">
			<nav>
				<ul>
					<li><a href="home">Inicio</a></li>
					<li><a href="terapia">Terapia</a></li>
					<li><a href="areas">Áreas</a></li>
					<li><a href="cv">Currículum</a></li>
					<li><a class="active" href="contacto">Contacto</a></li>
				</ul>
			</nav>
			<aside>
				<a href="http://www.facebook.com/pages/Viviana-Villamayor-Fleitas-Psicóloga/210887208961346"><img src="img/facebook.png" alt="Facebook" /></a>
			</aside>
		</div>	
		
		<div class="twelve columns content offset-by-one">

			<section class="six columns alpha">
				<article class="ubicacion"">
          <h3 class="cabecera">¿Dónde estamos?</h3>
					<aside>
  					<a href="http://kaps.es" class="kaps">KAPS</a><br />Carretera Provincial, 12<br />36204 Vigo
  				</aside>

          <div id="mapa_contacto"></div>
				</article>		
								
			</section>
			<section  class="six columns omega">
				<article id="contact-form">
					<h3 class="cabecera">¿Alguna consulta?</h3>
            <?php
			        //init variables
			        $cf = array();
			        $sr = false;
			
			        if(isset($_SESSION['cf_returndata'])){
				        $cf = $_SESSION['cf_returndata'];
			         	$sr = true;
			        }
                    ?>
                    <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                        <li id="info">Hubo algún problema con el formulario de contacto:</li>
                        <?php 
				        if(isset($cf['errors']) && count($cf['errors']) > 0) :
					        foreach($cf['errors'] as $error) :
				        ?>
                        <li><?php echo $error ?></li>
                        <?php
					        endforeach;
				        endif;
				        ?>
                    </ul>
                    <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">¡Gracias por ponerse en contacto con nosotros!</p>
                    <form method="post" action="process.php" id="main-contact-form">
                        <label for="name">Nombre: <span class="required">*</span></label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Nombre" required autofocus />
                        
                        <label for="email">Correo electrónico: <span class="required">*</span></label>
                        <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="usuario@dominio.es" required />
                                     
                        <label for="message">Mensaje: <span class="required">*</span></label>
                        <textarea id="mensaje" name="mensaje"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                        
                        
                        <input type="submit" value="Enviar" id="submit" />
                    </form>
                    <span id="loading"></span>
                    <?php if ($sr) unset($_SESSION['cf_returndata']); ?>
				</article>
							
			</section>
		</div>
		
			
    </div>
    <footer class="twelve columns pie offset-by-four">
	    <br />
	    <hr class="carved" />
    	<a href="mailto:info@vivianavillamayor.com">info@vivianavillamayor.com</a> &mdash; T: 902 810 210 &mdash; M: 622 484 945

    </footer>
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->


  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
