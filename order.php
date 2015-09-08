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

<section class="details-buy" id='details-buy'>
	<h1>Mi próxima compra:</h1>
	<section class="unidades" id='unidades'>
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
									<h3>Precio web: $$precio_producto x <input onchange='changeItemsCant($id_producto_enc, this.value)' value='$prod_cant' type='number' name='units' min='1' max='1000'> u.</h3>
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
			$total = $carrito->precio_total();
			echo $total;
			$referenceCode = "AKC".date("hsi");
			//ApiKey~merchantId~referenceCode~amount~currency
			$signature = md5("6u39nqhq8ftd0hlvnjfs66eh8c~500238~$referenceCode~$total~ARS");
			?>
			</h1>
			<form class="pagar datos" method="post" action="https://stg.gateway.payulatam.com/ppp-web-gateway/">
				<input name="payerFullName" type="text"    placeholder="Nombre y Apellido*">
				<input name="buyerEmail"  	type="email"   placeholder="Mail*">
				<input name="merchantId"    type="hidden"  value="500238" >
				<input name="accountId"     type="hidden"  value="509171" >
				<input name="description"   type="hidden"  value="<?php $carrito = new Carrito(); $carro = $carrito->get_content(); foreach($carro as $producto){ echo(" - ".ucfirst($producto["nombre"])." x".$producto["cantidad"]); }?>" >
				<input name="referenceCode" type="hidden"  value="<?php echo $referenceCode ?>" >
				<input name="amount"        type="hidden"  value="<?php echo $carrito->precio_total(); ?>" >
				<input name="tax"           type="hidden"  value="21"  >
				<input name="taxReturnBase" type="hidden"  value="0" >
				<input name="currency"      type="hidden"  value="ARS" >
				<input name="signature"     type="hidden"  value="<?php echo $signature ?>">
				<input name="test"          type="hidden"  value="1" >
				<input name="buyerEmail"    type="hidden"  value="test@test.com" >
				<input name="responseUrl"   type="hidden"  value="http://45.55.71.214/payUResponse.php" >
				<input name="ApiLogin"    	type="hidden"  value="11959c415b33d0c" >		
				<input name="ApiKey"    	type="hidden"  value="6u39nqhq8ftd0hlvnjfs66eh8c" >
				<input name="Submit"        type="submit"  value="Pagar" >
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