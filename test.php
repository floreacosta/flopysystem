<?php
include_once("/include_extra/head.php");
include_once("/include_extra/conexion.php");
include_once("/PHPMailer/class.phpmailer.php");
?>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/details.css"/>
    <link rel="stylesheet" type="text/css" href="/css/media_querys3.css"/>
	<script src="/js/ajaxFunctions.js"></script> 
	<script src="/js/jquery1.11.3.js"></script> 
</head>

<body>

	<?php
		if (isset($_POST)){
			$payerFullName = $_POST['payerFullName'];
			$buyerEmail = $_POST['buyerEmail'];
			
			$db = callDb();
			$sql = "INSERT INTO usuarios (nombreApellido, email) VALUES ('$payerFullName', '$buyerEmail')";
			$db->query($sql);
			
			$mail = new PHPMailer();
			$mail->CharSet = 'UTF-8';
			$mail->SMTPDebug     = false;            //true: para ver detalles del proceso. FALSE: no muestra nada
			$mail->IsSMTP();					     //Setea que la aplicación se conecte al SMTP, si no se inicia va a obviar la variables de SMTP declaradas más abajo
			$mail->SMTPKeepAlive = true;             // Close SMTP conn	
			$mail->SMTPAuth   	 = true;             // enable SMTP authentication
			$mail->Host       	 = "smtp.flopysystem.com.ar"; // SMTP server
			$mail->Port       	 = 25;              // SMTP port 

			// From
			$mail->Username   = "venta-online@flopysystem.com.ar";  // FlopySystem username
			$mail->Password   = "pochita..";   // GMAIL password	// FlopySystem Pass
			$mail->From       = "venta-online@flopysystem.com.ar";	// FlopySystem username (lo pide dos veces, no se porque)
			$mail->FromName   = "Fernando Prado"; // GMAIL name from // Nombre que aparece en el remitente del mail


			$mail->Subject    = "TEST"; // Titulo 

			$mail->AddAddress("fernando.prado@alconan.com.ar", "Fernando Prado"); // A quien se envia
			
			$mail->IsHTML(false);      // HTML
			$mail->MsgHTML("TEST"); // HTML
			if(!$mail->Send()){
				echo "no mando";	
			}else{
				echo "mando";
			}
			
			$mail->SmtpClose();
			unset($mail);	
			
			
			echo"
			<h1>REDIRECCIONANDO A PAYU, ESPERE UNOS SEGUNDOS POR FAVOR</h1>
			";
			
			$merchantId = $_POST['merchantId'];
			$accountId = $_POST['accountId'];
			$description = $_POST['description'];
			$referenceCode = $_POST['referenceCode'];
			$amount = $_POST['amount'];
			$tax = $_POST['tax'];
			$taxReturnBase = $_POST['taxReturnBase'];
			$currency = $_POST['currency'];
			$signature = $_POST['signature'];
			$test = $_POST['test'];
			$responseUrl = $_POST['responseUrl'];
			$ApiLogin = $_POST['ApiLogin'];
			$ApiKey = $_POST['ApiKey'];
			echo"
				<form id='formPayu' class='pagar datos' method='post' action='https://stg.gateway.payulatam.com/ppp-web-gateway/'>
					<input name='payerFullName' type='hidden'  value='$payerFullName' >
					<input name='buyerEmail'  	type='hidden'  value='$buyerEmail' >
					<input name='merchantId'    type='hidden'  value='$merchantId' >
					<input name='accountId'     type='hidden'  value='$accountId' >
					<input name='description'   type='hidden'  value='$description' >
					<input name='referenceCode' type='hidden'  value='$referenceCode' >
					<input name='amount'        type='hidden'  value='$amount' >
					<input name='tax'           type='hidden'  value='$tax' >
					<input name='taxReturnBase' type='hidden'  value='$taxReturnBase' >
					<input name='currency'      type='hidden'  value='$currency' >
					<input name='signature'     type='hidden'  value='$signature' >
					<input name='test'          type='hidden'  value='$test' >
					<input name='responseUrl'   type='hidden'  value='$responseUrl' >
					<input name='ApiLogin'    	type='hidden'  value='$ApiLogin' >		
					<input name='ApiKey'    	type='hidden'  value='$ApiKey' >
					<input style='display:none' name='Submit'        type='submit'  value='Pagar' >
				</form>
			";
		
	?>

	<script type="text/javascript">
		/*window.onload = function() {
			$('#formPayu').submit();
		}*/
	</script>

	<?php 
	}
	else
	{

	}
	?>
	
	
</body>