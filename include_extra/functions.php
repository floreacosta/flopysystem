<?php
include_once("defines.php");
include_once (RAIZ."/classCarrito.php");
include_once(RAIZ."/conexion.php");
	
function menuDesplegable(){
	
	$db = callDb();

	$get_cats= 'SELECT * FROM category1';
	$get_cats2 = 'SELECT * FROM category2';
	$get_cats3 = 'SELECT * FROM category3';
	
	$run_cats = mysqli_query($db, $get_cats);
	$run_cats2 = mysqli_query($db, $get_cats2);
	$run_cats3 = mysqli_query($db, $get_cats3);

	//Aca empiezo a recorrer cada resultado de la tabla1
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		//Tomo las propiedades id y titulo de las categorias de nivel 1
		$cat_id = $row_cats['id_category1'];
		$cat_title = $row_cats['category1_title'];
		$cat_marca = $row_cats['marcaMenu'];
		$style = ($cat_marca == 1) ? 'item' : ''; 
		
		//imprimo todos los titulos de las categorias de nivel 1
		echo "  
		<li class='$style' id='$cat_title'>
			<a href='product.php?id_categoria1=$cat_id&nombreSec=$cat_title'> $cat_title </a>
		";
		
		//creo un array que va a tener todos los resultados de la tabla2
		while($row_cats2=mysqli_fetch_array($run_cats2)){
			$row_cats2array[] = $row_cats2; 
		}
		
		//creo un array que va a tener todos los resultados de la tabla3
		while($row_cats3=mysqli_fetch_array($run_cats3)){
			$row_cats3array[] = $row_cats3; 
		}
		//hago un foreach para recorrer el array de la segunda tabla
		echo "<ul>";
		
		foreach ($row_cats2array as $row_cats22) {
			
			//tomo el id y titulo de la segunda tabla, y la referencia a la primer tabla
			$cat2_id = $row_cats22['id_category2'];
			$cat2_title = $row_cats22['category2_title'];
			$cat1_id = $row_cats22['id_category1'];
			$cat_marca2 = $row_cats22['marcaMenu'];
			$style = ($cat_marca2 == 1) ? 'item' : ''; 
		
			//Hago una condición, si el id de referencia a la tabla1 es igual al id del ultimo
			//resultado impreso lo imprimo, ya que el elemento es
			//hijo de el elemento impreso al principio

			if($cat_id == $cat1_id){ 
			echo "
				<li class='$style' id='$cat2_title'>
					<a href='product.php?id_categoria2=$cat2_id&nombreSec=$cat2_title'> $cat2_title </a>
				";
			echo "<ul>";
			//Hago la misma logica, pero relacionando la tabla3 con la tabla2
			foreach ($row_cats3array as $row_cats33) {
				$cat3_id = $row_cats33['id_category3'];
				$cat3_title = $row_cats33['category3_title'];
				$cat22_id = $row_cats33['id_category2'];
					if($cat2_id == $cat22_id){
					//si coinciden los ID imprimo
					echo "
				<li>
					<a href='product.php?id_categoria3=$cat3_id&nombreSec=$cat3_title'> $cat3_title </a>
				</li>";
					}
				}
			echo "</ul></li>";
			}
		}
		echo "</ul></li>";
	}
}

function getSeccionPorCategoriaMenu(){
	
	$db = callDb();

	$show_categoria = '';
	
	if(isset($_GET['id_categoria1'])){
		$show_categoria = $_GET['id_categoria1'];
		$tipo_categoria = 'id_category1';
	}
	
	if(isset($_GET['id_categoria2'])){
		$show_categoria = $_GET['id_categoria2'];
		$tipo_categoria = 'id_category2';
	}
	
	if(isset($_GET['id_categoria3'])){
		$show_categoria = $_GET['id_categoria3'];
		$tipo_categoria = 'id_category3';
	}
		
	if($show_categoria != ''){	
	
		$tituloSeccion = $_GET['nombreSec'];
		$show_categoria = (int)$show_categoria;
			
		$get_categoria = "SELECT * FROM products where $tipo_categoria = '$show_categoria'";
		$run_categoria = mysqli_query($db, $get_categoria);
		
		echo"
		<h1>$tituloSeccion</h1><a href='#'>| back</a>
			<div>
		";
		
		while ($producto=mysqli_fetch_array($run_categoria)){
			
			$producto_id = $producto['id_products'];
			$producto_titulo = ucfirst($producto['product_title']);
			$producto_imagen_thumb = $producto['product_thumbs'];
			$producto_precio = $producto['product_price'];
			$producto_stock = $producto['product_stock'];			
			
			echo "	
				<figure>
					<span class='stock' title='En stock'><img src='img/style/$producto_stock'/></span>
					<img src='img-productos/$producto_imagen_thumb' />
					<figcaption>
						<h1>$producto_titulo</h1>
						<div>
							<p>Precio web: $$producto_precio</p>
							<a href='details.php?id=$producto_id&nombreSec=$tituloSeccion'>+</a>
						</div>
			";
			if($producto_stock == 'yes.png'){
				echo"<button onclick=addToCart($producto_id)>Agregar al carrito</button>";
			}else{
				echo'<button onclick=alert("Actualmente&nbsp;no&nbsp;hay&nbsp;stock&nbsp;del&nbsp;producto&nbsp;seleccionado")>Agregar al carrito</button>';
			}
			
			
			echo"		
					</figcaption>
				</figure>				
			";
		}		
	}	
}

