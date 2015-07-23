<?php include '../../header.php'; ?>

<section class="catalogo">
<div class="container catalogo detalles">

<?php
	include '../../conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
	$re=mysql_query("select * from laser where id=".$_GET['id'])or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>

<section>
        <h1><?php echo $f['nombre'];?></h1>
        <h2>| <?php echo $f['categoria'];?></h2>
        <span>| <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']); echo "<a href='$url'>back</a>"; ?>
</span>
    <aside>
        <h4 class="cuotas"><img src="../../img/<?php echo $f['imagen2'];?>"/></h4>
        <h4>$<?php echo $f['precio'];?></h4>
    </aside>
    </section>
                
    
    <br />
    <div class="contenido-descripcion">
        <img src="../../img-productos/<?php echo $f['imagen1'];?>"/>
        <p><?php echo $f['descripcion'];?></p>  
    </div>

<?php
}
?>

</div>
</section>
<div class="footer-into">
	<?php include '../../footer.php'; ?>
</div>