<?php
include("/include_extra/head.php");
?>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/buy.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys2.css"/>
</head>

<body>

<?php
include("/include_extra/header.php");
?>

<section class="details-buy">
	<h1>Mi próxima compra:</h1>
	<section class="unidades">
			<figure>
				<img src="/img/1.4V-HDMI-a-Mini-HDMI-515-thumbs.jpg"/>
				<figcaption>
					<input type="submit" name="stop" value="X">
					<div>
						<h2>Auricular Dual Mode Luxy Leatherette IHL-500BK</h2>
						<h3>Precio web: $150 x <input type="number" name="units" min="1" max="1000"> u.</h3>
						<h4>Subtotal: $300</h4>
					</div>
				</figcaption>
			</figure>

			<figure>
				<img src="/img/1.4V-HDMI-a-Mini-HDMI-515-thumbs.jpg"/>
				<figcaption>
					<input type="submit" name="stop" value="X">
					<div>
						<h2>Auricular c/ micrófono T-500-1 A4-Tech</h2>
						<h3>Precio web: $150 x <input type="number" name="units" min="1" max="1000"> u.</h3>
						<h4>Subtotal: $300</h4>
					</div>
				</figcaption>
			</figure>
	</section>
	
	<section class="total">
		<div class="carro">
			<h1>Total: $500</h1>
			<form class="datos">
				<input type="text" name="id" placeholder="Nombre y Apellido*">
				<input type="email" name="correo" placeholder="Mail*">
			</form>
			<form class="pagar">
				<input type="submit" name="buy-now" value="Pagar">
			</form>
		</div>
		
		<p>Al hacer click en Pagar se redireccionará a la plataforma de pagos PAYU* quien realizará el cobro del monto que figure como total SIN incluir el costo de envío, que deberá tramitarse por mail (ventas@flopysystem.com.ar) o tel. (011-4639-3713).</p>
		<p class="what" title="Es una plataforma de pagos tipo MercadoPago o PayPal, en la cual ingresás tus datos y elegís el método de pago que más te beneficie."><a href="">*¿Qué es PAYU?</a></p>
	</section>
</section>


<div class="details">
	<?php
	include("/include_extra/footer.php");
	?>
</div>

</body>