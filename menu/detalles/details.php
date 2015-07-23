<?php include '../../header.php'; ?>

<section class="catalogo">
<div class="container catalogo detalles">

<?php
	include '../../conexion/conexion.php';
	mysql_query("SET NAMES 'utf8'");
    $re=mysql_query("SELECT * FROM `product` WHERE id_product=".$_GET['id'])or die(mysql_error());
	while ($f=mysql_fetch_array($re)){
?>

<section>
        <h1><?php echo $f['name'];?></h1>
        <h2>| <?php echo $f['tipo'];?></h2>
        <span>| <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']); echo "<a href='$url'>back</a>"; ?>
</span>
    <aside>
        <h4 class="cuotas"><img src="../../img/<?php echo $f['promotion'];?>"/></h4>
        <h4>$<?php echo $f['price'];?></h4>
    </aside>
    </section>
                
    
    <br />
    <div class="contenido-descripcion">
        <img src="../../img-productos/<?php echo $f['image'];?>"/>
        <p><?php echo $f['details'];?></p>  
    </div>

<?php
}
?>

</div>
</section>
<div class="footer-into">
	<?php include '../../footer.php'; ?>
</div>
