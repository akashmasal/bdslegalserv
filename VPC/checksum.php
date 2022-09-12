<?php
session_start();
$id = 0;
class Checksum
{

	static function calculateChecksum($secret_key, $all)
	{
		$hash = hash_hmac('sha256', $all, $secret_key);
		$checksum = $hash;
		return $checksum;
	}


	static function getAllParams()
	{
		//ksort($_POST);
		// 	print_r($_POST);
		// 	exit();

		$currency = $_POST['currency'];
		//     $url = "http://free.currencyconverterapi.com/api/v6/convert?q=".$currency."_INR&compact=ultra&apiKey=be66c303170c5d75c90c";
		//     $ch = curl_init();
		//     $timeout = 0;
		//     curl_setopt ($ch, CURLOPT_URL, $url);
		//     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

		//     curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		//      $rawdata = curl_exec($ch);
		//     curl_close($ch);
		// $newcurrency_INR=explode(":",$rawdata);
		// $new_currency_INR = ltrim($newcurrency_INR[1], '}');


		$all = '';
		$total = $Toconvert_paisa = 0;
		$amt = $_POST['amount'];
		echo 	'<br>';
		//   $total=$amt*$new_currency_INR;
		$total = $_POST['amount'];
		$Toconvert_paisa = $total * 100;

		//	print_r($_POST);


		//DB insert.....

		$con = new PDO('mysql:host=localhost;dbname=easy_bdslegaldb', 'easy_bdslegaldb', 'bdslegal@#123');
		if (!$con) {
			die('Connection Error:<br>' . $con->errorCode() . '<br>' . $con->errorInfo());
		}





		$sql = "INSERT INTO payments(
    
			fullname,
			fulladdress,
			nationality,
			contactno,
			emailaddress,
			orderinfo,
			taxref,
			amount,
			vpc_Amount,
			convert_amount_to_paisa,
			merchantIpAddress,
			vpc_Command,
			vpc_Message,
			mode,
			vpc_Card,
			cardScheme,
			cardhashid,
			vpc_OrderInfo,
			txnDate,
			vpc_Merchant,
			bankid,
			vpc_MerchTxnRef,
			vpc_TransactionNo,
			vpc_AcqResponseCode,
			vpc_TxnResponseCode,
			vpc_VerType,
			paymentMethod,
			vpc_VerToken,
			paymentMode,
			bank,
			doRedirect,
			responseDescription,
			responseAmount,
			vpc_CardNum,
			vpc_CardExp,
			vpc_CardSecurityCode,
			vpc_Currency, 
			Original_single_amount
   ) VALUES "
			. "(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $con->prepare($sql);
		$stmt->execute(
			array(
				$_POST['buyerFirstName'] . ' ' . $_POST['buyerLastName'],
				$_POST['buyerAddress'],
				$_POST['buyerCountry'],
				$_POST['buyerPhoneNumber'],
				$_POST['buyerEmail'],
				$_POST['orderId'],
				$_POST['vpc_MerchTxnRef'],
				$_POST['amount'],
				$total,
				$Toconvert_paisa,
				$_POST['merchantIpAddress'],
				'',
				$_POST['productDescription'],
				$_POST['mode'],
				'',
				'',
				'',
				'',
				$_POST['txnDate'],

				$_POST['merchantIdentifier'],
				'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',
				$_POST['currency']
				// $new_currency_INR
			)
		);

		$id = $con->lastInsertId();


		$_POST['amount'] = intval($total) * 100;
		//$_POST['amount'] = 100;
		$_POST['currency'] = 'INR';
		$_SESSION["insertid_row"] = $con->lastInsertId();
		$_POST['insertid_row'] = $id;



		//	exit(); 
		$checksumsequence = array(
			"amount", "bankid", "buyerAddress",
			"buyerCity", "buyerCountry", "buyerEmail", "buyerFirstName", "buyerLastName", "buyerPhoneNumber", "buyerPincode",
			"buyerState", "currency", "debitorcredit", "merchantIdentifier", "merchantIpAddress", "mode", "orderId",
			"product1Description", "product2Description", "product3Description", "product4Description",
			"productDescription", "productInfo", "purpose", "returnUrl", "shipToAddress", "shipToCity", "shipToCountry",
			"shipToFirstname", "shipToLastname", "shipToPhoneNumber", "shipToPincode", "shipToState", "showMobile", "txnDate",
			"txnType", "zpPayOption"
		);



		foreach ($checksumsequence as $seqvalue) {
			if (array_key_exists($seqvalue, $_POST)) {
				if (!$_POST[$seqvalue] == "") {
					if ($seqvalue != 'checksum') {
						$all .= $seqvalue;
						$all .= "=";
						if ($seqvalue == 'returnUrl') {
							$all .= Checksum::sanitizedURL($_POST[$seqvalue]);
						} else {
							$all .= Checksum::sanitizedParam($_POST[$seqvalue]);
						}
						$all .= "&";
					}
				}
			}
		}

