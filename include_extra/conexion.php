<?php	
function callDb(){
	$server = 'us76.toservers.com:3306';
	$user = 'uv3721';
	$pass = 'sudor503plano';
	$bd = 'uv3721_carrito_compras';
	
	$db = mysqli_connect("$server","$user","$pass","$bd");
	if(mysqli_connect_errno()){
		echo 'La conexion con la base de datos ha fallado con los siguientes errores: '. mysqli_connect_error();
		die();
	}
	$db->set_charset("utf8");
	
	return $db;
}
?>
