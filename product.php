<?php
include_once("/include_extra/head.php");
include_once("/include_extra/functions.php");
include_once("/include_extra/classCarrito.php");
?>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/product.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys2.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 
</head>

<body>

<?php
include_once("/include_extra/header.php");
include_once("/include_extra/carrito.php");
?>

<section class="productos">
	<?php 
		getSeccionPorCategoriaMenu();
	?>
	</div>
</section>

<div class="clear"></div>

<div class="details">
	<?php
	include_once("/include_extra/footer.php");
	?>	
</div>

</body>