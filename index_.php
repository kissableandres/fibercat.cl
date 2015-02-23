<?php






?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

  </head>  
</html>



<?php
die;
?>



<?php	include_once('config.php');exit;?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>FiberCat Quienes Somos</title>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,latin-ext" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" charset="utf-8"></script>
	<script src="<?php echo $domain; ?>/jquery-glowing.js" charset="utf-8"></script>
	<script charset="utf-8">
		$(document).ready(function(){
			$('a').addGlow({
			radius: 20,
			haloColor: '#c30',
			duration: 200
			});
		});
	</script>
	<link rel="stylesheet" href="<?php echo $domain?>/general.css">
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=470510659662932";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<header>
	<nav id="blue">
	<?php echo $menu;?>
	</nav>
	<div id="catface"></div>
	</header>

	<!--	INTRO	-->
    	<h1>Somos una Empresa de Amigos</h1>
        <section class="infocontainer"><img src="catdog.png" alt="Gato y Perro" ></section>
        <h2>Fibercat Networks quiere ser la mascota preferida de tu familia.</h2>
        <h2>Queremos regalonearte mientras navegas, descargas y haces  lo que más te gusta en internet.</h2>
        <h2>Somos unos amigos con diferentes habilidades que tienen como fin hacer de internet una experiencia nueva, genial y competitiva.</h2>
        <h2>Queremos que nuestra marca sea signo de calidad y servicio eficiente.</h2>
        <h2>Te invitamos a preinscribirte para la instalación en Talcahuano o bien postula tu población para otras comunas.</h2>
        
    <!--	NEED FOR	-->
    <article>
		<section id="goal">
			<p id="need">Faltan</p>
			<p id="fortymillions">$ XX.XXX.XXX.- CLP</p>
			<p id="campaign">Inicio de Campaña: Lunes 17 de Julio 2013.</p>
			<div class="fb-like" data-href="https://www.facebook.com/fibercatnetworks" data-send="false" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
			<p id="sponsorus"><a href="#">Dona</a><a href="#">Invierte</a><a href="#">Presta</a><a href="#">Proveenos</a></p>
		</section>
	

		
        <section class="infocontainer">
        	<aside class="left"><img src="team.png" alt="Equipo Fibercat" ></aside>
            <aside class="right">
           	<p class="infotit">Información Corporativa</p>
            <ul>
            	<li class="info">Representante del Proyecto: Marcelo Muñoz Giacaman</li>
       			<li class="info">Dirección Postal Proyecto: Applegath 574 Higueras Talcahuano</li>
       			<li class="info">Capital Necesario: $ 40.000.000.-</li>
            	<li class="info"> Estudio de Mercado: En Proceso. (Fecha Disponibilidad aproximada Julio 2013)</li>
            </ul>
            </aside>
      	</section>
        
        <section class="infocontainer">
        	<aside class="right"><img src="donate.png" alt="Equipo Fibercat" ></aside>
       	  <aside class="left">
                <p class="infotit">Dona al proyecto</p>
            <p class="info">Existen muchos motivos por los cuales donar al proyecto:</p>
                <ul>
                    <li class="info">Recibiras un certificado como miembro donador del proyecto.</li>
                    <li class="info">Hasta 50% descuento por un año o 1 Mega Gratis hasta por 5 Años.</li>
                    <li class="info">IP Fija Gratuita para cualquier plan por al menos cinco años.</li>
                    <li class="info">Transferencia OnNet y Nacional hasta 10 y 5 veces lo contratado respectivamente.</li>
                    <li class="info">Regalo navideño unico por 5 años desde el segundo año.</li>
                </ul>
                <p class="info">Como vez, los que nos ayudan, serán nuestros partners y los regalonearemos como buenos gatos que somos.</p>
                <p class="info">Condiciones:</p>
                <ul>
                    <li class="info">Las donaciones estarán disponibles a partir del lunes 17 de junio de 2013.</li>
                    <li class="info">Para donar es necesario pertenecer a una comunidad de fibra.</li>
                    <li class="info">El certificado como miembro donador lo recibe todo usuario que done sin importar el monto.</li>
                    <li class="info">Infórmate a partir del lunes 17 de junio de 2013 sobre las condiciones para obtener los beneficios.</li>
                    <li class="info">IP Fija a partir del segundo año o antes si está disponible el servicio.</li>
                    <li class="info">Transferencia OnNet se refiere a velocidad entre compañia con tope de 100 Mbps.</li>
                    <li class="info">Transferencia Nacional tendrá un tope de 50 Mbps salvo velocidad contratada sea superior.</li>
                    <li class="info">Si el proyecto no se lleva a cabo devolveremos el 100% de lo donado.</li>
            	</ul>
       	  </aside>
      	</section>

        <section class="infocontainer">
        	<aside class="left"><img src="donate.png" alt="Equipo Fibercat" ></aside>
       	  <aside class="right">
                <p class="infotit">Invierte en el proyecto</p>
                <p class="info">Existen muchos motivos por los cuales invertir en el proyecto:</p>
              <ul>
                  <li class="info">Puedes tener tu participación en la sociedad a partir de $ 40.000.-</li>
                  <li class="info">Recibirás beneficios anuales o semestrales.</li>
              </ul>
              <p class="info">A partir del mes de julio podrás acceder al estudio de mercado antes de invertir.</p>
                <p class="info">Condiciones:</p>
                <ul>
                    <li class="info">Por cada $ 40.000.- invertidos obtienes el 0,04 % de la sociedad con un tope del 40%.</li>
                    <li class="info">Asociación no otorga beneficio ni descuento alguno más que las ganancias anuales o semestrales.</li>
                    <li class="info">Asociación implica aceptar las políticas de expansión, de gobierno y de desición de la empresa.</li>
                    <li class="info">Inversionista debe contar con firma electrónica.</li>
            	</ul>
        	</aside>
      	</section>
   
       <section class="infocontainer">
        	<aside class="right"><img src="donate.png" alt="Equipo Fibercat" ></aside>
   	     <aside class="left">
                <p class="infotit">Presta al proyecto</p>
           <p class="info">Existen muchos motivos por los cuales prestar al proyecto:</p>
                <ul>
                    <li class="info">El préstamo se realiza a travéz de un pagaré cuando el prestamo es sobre $ 500.000.</li>
                    <li class="info">Puedes invertir a partir de los $ 30.000.-</li>
                    <li class="info">Recibirás una ganancia mayor a la tasa de un banco.</li>
                </ul>
                <p class="info">Condiciones:</p>
               <ul>
                 <li class="info">Los prestamos se empiezan a devolver a partir del segundo año mensual, trimestral, semestral o anual segun haya sido seleccionado por el prestamista.</li>
                 <li class="info">Infórmate a partir del lunes 17 de junio de 2013 sobre las condiciones para prestar, las tasas y opciones.</li>
                 <li class="info">El dinero se depositará en una cuenta vista.</li>
                 <li class="info">Si el proyecto no se lleva a cabo, se acepta que devolveremos el 100% de lo prestado sin interes.</li>
                 <li class="info">Pueden prestar cualquier persona de RM y de las regiones V a X región para montos sobre $ 500.000.</li>
                 <li class="info">Pueden prestar cualquier persona para montos inferiores a $ 500.000.</li>
                 <li class="info">Para la devolución del capital más los intereses, se debe dar devolución de pagaré.</li>
   	       </ul>
       	  </aside>
      	</section>

    </article>
    <footer>
    	<section id="Social"><img src="socialhand.png" alt="Social Links" ></section>
    	<section id="CopyRight">Todos los Derechos Reservados 2013</section>
    </footer>
</body>
</html>
<?php
die;
?>


<!--<script>

$(function(){
	$('a[href*=#]').click(function(){
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname){
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length){
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 1000);
			return false;
			}
		}
	});
});


$(window).scroll(function(){
	if($(window).scrollTop() > 0)
		$('#top').show();
	else
		$('#top').hide();
});
</script>-->
