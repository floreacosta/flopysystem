<?php	
function callDb(){
	$server='localhost';
	$username='root';
	$password='';
	$bd='flopysystem';
	
	$db = mysqli_connect("$server","$username","$password","$bd");
	if(mysqli_connect_errno()){
		echo 'La conexion con la base de datos ha fallado con los siguientes errores: '. mysqli_connect_error();
		die();
	}
	$db->set_charset("utf8");
	
	return $db;
}
?>
