<?php
include_once("/include_extra/head.php");
include_once("/include_extra/classCarrito.php");
include_once("/include_extra/functions.php");

?>

    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/buy.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys2.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 	
</head>

<body>

<?php
include("/include_extra/header.php");
?>

<section class="details-buy" id='details-buy'>
	<?php printOrder(); ?>
</section>


<div class="details">
	<?php
	include_once("/include_extra/footer.php");
	?>
</div>

</body>