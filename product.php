<?php
include_once("/include_extra/head.php");
include_once("/include_extra/functions.php");
?>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/product.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys2.css"/>
</head>

<body>

<?php
include_once("/include_extra/header.php");
?>

<section class="productos">
	<h1>Título de la sección</h1><a href="#">| back</a>
	<div>
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