<?php
include("/include_extra/head.php");
?>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/details.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys3.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 
</head>

<body>

	<?php
	include("/include_extra/header.php");
	?>

	<section class="thanks">
		<h1>Tu pago se ha acreditado con éxito.</h1>
		<h1 style="display:none">El pago ha sido rechazado por fondos insuficientes.</h1>
		<h1 style="display:none">El pago ha sido rechazado por exceso del límite.</h1>
		<h1 style="display:none">La sesión ha expirado. Inténtelo nuevamente.</h1>
		<h1 style="display:none">Ha ocurrido un inconveniente. Inténtelo de nuevo por favor.</h1>
		
		<div class='info'>
			<table class='head'>
				<tr>
					<td class='head cod'>N° de pago</td>
				</tr>
				<tr>
					<td class='head'>Titular</td>
				</tr>
				<tr>
					<td class='head'>Forma de pago</td>
				</tr>
				<tr>
					<td class='head'>Monto total</td>
				</tr>
				<tr>
					<td class='head'>Fecha</td>
				</tr>
			</table>
			
			<table class='info'>
				<tr>
					<td class='cod'>153682-2</td>
				</tr>
				<tr>
					<td>Acosta, M. Florencia</td>
				</tr>
				<tr>
					<td>Visa, 6 cuotas</td>
				</tr>
				<tr>
					<td>$420</td>
				</tr>
				<tr>
					<td>07/09/2015</td>
				</tr>
			</table>
		</div>
		<div class='clear'></div>
		
			<h2>¡Importante!</h2>
			<p>En caso de requerir el envío de la compra llenar el siguiente formulario y a la brevedad enviaremos el costo del despacho.</p>
				<form class='formulario-envio' enctype="text/plain" method="get" action="mailto:ventas@flopysystem.com.ar">
					<div>
						<ul>
							<li>
								<h2>Dirección</h2>
								<input type="text" value="" name='direccion' maxlength="50"></input>
							</li>
							<li>
								<h2>Número</h2>
								<input type="text" value="" name='altura' maxlength="6"></input>
							</li>
							<li>
								<h2>Piso*</h2>
								<input type="text" value="" name='piso' maxlength="2"></input>
							</li>
							<li>
								<h2>Departamento*</h2>
								<input type="text" value="" name='departamento' maxlength="2"></input>
							</li>
						</ul>	
						<ul>
							<li>
								<h2>Localidad</h2>
								<input type="text" value="" name='localidad' maxlength="40"></input>
							</li>
							<li>
								<h2>Provincia</h2>
								<input type="text" value="" name='provincia' maxlength="40"></input>
							</li>
							<li>
								<h2>Código Postal</h2>
								<input type="text" value="" name='codigoPostal' maxlength="4"></input>
							</li>
							<li>
								<h2>E-Mail</h2>
								<input type="text" value="" name='mail' maxlength="25"></input>
							</li>
						</ul>
					</div>				
					<div class='clear'></div>
					<input type="submit" value="Enviar" ></input>
				</form>
			</div>
		<a href="/index.html"><h2>Página principal</h2></a>
	</section>

	<div class="details">
		<?php
		include("/include_extra/footer.php");
		?>
	</div>
	
</body>