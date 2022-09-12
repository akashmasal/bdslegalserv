<?php
session_start();
/*
Template Name: Zaakpay Response Page
*/
?>
<?php include('checksum.php'); ?>
<?php

	// Please insert your own secret key here
	$secret = '619733acd3cd4e3b81dc0c7bdda61b72';
   $id=$_SESSION["insertid_row"];
	$recd_checksum = $_POST['checksum'];
 	 $all = Checksum::getAllResponseParams();

	error_log("AllParams:".$all);
	error_log("Secret Key : ".$secret);
	$checksum_check = Checksum::verifyChecksum($recd_checksum, $all, $secret);
 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Gateway | BDSServ</title>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">

    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
h2{
    color:red;
    font-size:24px;
}
    </style>
    <body>
        <?php 
        
      if($id != 0 || $id != ''){
	     $amount=$_POST['amount'];
	     $cardhashid=$_POST['cardhashid'];
	     $bank=$_POST['bank'];
	     $bankid=$_POST['bankid'];
	     $cardId=$_POST['cardId'];
	     $cardScheme=$_POST['cardScheme'];
	     $cardToken=$_POST['cardToken'];
	     $doRedirect=$_POST['doRedirect'];
	     $orderId=$_POST['orderId'];
	      $paymentMethod=$_POST['paymentMethod'];
	      $paymentMode=$_POST['paymentMode'];
	     $responseCode=$_POST['responseCode'];
	     
	        $conn = new mysqli('localhost', 'bdsserv_vikrantd', 'Mumbai@#123','bdsserv_BDS_Mobikwik');
	     $sql="UPDATE payments SET
	      responseAmount='".$amount."',cardhashid='".$cardhashid."', bank='".$bank."',bankid='".$bankid."', vpc_Card ='".$cardId."',
	      cardScheme='".$cardScheme."',vpc_VerToken='".$cardToken."',doRedirect='".$doRedirect."',vpc_OrderInfo='".$orderId."', paymentMethod='".$paymentMethod."',paymentMode='".$paymentMode."', vpc_AcqResponseCode='".$responseCode."' 
	      WHERE id='".$id."'";
	     
	      
            $conn->query($sql);
	      
	     
	    }
	    
	    
	     
       if( $_POST['responseCode'] == '100'){ 
       
       
       ?>
       
           <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p><?php echo $_POST['responseDescription']  ; ?></p>
        <!--<a href="http://bdslegalserv.com//BVPS/" class="btn btn-success">Home</a>-->
        <a href="<?php echo base_url("VPS");?>" class="btn btn-success">Home</a>
      </div>
      <?php }else
      { ?>
        
    
<!--
<center>
<table width="500px;">
	<?php //Checksum::outputResponse($checksum_check);
	?>
</table>
-->
      
      
      
      
       <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h2>
                   Payment Failed !!</h2>
                <h3>
                    <?php echo '( Error code : '.$_POST['responseCode'].')'; ?></h3>
                <div class="error-details">
                    Sorry, an error has occured, <?php echo $_POST['responseDescription']  ; ?>
                </div>
                <div class="error-actions">
                    <!--<a href="http://bdslegalserv.com//BVPS/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>-->
                    <a href="<?php echo base_url("VPS");?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
      <?php } ?>
      
    </body>
</html>


