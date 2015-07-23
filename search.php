<?php include 'header.php'; ?>
<section class="catalogo">
<div class="container catalogo search">
    <h1>Resultados para "<?php echo $consulta;?>"</h1><a href="/index.php">| back</a>
					<section class="grilla">
						<ul class="item-catalogo">
<?php
include ('/conexion/conexion.php');
mysql_query("SET NAMES 'utf8'");
$consulta=$_GET['consulta'];
//TECLADOS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM tecladogaming WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//TECLADOS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM teclados WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MOUSES
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM mouses WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MOUSE GAMING
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM mousegming WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//JOYSTICK
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM joystick WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//CAMARAS WEB
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM camarasweb WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//AURICULARES
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM auriculares WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//PARLANTES
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM parlantes WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//ROUTER
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM router WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MOTHERBOARD
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM motherboard WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MICROPROCESADOR
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM micro WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MEMORIAS RAM
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM memorias WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//LECTORAS Y GRABADORAS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM lectorasygrabadoras WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//NOTEBOOKS Y NETBOOKS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM notebooksnetbooks WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//TABLETS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM tablets WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//CARGADORES UNIVERSALES
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM cargadoruniversal WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//BATERIAS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM baterias WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//CD Y DVD
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM cddvd WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//PEN DRIVE
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM pendrives WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//MEMORIAS SD Y MICRO SD
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM memoriassdmicrosd WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//IMPRESORAS CHORRO A TINTA
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM chorroatinta WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//IMPRESORAS LASER
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM laser WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//CARTUCHOS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM cartuchos WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//TONERS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM toners WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//ARTICULOS VARIOS
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM artvarios WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//CABLES
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM cables WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}

//DISCO RIGIDO
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM discorigido WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}


//DISCO EXTERNO
if (isset($buscar)){
	$result = mysql_query ("SELECT * FROM discoexterno WHERE nombre LIKE '%$consulta%'");
	if($result==0){
		print '<li style="display:none;"><figure></figure></li>';
		}else {
		while ($datos = mysql_fetch_assoc($result)){
			print '<li><figure><img src="img-productos/'.$datos ['imagen'].'"/>';
			print '<figcaption><span>'.$datos ['nombre'].'</span><br><br><span class="precio">Precio web: <p>$'.$datos ['precio'].'</p></span>';
			print '<a class="ver" href="'.$datos ['imagen3'].'">+</a></figcaption></figure></li>';
		}
	}
	}


?>

</ul>
</section>
</div>
</section>

<div class="footer-into">
<?php include 'footer.php'; ?>
</div>
