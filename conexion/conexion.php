<?php
	$server="us76.toservers.com:3306";
	$username="uv3721";
	$password="sudor503plano";
	$db='uv3721_carrito_compras';
	$con=mysql_connect ($server,$username,$password)or die ("No se ha podido establecer conexión.");
	$sdb=mysql_select_db($db,$con)or die ("La base de datos no existe.");
?>
