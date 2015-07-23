<?php include '../header.php'; ?>
<section class="catalogo">
<div class="container catalogo">
    <h1>Artículos varios</h1><a href="http://www.flopysystem.com.ar/index.php">| back</a>
					<section class="grilla">
						<ul class="item-catalogo">
<?php
	include '../conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("SELECT id,name,thumbs,price FROM productos WHERE primary_key='artvarios'")or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>
							<li>
								<figure>

									<img src="../img-productos/<?php echo $f['thumbs'];?>" >
									<figcaption>
										<span><?php echo $f['name'];?></span>
										<br><br>
										<span class="precio">Precio web: <p>$<?php echo $f['price'];?></p></span>
										<a class="ver" href="detalles/det-articulos-varios-v3.php?id=<?php echo$f['id'];?>">+</a>
									</figcaption>
								</figure>
							</li>
<?php
	}
?>
                    	 </ul>
					</section>
</div>
</section>
<div class="footer-into">
	<?php include '../footer.php'; ?>
</div>