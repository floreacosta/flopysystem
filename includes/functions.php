<?php
//getting the categories

$con = mysqli_connect("us76.toservers.com:3306","uv3721","sudor503plano","uv3721_carrito_compras"); 

//Generar las categorias desde BD
function getCats(){
	
	global $con;
	
	//aca hago las consultas completas de cada tabla de categorias
	$get_cats = 'select * 
	from category1 c1
	';
					
	$get_cats2 = 'select * 
	from category2 c2
	';
	
	$get_cats3 = 'select * 
	from category3 c3
	';
	
	$run_cats = mysqli_query($con, $get_cats);
	$run_cats2 = mysqli_query($con, $get_cats2);
	$run_cats3 = mysqli_query($con, $get_cats3);
	
	
	//Aca empiezo a recorrer cada resultado de la tabla1
    while($row_cats=mysqli_fetch_array($run_cats)){
		
		//Tomo las propiedades id y titulo de la tabla 1
		$cat_id = $row_cats['id_category1'];
		$cat_title = $row_cats['category1_title'];
		
		//imprimo todos los titulos de la tabla1
		echo "<p>$cat_title</p>";
		
		//creo un array que va a tener todos los resultados de la tabla2
		while($row_cats2=mysqli_fetch_array($run_cats2)){
			$row_cats2array[] = $row_cats2;	
		}
		
		//creo un array que va a tener todos los resultados de la tabla3
		while($row_cats3=mysqli_fetch_array($run_cats3)){
			$row_cats3array[] = $row_cats3;	
		}	
		
		//hago un foreach para recorrer el array de la segunda tabla
		foreach ($row_cats2array as $row_cats22) {
			
			//tomo el id y titulo de la segunda tabla, y la referencia a la primer tabla
			$cat2_id = $row_cats22['id_category2'];
			$cat2_title = $row_cats22['category2_title'];
			$cat1_id = $row_cats22['id_category1'];
		
			//Hago una condición, si el id de referencia a la tabla1 es igual al id del ultimo
			//resultado impreso (linea 37) lo imprimo, ya que el elemento es
			//hijo de el elemento impreso al principio
			if($cat_id == $cat1_id){
				echo "<p>-------$cat2_title</p>";
				
				//Hago la misma logica, pero relacionando la tabla3 con la tabla2
				foreach ($row_cats3array as $row_cats33) {
					$cat3_id = $row_cats33['id_category3'];
					$cat3_title = $row_cats33['category3_title'];
					$cat22_id = $row_cats33['id_category2'];
						if($cat2_id == $cat22_id){
						//si coinciden los ID imprimo
						echo "<p>-----------------$cat3_title</p>";						
					}
						
				}
			}
			
			
		}
		
		
		
	}
	
	
}




?>