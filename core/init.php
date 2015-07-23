<?php
	function conexionBD(){
		$con = mysqli_connect("localhost","root","","flopysystem");
		//$con = mysqli_connect("us76.toservers.com:3306","uv3721","sudor503plano","uv3721_carrito_compras");
		mysql_query("SET NAMES 'utf8'");
	}
?>