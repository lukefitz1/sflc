<?php
	/*
	From http://www.html-form-guide.com 
	This is the simplest emailer one can have in PHP.
	If this does not work, then the PHP email configuration is bad!
	*/
	$msg="";
	if(isset($_POST['submit']))
	{
	    /* ****Important!****
	    replace name@your-web-site.com below 
	    with an email address that belongs to 
	    the website where the script is uploaded.
	    For example, if you are uploading this script to
	    www.my-web-site.com, then an email like
	    form@my-web-site.com is good.
	    */

	    $fn1 = $_POST['firstname1'];
	    $ln1 = $_POST['lastname1'];
	    $ph1 = $_POST['phone1'];
	    $email1 = $_POST['email1'];
	    $amt = $_POST['amount'];


		$from_add = "admin@smokefreelowcountry.org"; 

		$to_add = "smokefreelowcountry@yahoo.com"; //<-- put your yahoo/gmail email address here

		$subject = "New Donation";
		$message = "Name: " . $fn1 . " " . $ln1 . "\r\n" .	
					"Phone: " . $ph1 . "\r\n" .
					"Email Address: " . $email1 . "\r\n" .
					"Amount: $" . $amt . "\r\n";

		$headers = "From: $from_add \r\n";
		$headers .= "Reply-To: $from_add \r\n";
		$headers .= "Return-Path: $from_add\r\n";
		$headers .= "X-Mailer: PHP \r\n";
		
		
		if(mail($to_add,$subject,$message,$headers)) 
		{
			$msg = "Mail sent OK";
			//echo ("First Name = " . $fn1 . " Last Name = " . $ln1);
			header("Location: http://smokefreelowcountry.org/sflc/donatepayment.html");
		} 
		else 
		{
	 	   $msg = "Error sending email!";
		}
	}
?>

<!DOCTYPE html>
<html lang-"en">
<head>
	<title>Join</title>

	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
   
	<link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/displayform.js"></script>
	<script src="js/paymentmessage.js"></script>
	<script src="js/formvalidate.js"></script>

	<meta name="viewport" content="width=device-width" />
</head>

<body>
	<!--<div class="container">-->
	<!--navbar-->
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="glyphicon glyphicon-arrow-down"></span>
					MENU
				</button>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<div class="container">	
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About SFLC <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="besmokefree.html">Why Be Smoke Free?</a></li>
									<li><a href="board.html">Board of Directors</a></li>
									<li><a href="media.html">Ads</a></li>
									<li><a href="meeting2017.html">Annual Meeting</a></li>
								</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">What We Do <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="helptoquit.html">Help to Quit</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="ordinances.html">Ordinances</a></li>
									<li><a href="sfrestaurants.html">Restaurants</a></li>
									<li><a href="sfhousing.html">Smoke Free Housing</a></li>
									<li><a href="links.html">More Information</a></li>
									<li><a href="localgov.html">Local Governments</a></li>
								</ul>
						</li>
						<li><a href="join.php">Join SFLC</a></li>
						<!--<li><a href="contact.html">Contact Us</a></li>-->
						<li class="navdonate"><a href="donate.php">Donations</a></li>
					</ul>
					<!--<form role="form">
						<div class="memberform">
							<button type="submit" class="btn btn-default">Subscribe!</button>
							<input type="email" class="form-control" id="email" placeholder="Enter Email">
						</div>
					</form>-->
					<a href="volunteer.php" class="volunteer">Want to Volunteer?</a>
				</div>	
			</div>
		</nav>
	</div><!--navbar-->

		<!--container-->
	<div class="container">
		<div class="jumbotron">
			<a href="index.html"><img src="img/logo.jpg" alt="logo" /></a>
		</div>

		<div class="col-lg-12">
			<h1>Interested in making a donation?</h1>
			<p>Fill out the form below to make your donation. Thank you for your support!</p>

		</div>
		
		<div class="col-lg-12">
			<form role="form" onsubmit="return formvalidate()" class="member" id="membersignup" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
				<div class="form-group inputwidth">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control formwidth" name="firstname1" id="fname1" placeholder="First Name" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control formwidth" name="lastname1" id="lname1" placeholder="Last Name"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="phone">Phone</label>
					<input type="text" class="form-control formwidth" name="phone1" id="ph1" placeholder="Phone" />
				</div>
				<div class="form-group inputwidth">
					<label for="email">Email</label>
					<input type="email" class="form-control formwidth" name="email1" id="email1" placeholder="Email Address"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="amount">Amount</label>
					<input type="text" class="form-control formwidth" name="amount" id="amt" placeholder="Amount"  required/>
				</div>
				<!--<div class="form-group inputwidth">
					<input type="radio" name="donationtype" value="paypal" id="paypalpayment" checked> Paypal 
					<input type="radio" name="donationtype" value="check" id="checkpayment"> Pay by Check
				</div> 

				<div id="paybypaypal">
					<p>Please click the Submit button to be taken to the next step</p>
				</div>
				<div id="paybycheck">
					<p>If you prefer to pay by check you may send it to:</p>
					<p>Smoke Free Lowcountry Coalition<br />
					PO Box 3174<br />
					Summerville, SC 29484-3174</p>
				</div>-->

				<div class="form-group">
					<input type='submit' name='submit' value='Next'>
				</div>

			</form>
		</div>

		<!--footer-->
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 foot">
				<p>For more information please contact us at <a href="mailto:smokefreelowcountry@yahoo.com">smokefreelowcountry@yahoo.com</a></p>
				<p>Smoke Free Lowcountry<br />
					P.O. Box 3174<br />
					Summerville, SC 29484-3174</p>

					<p class="desktopnum">Call or Text us at: 843-588-5087<br />
					Fax: 843-797-8638</p>
					<p class="mobilenum">Call or Text us at: <a href="tel:+8435885087">843-588-5087</a><br />
					Fax: 843-797-8638</p>
			</div>
		</div><!--footer end-->

	</div><!--container-->


</body>
</html>