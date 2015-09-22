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
	if(isset($_GET)){
		$estadoTransaccion = $_GET['message'];
		
		if($estadoTransaccion == 'Declinado'){
			echo"
				<section class='thanks'>
					<h1>El estado de tu pago es: $estadoTransaccion.</h1>
					<a href='order.php'><h1>Volver a intentar</h1></a>
				</section>
			";
			
		}else{
			$numeroPago = $_GET['referenceCode'];
			$formaDePago = $_GET['lapPaymentMethodType'];
			$montoTotal = $_GET['TX_VALUE'];
			$tipoDePago = $_GET['lapPaymentMethod'];
			$telefono = $_GET['telephone'];
			$fecha = date("d/m/Y");
			
			if($formaDePago == 'CREDIT_CARD'){
				$formaDePago = 'Tarjeta de crédito';
				}
			
			echo"
				<section class='thanks'>
				<h1>El estado del pago es: $estadoTransaccion.</h1>
				
				<div class='info'>
					<table class='head'>
						<tr>
							<td class='head cod'>N° de pago</td>
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
							<td class='cod'>$numeroPago</td>
						</tr>
						<tr>
							<td>$formaDePago / $tipoDePago</td>
						</tr>
						<tr>
							<td>$$montoTotal</td>
						</tr>
						<tr>
							<td>$fecha</td>
						</tr>
					</table>
				</div>
				<div class='clear'></div>
				";
				
				$direccion = $_GET['merchant_address'];
				$mail = $_GET['buyerEmail'];				
				
				echo"
				
					<h2>¡Importante!</h2>
					<p>En caso de requerir el envío de la compra llenar el siguiente formulario y a la brevedad enviaremos el costo del despacho.</p>
						<form class='formulario-envio' enctype='text/plain' method='get' action='mailto:ventas@flopysystem.com.ar'>
							<div>
								<ul>
									<li>
										<h2>Dirección</h2>
										<input type='text' value='$direccion' name='direccion' maxlength='50'></input>
									</li>
									<li>
										<h2>Piso*</h2>
										<input type='text' value='' name='piso' maxlength='2'></input>
									</li>
									<li>
										<h2>Departamento*</h2>
										<input type='text' value='' name='departamento' maxlength='2'></input>
									</li>
									<li>
										<h2>Teléfono</h2>
										<input type='text' value='$telefono' name='telefono' maxlength='7'></input>
									</li>
								</ul>	
								<ul>
									<li>
										<h2>Localidad</h2>
										<input type='text' value='' name='localidad' maxlength='40'></input>
									</li>
									<li>
										<h2>Provincia</h2>
										<input type='text' value='' name='provincia' maxlength='40'></input>
									</li>
									<li>
										<h2>Código Postal</h2>
										<input type='text' value='' name='codigoPostal' maxlength='4'></input>
									</li>
									<li>
										<h2>E-Mail</h2>
										<input type='text' value='$mail' name='mail' maxlength='25'></input>
									</li>
								</ul>
							</div>				
							<div class='clear'></div>
							<input type='submit' value='Enviar'></input>
						</form>
					</div>
				<a href='/index.html'><h2>Home</h2></a>
			</section>
			";
		}
	}
	
	?>

	<div class="details">
		<?php
		include("/include_extra/footer.php");
		?>
	</div>
	
</body>