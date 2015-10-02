<?php
include_once("include_extra/defines.php");
include_once(RAIZ."/include_extra/head.php");
include_once(RAIZ."/include_extra/functions.php");
include_once(RAIZ."/include_extra/classCarrito.php");
?>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/details.css"/>
    <link rel="stylesheet" type="text/css" href="css/media_querys2.css"/>
	<script src="js/ajaxFunctions.js"></script> 
	<script src="js/jquery1.11.3.js"></script> 
</head>

<body>

<?php
include_once(RAIZ."/include_extra/header.php");
include_once(RAIZ."/include_extra/carrito.php");
showDetalleProducto();
agregarAlCarrito();
?>



<div class="details">
	<?php
	include_once(RAIZ."/include_extra/footer.php");
	?>
</div>

</body>