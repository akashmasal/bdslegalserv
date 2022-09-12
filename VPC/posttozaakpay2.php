
<?php include('checksum.php');   ?>

<?php
	//enter your secret key here
	$secret = '619733acd3cd4e3b81dc0c7bdda61b72';

	$all = Checksum::getAllParams();
	$checksum = Checksum::calculateChecksum($secret, $all);

	
?>
<center>
<table width="500px;">
	<tr>
		<td align="center" valign="middle">Do Not Refresh or Press Back <br/> Redirecting to Zaakpay</td>
	</tr>
	<tr>
		<td align="center" valign="middle">
			<form action="https://api.zaakpay.com/api/paymentTransact/V7" method="post">
				<?php
				Checksum::outputForm($checksum);
				?>
			</form>
		</td>

	</tr>

</table>

</center>
<script type="text/javascript">
var form = document.forms[0];
form.submit();
</script>
