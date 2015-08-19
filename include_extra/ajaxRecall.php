<?php

include_once ("classCarrito.php");
include_once ("conexion.php");


if(isset($_GET['func'])&&!empty($_GET['func'])){
	
	$nroFuncion = (int)$_GET['func'];
	
	switch ($nroFuncion){
    case 1:
        addProductCart();
	break;
	case 2:
        deleteCartItem();
	break;
	}
}

function addProductCart(){
	
	if(isset($_GET['q'])&&!empty($_GET['q'])){
		$db = callDb();
		$prod_id = $_GET['q'];
		$id_unique = md5($_GET['q']);
		
		$get_producto = "Select * FROM products where id_products = '$prod_id'";
		$run_producto = mysqli_query($db, $get_producto);
		while($row_producto=mysqli_fetch_array($run_producto)){
			$product_title = $row_producto['product_title'];
			$product_price = $row_producto['product_price'];
			
			$carrito = new Carrito();
			
			$articulo = array(
				"id"			=>		$prod_id,
				"cantidad"		=>		1,
				"precio"		=>		$product_price,
				"nombre"		=>		$product_title,
				"uniqueId"      =>      $prod_id
			);
			
			$carrito->add($articulo);
		}
		
		echo"
		<div>
		";
			
		$carrito = new Carrito();			
		$carro = $carrito->get_content();
		if(!empty($carro)){
			foreach($carro as $producto)
			{
				$nombre_producto = ucfirst($producto['nombre']);
				$precio_producto = $producto['precio'];
				$cantidad_producto = $producto['cantidad'];
				$id_producto_enc = $producto['id'];
				$nombre_producto = substr($nombre_producto, 0, 27).'...';
				echo"
				<span>
					<span class='quitar' onclick='deleteItem($id_producto_enc)'>x</span> 
					<p>$nombre_producto</p>
				</span>
				";
			}
		}else{
			echo"
				<span>
					<span class='quitar' onclick='deleteItem()'>x</span> 
					<p>No hay productos en el carrito.</p>
				</span>
			";
		}
				
		echo"
			<a title='A Carrito de compras' href='/order.php'></a>
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
		";
			
		$carrito = new Carrito();			
		$carro = $carrito->get_content();
		if(!empty($carro)){
			foreach($carro as $producto)
			{
				$nombre_producto = ucfirst($producto['nombre']);
				$precio_producto = $producto['precio'];
				$cantidad_producto = $producto['cantidad'];
				$id_producto_enc = $producto['id'];
				$nombre_producto = substr($nombre_producto, 0, 27).'...';
				echo"
				<span>
					<span class='quitar' onclick='deleteItem($id_producto_enc)'>x</span> 
					<p>$nombre_producto</p>
				</span>
				";
			}
		}else{
			echo"
				<span>
					<span class='quitar' onclick='deleteItem()'>x</span> 
					<p>No hay productos en el carrito.</p>
				</span>
			";
		}
				
		echo"
			<a title='A Carrito de compras' href='/order.php'></a>
		</div>
		";
			
	}
	
}

?>