		// 		echo $all;
		return $all;
	}
	static function getAllParamsCheckandUpdate()
	{
		//ksort($_POST);




		$all = '';
		foreach ($_POST as $key => $value) {
			if ($key != 'checksum') {
				$all .= "'";
				if ($key == 'returnUrl') {
					$all .= Checksum::sanitizedURL($value);
				} else {
					$all .= Checksum::sanitizedParam($value);
				}
				$all .= "'";
			}
		}

		return $all;
	}
	static function outputForm($checksum)
	{
		//ksort($_POST);
		foreach ($_POST as $key => $value) {
			if ($key == 'returnUrl') {
				echo '<input type="hidden" name="' . $key . '" value="' . Checksum::sanitizedURL($value) . '" />' . "\n";
			} else {
				echo '<input type="hidden" name="' . $key . '" value="' . Checksum::sanitizedParam($value) . '" />' . "\n";
			}
		}
		echo '<input type="hidden" name="checksum" value="' . $checksum . '" />' . "\n";
	}

	static function verifyChecksum($checksum, $all, $secret)
	{
		$cal_checksum = Checksum::calculateChecksum($secret, $all);
		$bool = 0;
		if ($checksum == $cal_checksum) {
			$bool = 1;
		}

		return $bool;
	}

	static function sanitizedParam($param)
	{
		$pattern[0] = "%,%";
		$pattern[1] = "%#%";
		$pattern[2] = "%\(%";
		$pattern[3] = "%\)%";
		$pattern[4] = "%\{%";
		$pattern[5] = "%\}%";
		$pattern[6] = "%<%";
		$pattern[7] = "%>%";
		$pattern[8] = "%`%";
		$pattern[9] = "%!%";
		$pattern[10] = "%\\$%";
		$pattern[11] = "%\%%";
		$pattern[12] = "%\^%";
		$pattern[13] = "%=%";
		$pattern[14] = "%\+%";
		$pattern[15] = "%\|%";
		$pattern[16] = "%\\\%";
		$pattern[17] = "%:%";
		$pattern[18] = "%'%";
		$pattern[19] = "%\"%";
		$pattern[20] = "%;%";
		$pattern[21] = "%~%";
		$pattern[22] = "%\[%";
		$pattern[23] = "%\]%";
		$pattern[24] = "%\*%";
		$pattern[25] = "%&%";
		$sanitizedParam = preg_replace($pattern, "", $param);
		return $sanitizedParam;
	}

	static function sanitizedURL($param)
	{
		$pattern[0] = "%,%";
		$pattern[1] = "%\(%";
		$pattern[2] = "%\)%";
		$pattern[3] = "%\{%";
		$pattern[4] = "%\}%";
		$pattern[5] = "%<%";
		$pattern[6] = "%>%";
		$pattern[7] = "%`%";
		$pattern[8] = "%!%";
		$pattern[9] = "%\\$%";
		$pattern[10] = "%\%%";
		$pattern[11] = "%\^%";
		$pattern[12] = "%\+%";
		$pattern[13] = "%\|%";
		$pattern[14] = "%\\\%";
		$pattern[15] = "%'%";
		$pattern[16] = "%\"%";
		$pattern[17] = "%;%";
		$pattern[18] = "%~%";
		$pattern[19] = "%\[%";
		$pattern[20] = "%\]%";
		$pattern[21] = "%\*%";
		$sanitizedParam = preg_replace($pattern, "", $param);
		return $sanitizedParam;
	}

	static function outputResponse($bool)
	{
		foreach ($_POST as $key => $value) {
			if ($bool == 0) {
				if ($key == "responseCode") {
					echo '<tr><td width="50%" align="center" valign="middle">' . $key . '</td>
						<td width="50%" align="center" valign="middle"><font color=Red>***</font></td></tr>';
				} else if ($key == "responseDescription") {
					echo '<tr><td width="50%" align="center" valign="middle">' . $key . '</td>
						<td width="50%" align="center" valign="middle"><font color=Red>This response is compromised.</font></td></tr>';
				} else {
					echo '<tr><td width="50%" align="center" valign="middle">' . $key . '</td>
						<td width="50%" align="center" valign="middle">' . $value . '</td></tr>';
				}
			} else {
				echo '<tr><td width="50%" align="center" valign="middle">' . $key . '</td>
					<td width="50%" align="center" valign="middle">' . $value . '</td></tr>';
			}
		}
		echo '<tr><td width="50%" align="center" valign="middle">Checksum Verified?</td>';
		if ($bool == 1) {
			echo '<td width="50%" align="center" valign="middle">Yes</td></tr>';
		} else {
			echo '<td width="50%" align="center" valign="middle"><font color=Red>No</font></td></tr>';
		}
	}
	static function getAllResponseParams()
	{
		//ksort($_POST);
		$all = '';
		$checksumsequence = array(
			"amount", "bank", "bankid",
			"cardId", "cardScheme", "cardToken", "cardhashid", "doRedirect", "orderId", "paymentMethod", "paymentMode", "responseCode",
			"responseDescription"
		);
		foreach ($checksumsequence as $seqvalue) {
			if (array_key_exists($seqvalue, $_POST)) {

				$all .= $seqvalue;
				$all .= "=";
				if ($seqvalue == 'returnUrl') {
					$all .= $_POST[$seqvalue];
				} else {
					$all .= $_POST[$seqvalue];
				}
				$all .= "&";
			}
		}


		return $all;
	}
}
