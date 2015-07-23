<?php
include("init.php");
	
function menuDesplegable(){
	
		$con = mysqli_connect("localhost","root","","flopysystem");
		//$con = mysqli_connect("us76.toservers.com:3306","uv3721","sudor503plano","uv3721_carrito_compras");
		mysql_query("SET NAMES 'utf8'");
	
		$get_cats= 'SELECT * FROM category1';
		$get_cats2 = 'SELECT * FROM category2';
		$get_cats3 = 'SELECT * FROM category3';
		
		$run_cats = mysqli_query($con, $get_cats);
		$run_cats2 = mysqli_query($con, $get_cats2);
		$run_cats3 = mysqli_query($con, $get_cats3);

		//Aca empiezo a recorrer cada resultado de la tabla1
		while($row_cats=mysqli_fetch_array($run_cats)){
			
			//Tomo las propiedades id y titulo de la tabla 1
			$cat_id = $row_cats['id_category1'];
			$cat_title = $row_cats['category1_title'];
			
			//imprimo todos los titulos de la tabla1
			echo "  
			<li>
			<a class='' id='$cat_title' href='/product.php?id_categoria1=$cat_id'> $cat_title </a>
			
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
					<a class='' id='$cat2_title' href='/product.php?id_categoria2=$cat2_id'> $cat2_title </a>
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
						<a class='' href='/product.php?id_categoria3=$cat3_id'> $cat3_title </a>
					</li>";
						}
					}
				echo "</ul></li>";
				}
			}
			echo "</ul></li>";
		}
}

function getPorCategoriaById(){
		
	
	mysql_query("SET NAMES 'utf8'");
	if(isset($_GET['id_categoria1'])){		
		$category_id = $_GET['id_categoria1'];
		$re=mysql_query("SELECT * FROM products WHERE id_category1 = '$category_id'")or die(mysql_error());
	}
	
	if(isset($_GET['id_categoria2'])){
		$category_id = $_GET['id_categoria2'];
		$re=mysql_query("SELECT * FROM products WHERE id_category2 = '$category_id'")or die(mysql_error());	
	}
	
	if(isset($_GET['id_categoria3'])){
		$category_id = $_GET['id_categoria3'];
		$re=mysql_query("SELECT * FROM products WHERE id_category3 = '$category_id'")or die(mysql_error());
	}
	
	while ($f=mysql_fetch_array($re)){

		echo "<h1> </h1><a href='/index.php'>| back</a>
			<section class='grilla'>
				<ul class='item-catalogo'>
					<li>
						<figure>
							<img src='img-productos/' >
								<figcaption>
									<span></span>
									<br><br>
										<span class='precio'>Precio web: <p></p></span>
										<a class='ver' href='menu/detalles/details.php?id='>+</a>
								</figcaption>
						</figure>
					</li>";
	}

	
	/*	
		global $con;
		
		$get_pro = "SELECT * FROM products WHERE product_id = '$product_id'";

		$run_pro = mysqli_query($con, $get_pro);
		
		//var_dump($run_pro);
		
		while($row_pro=mysqli_fetch_array($run_pro)){
			
			$product_id = $row_pro['product_id'];
			$product_category = $row_pro['product_category'];
			$product_brand = $row_pro['product_brand'];
			$product_title = $row_pro['product_title'];
			$product_price = $row_pro['product_price'];
			$product_desc = $row_pro['product_desc'];
			$product_image = $row_pro['product_image'];
			$product_keywords = $row_pro['product_keywords'];
			
			echo "
			<div id='single_product'>
				<h3>$product_title</h3>
				<img alt='$product_desc' src='admin_area/product_images/$product_image' width='400' height='400' />
				<p><b> $product_price </b></p>
				<p> $product_desc </p>
				<a href='index.php'>Go back</a>
				<a href='index.php?pro_id=$product_id'><button style='float:right'>Add to Cart</button></a>
			</div>
			
			";
		}
		
	}*/
}



?>