function showDetalleProducto(){
	
	$db = callDb();
	
	$id_producto = $_GET['id'];
	$id_producto = (int)$id_producto;
		
	$get_producto = "SELECT * FROM products where id_products = '$id_producto'";
	$run_producto = mysqli_query($db, $get_producto);
	
	$tituloSeccion = $_GET['nombreSec'];
	
	while ($producto=mysqli_fetch_array($run_producto)){
			
		$producto_titulo = ucfirst($producto['product_title']);	
		$producto_detalles = $producto['product_details'];
		$producto_imagen = $producto['product_image'];
		$producto_precio = $producto['product_price'];
		$producto_stock = $producto['product_stock'];
			
		echo"
			<section class='details'>
				<div>
					<h1>$producto_titulo</h1>
					<p>| $tituloSeccion</p>
					<p class='back'>| back</p>
				</div>
				<div class='descripcion'>
					<div>
						<img src='img-productos/$producto_imagen'/>
						<p title='Una vez que elegís tu producto apretás el botón Agregar al carrito y una vez que tenés el monto total a pagar clickeás en el botón 'Comprar' para redirigirte a la página de pagos PAYU.'><a href=''>¿Cómo comprar por la página?</a></p>
						<p title='Es una plataforma de pagos tipo MercadoPago o PayPal, en la cual ingresás tus datos y elegís el método de pago que más te beneficie.'><a href=''>¿Qué es PAYU?</a></p>
						<p title='Todos los productos tienen su propia garantía de fábrica además de tener los 3 meses de cambio en nuestro local.'><a href=''>¿Qué garantía tiene los productos que compro?</a></p>
					</div>	
					
					<span>
						<h1>$producto_titulo<img src='img/style/$producto_stock'/></h1>
						
						<p>$producto_detalles</p>
						
						<div class='precio'>
							<span class='precio'>Precio web: $$producto_precio</span>
						";
						
						if($producto_stock == 'yes.png'){
							echo"<span class='addButton' onclick=addToCart($id_producto)>Agregar al carrito</span>";
						}else{
							echo'<span class="addButton" onclick=alert("Actualmente&nbsp;no&nbsp;hay&nbsp;stock&nbsp;del&nbsp;producto&nbsp;seleccionado")>Agregar al carrito</span>';	
						}							
						echo"
						</div>
					</span>
				</div>
			</section>
		";
	}
}

function busqueda(){

	$db = callDb();
	
	if(isset($_POST['buscar'])){	
		$consulta=$_POST['consulta'];
		
		$get_producto = "SELECT * FROM products WHERE product_title LIKE '%$consulta%'";
		$run_producto = mysqli_query($db, $get_producto);
		$encontro = false;
		
		echo"
		<h1>Resultados para: '$consulta'</h1><a href='#'>| back</a>
			<div>
		";
		
		while ($producto=mysqli_fetch_array($run_producto)){
			$encontro = true;
			$producto_id = $producto['id_products'];
			$producto_titulo = ucfirst($producto['product_title']);
			$producto_imagen_thumb = $producto['product_thumbs'];
			$producto_precio = $producto['product_price'];
			$producto_stock = $producto['product_stock'];			
			
			echo "	
				<figure>
					<span class='stock' title='En stock'><img src='img/style/$producto_stock'/></span>
					<img src='img-productos/$producto_imagen_thumb' />
					<figcaption>
						<h1>$producto_titulo</h1>
						<div>
							<p>Precio web: $$producto_precio</p>
							<a href='details.php?id=$producto_id&nombreSec=' title='Detalles'>e</a>
						</div>
						<button>Agregar al carrito</button>
					</figcaption>
				</figure>				
			";
		}	
		
		if(!$encontro){
			echo"
				<h1>NO SE ENCONTRARON RESULTADOS PARA SU BÚSQUEDA.</h1>
			";
		}
	}
}

