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
      zoom: 14,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("mapa_ubicacion"), myOptions);
    
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
					<li><a class="active" href="home">Inicio</a></li>
					<li><a href="terapia">Terapia</a></li>
					<li><a href="areas">Áreas</a></li>
					<li><a href="cv">Currículum</a></li>
					<li><a href="contacto">Contacto</a></li>
				</ul>
			</nav>
			<aside>
				<a href="http://www.facebook.com/pages/Viviana-Villamayor-Fleitas-Psicóloga/210887208961346"><img src="img/facebook.png" alt="Facebook" /></a>
			</aside>
		</div>	
		
		<div class="twelve columns content offset-by-one">

			<section class="eight columns alpha">
				<article>
					<h3 class="cabecera">¿Necesita ayuda?</h3>
					<p>A lo largo de la vida se presentan situaciones claras y evidentes que provocan malestar en las personas, como pueden ser problemas económicos, de pareja, familiares, de salud, laborales, etc.</p> 
					
					<p>En otras ocasiones no hay evidencias tan claras que expliquen por qué no nos sentimos bien, pero notamos que la vida no se nos está dando como desearíamos. Puede que se sienta sin ánimo, triste, con mucha preocupación, le cueste relacionarse, tenga problemas de sueño, de apetito, problemas al relacionarse con los demás, etc. Todo ese malestar ocurre por algo cuya causa desconoce.</p> 
					
					<p>Desde la psicología y, en concreto, desde la psicoterapia, le ayudaremos a conocer la causa de dicho malestar, a saber lo que le ocurre para que pueda recibir un tratamiento adecuado y solucionar dichas dificultades, tanto las pasadas como las presentes y las futuras. </p>
					
					<p>Nuestro objetivo es que consiga un mayor bienestar y calidad de vida.</p>
				</article>			
				
			</section>
			
			<section  class="four columns omega">
				<article class="cita">
					<h3 class="cabecera">Concertar una cita</h3>
					<p>Siga los pasos de nuestro <a href="http://registro.kaps.es/icita/loginKaps.aspx">asistente en línea</a> para concertar una cita y recibir atención personalizada.</p>

				</article>		
				<article class="promociones">
					<h3 class="cabecera">Promociones</h3>
					<ul>
						<li>25% de descuento en la primera y segunda consulta.</li>
						<li>Paquetes promocionales tanto individuales como familiares y/o grupales con un 20% de descuento.</li>
					</ul>
				</article>		
				<article class="ubicacion">
					<h3 class="cabecera">Ubicación</h3>
					<aside>
						<a href="http://kaps.es" class="kaps">KAPS</a><br />Carretera Provincial, 12<br />36204 Vigo
					</aside>
					<div id="mapa_ubicacion"></div>
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
