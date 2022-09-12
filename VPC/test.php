<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="">
<?php 
	//vikrant
	function currencyConverter($fromCurrency,$toCurrency,$amount) {	
	$fromCurrency = urlencode($fromCurrency);
	$toCurrency = urlencode($toCurrency);	
	$encode_amount = 1;
	$url  = "https://www.google.com/search?q=".$fromCurrency."+to+".$toCurrency;
	$get = file_get_contents($url);
	$data = preg_split('/\D\s(.*?)\s=\s/',$get);
	$exhangeRate = (float) substr($data[1],0,7);
	$convertedAmount = $amount*$exhangeRate;
	$data = array( 'exhangeRate' => $exhangeRate, 'convertedAmount' =>$convertedAmount, 'fromCurrency' => strtoupper($fromCurrency), 'toCurrency' => strtoupper($toCurrency));
	echo json_encode( $data );	
	
		$converted_currency=0;
	 	$from_currency=$_POST['currency'];
	 	$to_currency='INR';
 	$amount=$_POST['amount'];
	$converted_currency=currencyConverter($from_currency, $to_currency, $amount);
	echo $converted_currency;
} ?>
</body>