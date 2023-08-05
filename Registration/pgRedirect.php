<?php
session_start()
?>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();



// Create an array having all required parameters for creating checksum.
$paramList["MID"] = "####merchand id";
$paramList["ORDER_ID"] = $_SESSION['order'];
$paramList["CUST_ID"] = "PERSONA";
$paramList["INDUSTRY_TYPE_ID"] = "PrivateEducation";
$paramList["CHANNEL_ID"] = "WEB";
$paramList["TXN_AMOUNT"] = 1;
$paramList["WEBSITE"] = 'DEFAULT';


$paramList["CALLBACK_URL"] = "http://mitpersonafest.mituniversity.ac.in/Registration/pgResponse.php";
/*
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,'#######enter merchant key');

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>