<?php
include_once("/include_extra/head.php");
include_once("/include_extra/classCarrito.php");
?>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/buy.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys2.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 	
</head>

<body>

<?php
include("/include_extra/header.php");
?>

<section class="details-buy">
	<h1>Mi próxima compra:</h1>
	<section class="unidades">
		<?php 
			$carrito = new Carrito();			
			$carro = $carrito->get_content();
			if(!empty($carro)){
				foreach($carro as $producto){
					$nombre_producto = ucfirst($producto["nombre"]);
					$precio_producto = $producto["precio"];
					$cantidad_producto = $producto["cantidad"];
					$id_producto_enc = $producto["id"];
					$prod_thumb = $producto["imageThumb"];
					$prod_cant = $producto["cantidad"];
					$subt = intval($precio_producto) * $prod_cant;
					
					echo"
						<figure>
							<img src='/img-productos/$prod_thumb'/>
							<figcaption>
								<input type='submit' name='stop' value='X'>
								<div>
									<h2>$nombre_producto</h2>
									<h3>Precio web: $$precio_producto x <input value='$prod_cant' type='number' name='units' min='1' max='1000'> u.</h3>
									<h4>Subtotal: $$subt</h4>
								</div>
							</figcaption>
						</figure>
					";					
				}
			}
		?>
			

	</section>
	
	<section class="total">
		<div class="carro">
			<h1>Total: $
			<?php 
			$carrito = new Carrito();
			echo $carrito->precio_total();
			?>
			</h1>
			<form class="datos">
				<input type="text" name="id" placeholder="Nombre y Apellido*">
				<input type="email" name="correo" placeholder="Mail*">
			</form>
			<form class="pagar">
				
			</form>
		</div>
		
		<p>Al hacer click en Pagar se redireccionará a la plataforma de pagos PAYU* quien realizará el cobro del monto que figure como total SIN incluir el costo de envío, que deberá tramitarse por mail (ventas@flopysystem.com.ar) o tel. (011-4639-3713).</p>
		<p class="what" title="Es una plataforma de pagos tipo MercadoPago o PayPal, en la cual ingresás tus datos y elegís el método de pago que más te beneficie."><a href="">*¿Qué es PAYU?</a></p>
	</section>
</section>


<div class="details">
	<?php
	include_once("/include_extra/footer.php");
	?>
</div>

</body>