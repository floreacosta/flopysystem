<?php include '/header.php'; ?>
<div class="container">
	<section class="home">
    	<div>
        	<h1 class="in">¡Entraron!</h1>
            <h1><a href="/menu/detalles/det-cargador-universal.php?id=1">Cargador universal<br/>para notebooks!</a></h1>
            <p>Buscá los productos seleccionados en nuestro catálogo. Consultanos por stock, mejoramos cualquier costo y ofrecemos servicio personalizado para resolver todas tus dudas. Hacemos envíos a todo el país, respondemos consultas por mail las 24hs.
            </p>
    	</div>
    </section>

	<section class="tit-mobile">
    	<div>
            <h1 class="news-mobile"><a href="/menu/detalles/det-cargador-universal.php?id=1">¡Entraron!<br>Cargadores universales para notebooks!</a></h1>
            <p class="news-mobile">Buscá los productos seleccionados en nuestro catálogo. Consultanos por stock, mejoramos cualquier costo y ofrecemos servicio personalizado para resolver todas tus dudas. Hacemos envíos a todo el país, respondemos consultas por mail las 24hs.
            </p>
    	</div>
    </section>

    <section class="news">
    <div>
    	<h2>Recomendaciones de la semana</h2>
        
        <div>
<?php
	include 'conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("select * from novedades")or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>
        	<figure>
            	<a href="<?php echo $f['link'];?>"><img class="news-img" src="img-productos/<?php echo $f['imagen'];?>"/></a>
                <figcaption>
                	<h6><?php echo $f['titulo'];?></h6>
                    <h7><?php echo $f['descripcion'];?></h7>
                </figcaption>
            </figure>
<?php
}
?>
        </div>
        </div>
    </section>

    <section class="location">
    <div>
    		<a name="location"></a><h2>Ubicación</h2>
            <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3283.588012814517!2d-58.52583500000001!3d-34.61457800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7deb2abf3b5%3A0x2172c59c105977f9!2sFlopy+System+Computaci%C3%B3n!5e0!3m2!1ses!2sar!4v1417983238543">
            </iframe>
       		</div>
        
            <div class="location-text">
                <h3>Av. Francisco Beiró 5340</h3>
                <h3 class="aclar">Galería Beiró, Local 11 / Devoto</h3>
                <h4>+(011) 4639-3713<br />
                    <a href="mailto:ventas@flopysystem.com.ar">ventas@flopysystem.com.ar</a>
                </h4>
                <h5>Horarios de Atención:<br />
                    Lunes A Viernes de 9 a 13hs. y 16 a 20hs.<br />
                    Sábados de 9 a 14hs.
                </h5>
           </div>
    </div>
    </section>
<?php include '/footer.php'; ?>
