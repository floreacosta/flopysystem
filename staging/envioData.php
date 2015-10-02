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
			
			var_dump($_POST);
			
			$codReferencia = $_POST['numeroPago'];
			$direccion = $_POST['direccion'];
			$piso = $_POST['piso'];
			$departamento = $_POST['departamento'];
			$telefono = $_POST['telefono'];
			$localidad = $_POST['localidad'];
			$provincia = $_POST['provincia'];
			$codigoPostal = $_POST['codigoPostal'];
			$email = $_POST['mail'];
			
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
			$mail->FromName   = "Envio Flopy"; // GMAIL name from // Nombre que aparece en el remitente del mail


			$mail->Subject    = "Envio codigo $codReferencia "; // Titulo 

			$mail->AddAddress("venta-online@flopysystem.com.ar", "Fernando Prado"); // A quien se envia
			
			$mail->IsHTML(true);      // HTML
			$mail->MsgHTML("
			<ul>
				<li>Codigo de referencia: $codReferencia</li>
				<li>Direccion: $direccion</li>
				<li>Piso: $piso</li>
				<li>Departamento: $departamento</li>
				<li>Telefono: $telefono</li>
				<li>Localidad: $localidad</li>
				<li>Provincia: $provincia</li>
				<li>Codigo Postal: $codigoPostal</li>
				<li>Mail: $email</li>
			</ul>			
			"); // HTML
			
			if(!$mail->Send()){
				echo "<h1>Ha ocurrido un error, si ve esta pantalla envienos un email detallando su caso. Disculpe las molestias</h1>";	
			}else{
				echo "<h1>Muchas gracias por su compra, un operador se pondra en contacto con usted.</h1>";
			}
			
			$mail->SmtpClose();
			unset($mail);
			header("Location: /index.php");
			exit;			
		}
	?>
	
	
</body>