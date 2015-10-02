<?php
include_once("defines.php");
include_once (RAIZ."/classCarrito.php");
include_once (RAIZ."/conexion.php");
include_once (RAIZ."/functions.php");


if(isset($_GET['func'])&&!empty($_GET['func'])){
	
	$nroFuncion = (int)$_GET['func'];
	
	switch ($nroFuncion){
    case 1:
        addProductCart();
	break;
	case 2:
        deleteCartItem();
	break;
	case 3:
        changeCantProd();
	break;
	case 4:
        deleteCartItemOrder();
	break;
	}
}

function addProductCart(){
	
	if(isset($_GET['q'])&&!empty($_GET['q'])){
		$db = callDb();
		$prod_id = $_GET['q'];
		
		$get_producto = "Select * FROM products where id_products = '$prod_id'";
		$run_producto = mysqli_query($db, $get_producto);
		while($row_producto=mysqli_fetch_array($run_producto)){
			$product_title = $row_producto['product_title'];
			$product_price = $row_producto['product_price'];
			$product_thumb = $row_producto['product_thumbs'];
			
			$carrito = new Carrito();
			
			$articulo = array(
				"id"			=>		$prod_id,
				"cantidad"		=>		1,
				"precio"		=>		$product_price,
				"nombre"		=>		$product_title,
				"uniqueId"      =>      $prod_id,
				"imageThumb"    =>      $product_thumb
			);
			
			$carrito->add($articulo);
		}
		
		echo"
		<div>
			<span>
				<span class='quitar' onclick='showHideCart()'>/</span> 
				<p>Carrito de compras</p><p class='carrito'>.</p>
			</span>
		";
			
		$carrito = new Carrito();			
		$carro = $carrito->get_content();
		if(!empty($carro)){
			echo"<div id='itemsCarro' style='display:block'>";
			foreach($carro as $producto)
			{
				$nombre_producto = ucfirst($producto['nombre']);
				$precio_producto = $producto['precio'];
				$cantidad_producto = $producto['cantidad'];
				$id_producto_enc = $producto['id'];
				$nombre_producto = substr($nombre_producto, 0, 26).'...';
				echo"
				<span>
					<span class='quitar' onclick='deleteItem($id_producto_enc)'>x</span> 
					<p>$nombre_producto</p>
				</span>
				";
			}
			echo"<span class='pay'><a class='pay' href='order.php'>Pagar</a></span>";
			echo"</div>";
		}else{
			echo"
				<span>
					<p>No hay productos en el carrito.</p>
				</span>
			";
		}
				
		echo"
			<a title='A Carrito de compras' href='order.php'></a>
		</div>
		";
			
	}
	
}

function deleteCartItem(){
	
	if(isset($_GET['q'])&&!empty($_GET['q'])){
		$db = callDb();
		
		$id_unique = md5($_GET['q']);
		$carrito = new Carrito();
		$carrito->remove_producto("$id_unique");
				
		echo"
		<div>
			<span>
				<span class='quitar' onclick='showHideCart()'>/</span> 
				<p>Carrito de compras</p><p class='carrito'>.</p>
			</span>		
		";
			
		$carrito = new Carrito();			
		$carro = $carrito->get_content();
		if(!empty($carro)){
			echo"<div id='itemsCarro' style='display:block'>";
			foreach($carro as $producto)
			{
				$nombre_producto = ucfirst($producto['nombre']);
				$precio_producto = $producto['precio'];
				$cantidad_producto = $producto['cantidad'];
				$id_producto_enc = $producto['id'];
				$nombre_producto = substr($nombre_producto, 0, 26).'...';
				echo"
				<span>
					<span class='quitar' onclick='deleteItem($id_producto_enc)'>x</span> 
					<p>$nombre_producto</p>
				</span>
				";
			}
			echo"<span class='pay'><a class='pay' href='order.php'>Pagar</a></span>";
			echo"</div>";
		}else{
			echo"
				<span>
					<p>No hay productos en el carrito.</p>
				</span>
			";
		}
				
		echo"
			<a title='A Carrito de compras' href='order.php'></a>
		</div>
		";
			
	}
	
}

function changeCantProd(){
	if(isset($_GET['q'])&&!empty($_GET['q'])){
		$prod_id = $_GET['q'];
		$prod_cant = intval($_GET['nuevaCant']);
			
		$carrito = new Carrito();
		
		$articulo = array(
			"id"			=>		$prod_id,
			"cantidad"		=>		$prod_cant,
			"precio"		=>		null,
			"nombre"		=>		null,
			"uniqueId"      =>      $prod_id,
			"imageThumb"    =>      null
		);
		
		$carrito->changeItemCant($articulo);
	}
	printOrder();
}

function deleteCartItemOrder(){
	
	$id_unique = md5($_GET['q']);
	$carrito = new Carrito();
	$carrito->remove_producto("$id_unique");
	
	printOrder();	
}

?>