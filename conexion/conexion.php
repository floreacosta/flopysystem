<?php
	$server='localhost';
	$username='root';
	$password='';
	$db='flopysystem';
	$con=mysql_connect ($server,$username,$password)or die ("No se ha podido establecer conexión.");
	$sdb=mysql_select_db($db,$con)or die ("La base de datos no existe.");
	
	
	function callDb(){
		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$bd = 'flopysystem';
		
		$db = mysqli_connect("$server","$user","$pass","$bd");
		if(mysqli_connect_errno()){
			echo 'La conexion con la base de datos ha fallado con los siguientes errores: '. mysqli_connect_error();
			die();
		}
		
		return $db;
	}
?>
