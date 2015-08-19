<?php
include_once("/include_extra/head.php");
?>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys3.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 
</head>

<body>

<?php
include_once("/include_extra/header.php");
?>	

<main>
	<div>
		<a href="#">
			<span>¡Entraron!</span>
			<h1>Cargador Universal para Notebooks!</h1>
			<p>Buscá los productos seleccionados en nuestro catálogo. Consultanos por stock, mejoramos cualquier costo y ofrecemos servicio personalizado para resolver todas tus dudas. Hacemos envíos a todo el país, respondemos consultas por mail las 24hs.</p>
		</a>
	</div>
</main>

	<div class="responsive">
		<a href="#">
			<span>¡Entraron!</span>
			<h1>Cargador Universal para Notebooks!</h1>
			<p>Buscá los productos seleccionados en nuestro catálogo. Consultanos por stock, mejoramos cualquier costo y ofrecemos servicio personalizado para resolver todas tus dudas. Hacemos envíos a todo el país, respondemos consultas por mail las 24hs.</p>
		</a>
	</div>


<section class="recomendacion">
	<h1>Recomendaciones de la semana</h1>
	<div>
	<?php
		novedades();
	?>
	</div>
	<div class="clear"></div>
</section>

<section class="ubicacion"><!-- Ubicacion -->
	<a name="location"><h1>Ubicación</h1></a>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.588012814517!2d-58.52583500000004!3d-34.61457800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7deb2abf3b5%3A0x2172c59c105977f9!2sFlopy+System+Computaci%C3%B3n!5e0!3m2!1ses!2sar!4v1437746238134" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div>
			<address>Av. Francisco Beiró 5340, Galería Beiró, local 11. Devoto.</address>
			<aside>+(011) 4639-3713<br><a href="mailto:ventas@flopysystem.com.ar?Subject=Consulta%20online">ventas@flopysystem.com.ar</a></aside>
			<aside class="time">Horarios de atención:<br>Lunes a Viernes de 9 a 13Hs. y 16 A 20Hs.<br>Sábados de 9 a 14Hs.</aside>
		</div>
	</div>
</section>

<?php
include_once("/include_extra/footer.php");
?>	