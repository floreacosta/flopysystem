<?php
include("init.php");
	
function menuDesplegable(){
	
		include_once("conexion/conexion.php");
	
		$db = callDb();
	
		$get_cats= 'SELECT * FROM category1';
		$get_cats2 = 'SELECT * FROM category2';
		$get_cats3 = 'SELECT * FROM category3';
		
		$run_cats = mysqli_query($db, $get_cats);
		$run_cats2 = mysqli_query($db, $get_cats2);
		$run_cats3 = mysqli_query($db, $get_cats3);

		//Aca empiezo a recorrer cada resultado de la tabla1
		while($row_cats=mysqli_fetch_array($run_cats)){
			
			//Tomo las propiedades id y titulo de la tabla 1
			$cat_id = $row_cats['id_category1'];
			$cat_title = $row_cats['category1_title'];
			
			//imprimo todos los titulos de la tabla1
			echo "  
			<li>
			<a class='' id='$cat_title' href='/product.php?id_categoria1=$cat_id&nombreSec=$cat_title'> $cat_title </a>
			
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
			
				//Hago una condición, si el id de referencia a la tabla1 es igual al id del ultimo
				//resultado impreso (linea 37) lo imprimo, ya que el elemento es
				//hijo de el elemento impreso al principio

				if($cat_id == $cat1_id){ 
				echo "
					<script>
						$('#$cat_title').addClass('item');
					</script>
					<li>
					<a class='' id='$cat2_title' href='/product.php?id_categoria2=$cat2_id&nombreSec=$cat2_title'> $cat2_title </a>
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
					<script>
						$('#$cat2_title').addClass('item');
					</script>
					<li>
						<a class='' href='/product.php?id_categoria3=$cat3_id&nombreSec=$cat3_title'> $cat3_title </a>
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
	
	include_once("conexion/conexion.php");
	
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
			<section class='catalogo'>
			<div class='container catalogo'>
				<h1>$tituloSeccion</h1><a href='http://www.flopysystem.com.ar/index.php'>| back</a>
					<section class='grilla'>
						<ul class='item-catalogo'>
		";
			
		while ($producto=mysqli_fetch_array($run_categoria)){
			
			$producto_id = $producto['id_products'];
			$producto_titulo = ucfirst($producto['product_title']);	
			$producto_detalles = $producto['product_details'];
			$producto_imagen_thumb = $producto['product_thumbs'];
			$producto_imagen = $producto['product_image'];
			$producto_precio = $producto['product_price'];
			
			
			echo "		
				<li>
					<figure>
						<img src='img-productos/$producto_imagen' >
							<figcaption>
								<span>$producto_titulo</span>
								<br><br>
									<span class='precio'>Precio web: <p>$producto_precio</p></span>
									<a class='ver' href='/details.php?id=$producto_id'>+</a>
							</figcaption>
					</figure>
				</li>
			";
		}
			
		echo"
					</ul>
				</section>
			</div>
		</section>
		";
	}	
}


function showDetalleProducto(){
	
	include_once("conexion/conexion.php");
	
	$db = callDb();
	
	$id_producto = $_GET['id'];
	$id_producto = (int)$id_producto;
		
	$get_producto = "SELECT * FROM products where id_products = '$id_producto'";
	$run_producto = mysqli_query($db, $get_producto);
	
	while ($producto=mysqli_fetch_array($run_producto)){
			
		$producto_titulo = ucfirst($producto['product_title']);	
		$producto_detalles = $producto['product_details'];
		$producto_imagen_thumb = $producto['product_thumbs'];
		$producto_imagen = $producto['product_image'];
		$producto_precio = $producto['product_price'];
			
		echo"
			<section class='catalogo'>
				<div class='container catalogo detalles'>
					<section>
						<h1>$producto_titulo</h1>
						<h2>| Test</h2>
						<span>| 
							<a href='/'>back</a>
						</span>
						<aside>
							<h4 class='cuotas'></h4>
							<h4>$$producto_precio</h4>
						</aside>
					</section>
					<br />
					<div class='contenido-descripcion'>
						<img src='img-productos/$producto_imagen' />
						<p>$producto_detalles</p>  
					</div>
				</div>
			</section>
		";
	}
}



?>