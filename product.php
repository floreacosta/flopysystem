<?php include '/header.php'; ?>
<section class="catalogo">
<div class="container catalogo">
<?php
	include '/conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("SELECT * FROM `product` p INNER JOIN `category` c ON p.category_product = c.id_category WHERE c.tipo='Varios'")or die(mysql_error());
	while ($f=mysql_fetch_array($re)){

		echo "<h1> </h1><a href='http://www.flopysystem.com.ar/index.php'>| back</a>
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
?>
				</ul>
			</section>
</div>
</section>
<div class="footer-into">
	<?php include '/footer.php'; ?>
</div>

/**SELECT id_product,category_product,name,thumbs,price FROM productos WHERE primary_key='artvarios'**/