<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    exit('No direct script access allowed');
}

include 'Utility.php';
$utility = new Utility();
$config = $utility->config;

$enckey = $config['ENC_KEY'];
$SECURE_SECRET = $config['SECURE_SECRET'];
$gateWayURL = $config['GATEWAY_URL'];
$debug = $config['DEBUG_FLAG'];

if (
        $utility->filterString($_POST['fullname']) &&
        $utility->filterString($_POST['contactno']) &&
        $utility->filterEmail($_POST['emailaddress']) &&
        $utility->filterString($_POST['vpc_OrderInfo']) &&
        $utility->filterString($_POST['vpc_MerchTxnRef']) &&
        $utility->filterString($_POST['vpc_DCCAmount']) &&
        $utility->filterString($_POST['vpc_Currency'])
) {

    //DB insert.....
    $con = new PDO('mysql:host=localhost;dbname=bdsserv_bdsmeet', 'bdsserv_bdsmeet', 'bdsserv_bdsmeet@123');
    if (!$con) {
        die('Connection Error:<br>' . $con->errorCode() . '<br>' . $con->errorInfo());
    }
    $sql = "INSERT INTO payments(fullname, fulladdress, nationality, contactno, emailaddress, orderinfo, taxref, amount, vpc_Amount, vpc_Locale, vpc_BatchNo, vpc_Command, vpc_Message, vpc_Version, vpc_Card, Title, vpc_SecureHash, vpc_OrderInfo, vpc_ReceiptNo, vpc_Merchant, vpc_AuthorizeId, vpc_MerchTxnRef, vpc_TransactionNo, vpc_AcqResponseCode, vpc_TxnResponseCode, vpc_VerType, vpc_VerStatus, vpc_VerToken, vpc_VerSecurityLevel, vpc_3DSenrolled, vpc_3DSXID, vpc_3DSECI, vpc_3DSstatus, vpc_CardNum, vpc_CardExp, vpc_CardSecurityCode, vpc_Currency) VALUES "
            . "(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->execute(array($_POST['fullname'], $_POST['fulladdress'], $_POST['nationality'], $_POST['contactno'], $_POST['emailaddress'], $_POST['vpc_OrderInfo'], $_POST['vpc_MerchTxnRef'], $_POST['vpc_DCCAmount'],
        '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', $_POST['vpc_Currency']));
 
    unset($_POST['fullname']);
    unset($_POST['fulladdress']);
    unset($_POST['nationality']);
    unset($_POST['contactno']);
    unset($_POST['emailaddress']);
    unset($_POST['SubButL']);
    unset($_POST['Reset']);
    
    
    $_POST['vpc_DCCAmount'] = intval($_POST['vpc_DCCAmount'])*100;

    // get inputs
    $data = $_POST;

    $data['vpc_Command'] = "pay";
    $data['vpc_Version'] = $config['VERSION'];
    $data['vpc_AccessCode'] = $config['MERCHANT_ACCESS_CODE'];
    $data['vpc_MerchantId'] = $config['MERCHANT_ID'];
    $data['vpc_ReturnURL'] = $config['RETURN_URL'];

    //Remove inprocess (submit button)
    unset($data["inprocess"]);

    //------- sort on keys
    ksort($data);

    $str = $SECURE_SECRET;
    $dataToPostToPG = "";
    foreach ($data as $key => $val) {
        $str = $str . $val;
        $dataToPostToPG .= $key . "=" . $val . "::";
    }
    //Remove lat ::
    $pos = strrpos($dataToPostToPG, "::");
    if ($pos !== false) {
        $dataToPostToPG = substr_replace($dataToPostToPG, "", $pos, strlen("::"));
    }

    $SecureHash = hash('sha256', utf8_encode($str));
    $dataToPostToPG = "vpc_SecureHash=" . $SecureHash . "::" . $dataToPostToPG;

    $ciphertext_base64 = $utility->encrypt($dataToPostToPG, $enckey);

    if ($debug) {
        echo "<pre>"; //------- readable format output
        echo "<br>......... String to calculate Secure Hash ..........<br>";
        print_r($str);

        echo "<br>......... Secure Hash ..........<br>";
        print_r($SecureHash);

        echo "<br>......... Data To Post to PG ..........<br>";
        print_r($dataToPostToPG);

        echo "<br>......... Encrypted data to Post to PG ..........<br>";
        print_r($ciphertext_base64);
    }
    ?>

    <!-- Send data to payment gateway-->
    <form name="server_request" action="<?php echo $gateWayURL ?>" method="post" accept-charset="ISO-8859-1" align="center">
        <input type="hidden" name="vpc_MerchantId" id="vpc_MerchantId" value="<?php echo $data["vpc_MerchantId"]; ?>" > 							
        <input type="hidden" name="EncData" id="EncData" value="<?php echo $ciphertext_base64; ?>" > 
    </form>
    <script type="text/javascript">
        document.server_request.submit();
    </script>

    <?php
} else {
    echo "You have error in your submitted form, please go back and correct the errors.";
}
?>


