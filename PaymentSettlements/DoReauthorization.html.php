<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Merchant SDK - DoReauthorization</title>
<link rel="stylesheet" href="../Common/sdk.css"/>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h3>DoReauthorization</h3>
			<div id="apidetails">Used to reauthorize transaction for a different
				amount</div>
		</div>
		<form method="POST" action="DoReauthorization.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">Authorization ID</div>
					<div class="param_value">
						<input type="text" name="authID" value="" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Amount</div>
					<div class="param_value">
						<input type="text" name="amt" value="1.00" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency Code</div>
					<div class="param_value">
						<input type="text" name="currencyCode" value="USD" size="50"
							maxlength="260" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" name="DoReauthorizationBtn"
						value="DoReauthorization" /> <br />
				</div>
				<a href="../index.php">Home</a>
			</div>
		</form>
		<div id="relatedcalls">
			See also
			<ul>
				<li><a href="DoCapture.html.php">DoCapture</a>
				</li>
				<li><a href="DoVoid.html.php">DoVoid</a>
				</li>
				<li><a href="Refund.html.php">Refund</a>
				</li>
				<li><a href="DoReauthorization.html.php">DoReauthorization</a>
				</li>
				<li><a href="DoAuthorization.html.php">DoAuthorization</a></li>

				<li><a href="ReverseTransaction.html.php">ReverseTransaction</a>
				</li>
				<li><a href="DoNonReferencedCredit.html.php">DoNonReferencedCredit</a>
				</li>
				<li><a href="ManagePendingTransactionStatus.html.php">ManagePendingTransactionStatus</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
