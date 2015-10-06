<?php
include_once("include_extra/defines.php");
include_once(RAIZ."/include_extra/head.php");
include_once(RAIZ."/include_extra/conexion.php");
include_once(RAIZ."/PHPMailer/class.phpmailer.php");
?>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/details.css"/>
    <link rel="stylesheet" type="text/css" href="css/media_querys3.css"/>
	<script src="js/ajaxFunctions.js"></script> 
	<script src="js/jquery1.11.3.js"></script> 
</head>

<body>

	<?php
		if (isset($_POST)){
			$payerFullName = $_POST['payerFullName'];
			$buyerEmail = $_POST['buyerEmail'];
			
			$db = callDb();
			$sql = "INSERT INTO usuarios (nombreApellido, email) VALUES ('$payerFullName', '$buyerEmail')";
			$db->query($sql);
			
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
				<form id='formPayu' class='pagar datos' method='post' action='https://gateway.payulatam.com/ppp-web-gateway'>
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
		window.onload = function() {
			$('#formPayu').submit();
		}
	</script>

	<?php 
	}
	else
	{

	}
	?>
	
	
</body>