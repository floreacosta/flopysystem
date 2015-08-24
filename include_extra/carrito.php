<?php include_once("/include_extra/classCarrito.php"); ?>

<section class="all">
	<div class="carro" id='carro'>
		<div>
			<span>
				<span class='quitar' onclick='showHideCart()'>/</span> 
				<p class="rollover-carrito">Carrito de compras</p><p class="carrito">.</p>
			</span>
			<?php 
				$carrito = new Carrito();			
				$carro = $carrito->get_content();
				if(!empty($carro)){
					echo"<div id='itemsCarro'>";
					foreach($carro as $producto)
					{
						$nombre_producto = ucfirst($producto["nombre"]);
						$precio_producto = $producto["precio"];
						$cantidad_producto = $producto["cantidad"];
						$id_producto_enc = $producto["id"];
						$nombre_producto = substr($nombre_producto, 0, 26)."...";
						echo"
						<span>
							<span class='quitar' onclick='deleteItem($id_producto_enc)'>x</span> 
							<p>$nombre_producto</p>
						</span>
						";
					}
					echo"<span class='pay'><a class='pay' href='/order.php'>Pagar</a></span>";
					echo"</div>";
				}else{
					echo"
						<span>
							<p>No hay productos en el carrito.</p>
						</span>
					";
				}
			?>

		</div>
	</div>
</section>