function novedades(){
	$db = callDb();
	$get_producto = "select * from products order by id_products desc limit 4";
	$run_producto = mysqli_query($db, $get_producto);

	while ($producto=mysqli_fetch_array($run_producto)){

		$producto_id = $producto['id_products'];
		$producto_titulo = ucfirst($producto['product_title']);
		$producto_imagen_thumb = $producto['product_thumbs'];
		$producto_precio = $producto['product_price'];
		$producto_stock = $producto['product_stock'];
		$producto_detalles = $producto['product_details'];		
		$producto_novedad = $producto['product_novedad'];		
		
		echo "
			<figure>
				<img src='img-productos/$producto_imagen_thumb'/>
				<figcaption>
					<a href='details.php?id=$producto_id&nombreSec='>
						<h2>$producto_titulo</h2>
						<h7>$producto_novedad</h7>
					</a>
				</figcaption>
				<hr>
			</figure>
		";
	}
}

function agregarAlCarrito(){
	if(isset($_POST['addCart'])){
		
		$idUnique = intval($_POST['id']);
		$prod_title = $_POST['title'];
		$prod_precio = intval($_POST['precio']);
		$carrito = new Carrito();
		$articulo = array(
			"id"			=>		$idUnique,
			"cantidad"		=>		1,
			"precio"		=>		$prod_precio,
			"nombre"		=>		$prod_title,
			"uniqueId"      =>      $idUnique
		);
		$carrito->add($articulo);		
	}
}

function printOrder(){
	echo"
	<h1>Mi próxima compra:</h1>
		<section class='unidades'>
	";
	
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
					<img src='img-productos/$prod_thumb'/>
					<figcaption>
						<input onclick='deleteItemOrder($id_producto_enc)' type='submit' name='stop' value='X'>
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
	
	echo"
	</section>

	<section class='total'>
		<div class='carro'>
			<h1>Total: $
	";
			
	$carrito = new Carrito();
	$total = $carrito->precio_total();
	echo $total;
	$referenceCode = "AKC".date("hsi");
	//ApiKey~merchantId~referenceCode~amount~currency
	$signature = md5("~~$referenceCode~$total~ARS");
	$descripcion = null;
	
	$carrito = new Carrito(); 
	$carro = $carrito->get_content();
	if(!is_null($carro)){
		foreach($carro as $producto){ 
			$descripcion = $descripcion . ' - ' . ucfirst($producto['nombre']) . ' x' . $producto['cantidad'];
		}
	}
	
	echo"
		</h1>
		<form id='formPayu' class='pagar datos' method='post' action='processBuy.php'>
			<input name='payerFullName' type='text'    placeholder='Nombre y Apellido*' required>
			<input name='buyerEmail'  	type='email'   placeholder='Mail*' required>
			<input name='merchantId'    type='hidden'  value='' >
			<input name='accountId'     type='hidden'  value='' >
			<input name='description'   type='hidden'  value='$descripcion' >
			<input name='referenceCode' type='hidden'  value='$referenceCode' >
			<input name='amount'        type='hidden'  value='$total' >
			<input name='tax'           type='hidden'  value='0'  >
			<input name='taxReturnBase' type='hidden'  value='0' >
			<input name='currency'      type='hidden'  value='ARS' >
			<input name='signature'     type='hidden'  value='$signature'>
			<input name='test'          type='hidden'  value='0' >
			<input name='responseUrl'   type='hidden'  value='http://alconan.com.ar/thanks.php' >
			<input name='ApiLogin'    	type='hidden'  value='' >		
			<input name='ApiKey'    	type='hidden'  value='' >
			<input name='Submit'        type='submit'  value='Pagar' >
		</form>
	</div>
		
		<p>Al hacer click en Pagar se redireccionará a la plataforma de pagos PAYU* quien realizará el cobro del monto que figure como total SIN incluir el costo de envío, que deberá tramitarse por mail (ventas@flopysystem.com.ar) o tel. (011-4639-3713).</p>
		<p class='what' title='Es una plataforma de pagos tipo MercadoPago o PayPal, en la cual ingresás tus datos y elegís el método de pago que más te beneficie.'><a href=''>*¿Qué es PAYU?</a></p>
	</section>
	";
	
}

?>