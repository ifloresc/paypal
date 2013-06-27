<?php
require_once('../PPBootStrap.php');
$logger = new PPLoggingManager('GetRecurringPaymentsProfileDetails');

$getRPPDetailsReqest = new GetRecurringPaymentsProfileDetailsRequestType();
$getRPPDetailsReqest->ProfileID = $_REQUEST['profileID'];


$getRPPDetailsReq = new GetRecurringPaymentsProfileDetailsReq();
$getRPPDetailsReq->GetRecurringPaymentsProfileDetailsRequest = $getRPPDetailsReqest;

$paypalService = new PayPalAPIInterfaceServiceService();
try {
	/* wrap API method calls on the service object with a try catch */
	$getRPPDetailsResponse = $paypalService->GetRecurringPaymentsProfileDetails($getRPPDetailsReq);
} catch (Exception $ex) {
	include_once("../Error.php");
	exit;
}

if(isset($getRPPDetailsResponse)) {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$getRPPDetailsResponse->Ack</div> </td></tr>";
	echo "<tr><td>ProfileID :</td><td><div id='ProfileID'>". $getRPPDetailsResponse->GetRecurringPaymentsProfileDetailsResponseDetails->ProfileID ."</div> </td></tr>";
	echo "</table>";

	echo "<pre>";
	print_r($getRPPDetailsResponse);
	echo "</pre>";
}
require_once '../Response.php';
