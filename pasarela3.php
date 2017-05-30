<?php
/*
$claveEncriptacion = "99888888";
$merchantID = "111950028";
$acquirerBIN = "0000554052";
*/

$claveEncriptacion = "87401456";
$merchantID = "082108630";
$acquirerBIN = "0000554002";
$terminalID = "00000003";
$numOperacion = "98746300414";
$importe = "50.00";
$tipoMoneda = "978";
$exponente = "2";
$cifrado = "SHA1";
$URL_OK = "http://www.ceca.es";
$URL_NOK = "http://www.ceca.es";

$cadena_sha1 = $claveEncriptacion.$merchantID.$acquirerBIN.$terminalID.$numOperacion.$importe.$tipoMoneda.$exponente.$cifrado.$URL_OK.$URL_NOK;

$firma = sha1($cadena_sha1);

?>

<html>
	<head>
		<title>P&aacute;gina de pago</title>
	</head>
	<body>
		<form action="https://pgw.ceca.es/cgi-bin/tpv" method="POST" enctype="application/x-www-form-urlencoded">
			
		<input NAME="MerchantID" TYPE=hidden VALUE="<?php echo $merchantID; ?>">
		<input NAME="AcquirerBIN" TYPE=hidden VALUE="<?php echo $acquirerBIN; ?>">
		<input NAME="TerminalID" TYPE=hidden VALUE="<?php echo $terminalID; ?>">
		<input NAME="URL_OK" TYPE=hidden VALUE="<?php echo $URL_OK; ?>">
		<input NAME="URL_NOK" TYPE=hidden VALUE="<?php echo $URL_NOK; ?>">
		<input NAME="Firma" TYPE=hidden VALUE="<?php echo $firma; ?>" >
		<input NAME="Cifrado" TYPE=hidden VALUE="<?php echo $cifrado; ?>">
		<input NAME="Num_operacion" TYPE=hidden VALUE="<?php echo $numOperacion; ?>">
		<input NAME="Importe" TYPE=hidden VALUE="<?php echo $importe; ?>">
		<input NAME="TipoMoneda" TYPE=hidden VALUE="<?php echo $tipoMoneda; ?>">
		<input NAME="Exponente" TYPE=hidden VALUE="<?php echo $exponente; ?>">
		<input NAME="Pago_soportado" TYPE=hidden VALUE="SSL">
		<input NAME="Pago_elegido" TYPE=hidden VALUE="SSL">
		Tarjeta:<input NAME="PAN" TYPE=text VALUE="5020470001370055"><br>
		Caducidad:<input NAME="Caducidad" TYPE=text VALUE="201712"><br>
		CVV2/CVC2:<input NAME="CVV2" TYPE=text VALUE="989"><br>
		<input NAME="Idioma" TYPE=hidden VALUE="1">
		<center>
		<input TYPE="submit" VALUE="Comprar">
		</center>
	</form>
	</body>
</html>