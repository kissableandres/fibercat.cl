<?php
/** 
* @Frontend Controller. "index.php"
* @versión: 1.0.0      @modificado: 14 de Febrero del 2015
* @autor: Marcelo.
* 
* Este es el índice principal de la web, el frontend controller.
*/

require 'config.php';						//	Cargamos la Configuración del Sitio.
require 'library/Functions.php';			//	Cargamos la Libreria Auxiliar.
require 'library/DefaultVars.php';			//	Cargamos la Libreria que Arma las Variables.
require 'library/Security.php';				//	Cargamos la Libreria que nos proporciona seguridad.
require 'library/Request.php';				//	Cargamos la Libreria que recibe las peticiones.
require 'library/Response.php';				//	Cargamos la Libreria que responde.
require 'library/View.php';					//	Cargamos la Libreria que escribe las vistas.

$request = new Request($globalParams);
$request -> execute();




die;

?>
	<body>
		<header class="Menu">
			<figure class="Menu-logoContainer">
				<img class="Menu-logo" src="img/fibercatLogo.png" alt="Fibercat Logo" />
			</figure>
			<ul class="Menu-buttonContainer">
				<li class="Menu-button"><a class="Menu-Link" href="#theproject" title="El Proyecto">El Proyecto</a></li>
				<li class="Menu-button"><a class="Menu-Link" href="javascript::" title="Los Planes">Los Planes</a></li>
				<li class="Menu-button"><a class="Menu-Link" href="javascript::" title="El Proyecto">Pre-Registro</a></li>
				<li class="Menu-button"><a class="Menu-Link" href="javascript::" title="Acceso">Compromisos</a></li>
				<li class="Menu-button"><a class="Menu-Link" href="javascript::" title="FAQ">FAQ</a></li>
				<li class="Menu-button"><a class="Menu-Link" href="javascript::" title="Acceso">Acceso</a></li>
			</ul>
		</header>

		<div class="u-separator100">

		<section class="Introduction">
			<article class="Introduction-textContainer">
				<h1 class="Introduction-Title">Arauco Tiene Pura Fibra</h1>
				<h2 class="Introduction-text">¿1, 2, 4 Megas? ¿Qué tal 10, 20 y 40?</h2>
				<h2 class="Introduction-text">Por Primera Vez en la Zona, Fibra Óptica Hasta tu Hogar y Empresa.</h2>
				<h2 class="Introduction-text">Solo Una Comuna Será la Seleccionada para el Plan Piloto.<h2>
				<h2 class="Introduction-text">¿Será la tuya? Vota por tu comuna y ayuda a que esté disponible en tu zona.<h2>
			</article>
		</section>

		<div class="u-separator60">

		<section class="Cities">
			<figure class="Cities-imageContainer">
				<img class="Cities-image" src="img/iconArauco.png" alt="Arauco" />
				<figcaption class="Cities-imageCaption">Arauco</figcaption>
			</figure>
			<figure class="Cities-imageContainer">
				<img class="Cities-image" src="img/iconCuranilahue.png" alt="Curanilahue" />
				<figcaption class="Cities-imageCaption">Curanilahue</figcaption>
			</figure>
			<figure class="Cities-imageContainer">
				<img class="Cities-image" src="img/iconCanete.png" alt="Cañete" />
				<figcaption class="Cities-imageCaption">Cañete</figcaption>
			</figure>
			<figure class="Cities-imageContainer">
				<img class="Cities-image" src="img/iconLebu.png" alt="Lebu" />
				<figcaption class="Cities-imageCaption">Lebu</figcaption>
			</figure>
			<figure class="Cities-imageContainer">
				<img class="Cities-image" src="img/iconLosAlamos.png" alt="Los Álamos" />
				<figcaption class="Cities-imageCaption">Los Álamos</figcaption>
			</figure>
		</section>

		<div class="u-separator20">

		<section class="Project">
			<h1>¿Qué ofrecemos?</h1>
			<h2 class="Project-text">Promoción </h2>
			<h2 class="Project-text">Por Primera Vez en la Zona, Fibra Óptica Hasta tu Hogar y Empresa.</h2>
			<h2 class="Project-text">Solo Una Comuna Será la Seleccionada para el Plan Piloto.<h2>
			<h2 class="Project-text">¿Será la tuya? Vota por tu comuna y ayuda a que esté disponible en tu zona.<h2>
			</article>

		</section>


<!--
		



		
			<figure class="Benefits-imageContainer">
				<img class="Benefits-image" src="img/iconHouse.png" alt="Fibra Hasta El Hogar" />
				<figcaption class="Benefits-imageCaption">Conexiones simétricas desde 1 Mbps en Tu Hogar.</figcaption>
			</figure>
			<figure class="Benefits-imageContainer">
				<img class="Benefits-image" src="img/iconSchool.png" alt="Fibra Hasta La Escuela" />
				<figcaption class="Benefits-imageCaption">Conexiones desde 10 Mbps gratuito para tu Escuela.</figcaption>
			</figure>
			<figure class="Benefits-imageContainer">
				<img class="Benefits-image" src="img/iconProArauco.png" alt="Fibra Hasta Arauco" />
				<figcaption class="Benefits-imageCaption">Enlace Comunal 100 Mbps para la Provincia de  Arauco.</figcaption>
			</figure>



			
			<h2>Chile es lider en telecomunicaciones.</h2>
			<h2>A pesar de ello, contamos con uno de los enlaces a internet más caro de latinoamérica.</h2>
			<h2>Fibercat desea reinventar la forma en que la conectividad llega a tu comunidad para así reducir los costos.</h2>
			<h2>¡Valoramos tu tiempo! Queremos atenderte como corresponde cuando acudas a nuestras oficinas.</h2>
			<h2>Estamos iniciando conversaciones con cinco municipios con los peores anchos de banda de la región.</h2>
			<h2>Queremos entregarles a esa comuna una competencia y solución definitiva para sus problemas de conectividad.</h2>
		



-->
	</body>
</html>