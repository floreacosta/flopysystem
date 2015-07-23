<?php include '../header.php'; ?>
<section class="catalogo">
<div class="container catalogo">
    <h1>Cargador Universal</h1><a href="http://www.flopysystem.com.ar/index.php">| back</a>
					<section class="grilla">
						<ul class="item-catalogo">
<?php
	include '../conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("select * from cargadoruniversal")or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>
							<li>
								<figure>

									<img src="../img-productos/<?php echo $f['imagen'];?>" >
									<figcaption>
										<span><?php echo $f['nombre'];?></span>
										<br><br>
										<span class="precio">Precio: <p>$<?php echo $f['precio'];?></p></span>
										<a class="ver" href="detalles/det-cargador-universal.php?id=<?php echo$f['id'];?>">+</a>
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