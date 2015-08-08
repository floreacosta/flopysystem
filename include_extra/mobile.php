<?php
include_once("/functions.php");
?>	
	<div class="boton-desplegable">
		<div class="group"><!-- Menu desplegable -->
			<nav class="menu productos">
				<ul class="desplegable">
					<li><a href="#">Productos</a>
						<ul class="contenido">
							<?php menuDesplegable(); ?>
						</ul>
					</li>
				</ul>
			</nav>
			
			<nav class="menu"><a href="/reparaciones.php">Reparaciones</a></nav><!-- Reparaciones -->
			<br>
			<form name="busqueda" action="/search.php" method="post"><!-- Buscar -->
				<input type="search" name="consulta" placeholder="Buscar">
				<button type="submit" name="buscar" value="" title="Buscar"></button>
			</form>
			
			<nav class="menu redes"><a href="#">Contacto</a><!-- Redes -->
				<ul>
					<a href="#"><li class="fb"></li></a>
					<a href="#"><li class="it"></li></a>
					<a href="#"><li class="ml"></li></a>
				</ul>
			</nav>
		</div>
	</div>
