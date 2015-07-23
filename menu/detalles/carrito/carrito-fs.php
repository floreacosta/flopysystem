<?php
	session_start();
	include '../../../conexion/conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from artvarios where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from artvarios where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>

<?php include '../../../header.php'; ?>

<section class="catalogo">
<div class="container catalogo carrito">
    <h1>Carrito de compras</h1><a href="http://www.flopysystem.com.ar/index.php">| back</a>
					<section class="grilla">
						<ul class="item-catalogo">

<?php
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("select * from artvarios where id=".$_GET['id'])or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>

		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<li>
					<figure>
						<img src="../../../img-productos/<?php echo $datos[$i]['Imagen'];?>">
						<figcaption>
							<span><?php echo $datos[$i]['Nombre'];?></span>
							<br>
							<br>
							<span class="precio">Precio web: <p>$<?php echo $datos[$i]['Precio'];?></p></span>
							<br>
							<br>
							<span>Unidades: 
								<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
								data-precio="<?php echo $datos[$i]['Precio'];?>"
								data-id="<?php echo $datos[$i]['Id'];?>"
								class="cantidad">
							</span>
							<br>
							<span class="subtotal">Subtotal: $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						</figcaption>
					</figure>
				</li>

			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<h2>No se han añadido productos. </h2>';
			}
			
			echo '<h2 id="total">Total a pagar por Payu: $'.$total.'</h2>';
		
		?>
		<a href="./">Volver a catálogo.</a>

               	 </ul>
			</section>
<?php
}
?>

</div>
</section>
<div class="footer-into">
	<?php include '../../../footer.php'; ?>
</div>