<?php
session_start();
?>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		//echo "<b>Transaction status is success</b>" . "<br/>";
		?>
		<style>
			body
			{
				display: flex;
				/* align-content: center; */
				justify-content: center;
				height: 100vh;
				align-items: center;
			}
			input[type=submit] {
				width: fit-content;
				margin-left:25%;
				margin-top:100px;
				background-color: navy;
				color: white;
				padding: 34px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				font-size:30px;
				cursor: pointer;
				}
				@media screen and (max-width: 450px)
				{
					input[type=submit] {
				width: 50%;
				margin-left:25%;
				margin-top:100px;
				background-color: green;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				height:40px;
				}
				}
			</style>

		<form action="process.php" method="POST">
		<input type="submit" value="PROCEED TO APPLY" name="Confirm">
		</form>
		<?php

		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		//echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				//echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>404 NOT VALIDATED</b>";
	//Process transaction as suspicious.
}

?>