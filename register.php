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
	    $email1 = $_POST['email1'];
	    $ph1 = $_POST['phone1'];
	    $add1 = $_POST['address1'];
	    $city1 = $_POST['city1'];
	    $st1 = $_POST['state1'];
	    $zip1 = $_POST['zip1'];
	    $member = $_POST['member'];
	    $continuinged = $_POST['continuinged'];
	    $license = $_POST['license'];

	    if ($member == 'yes') {
	    	$membercapital = 'Yes';

	    	$paymentoption = $_POST['paynow'];
	    	
	    	if ($paymentoption == 'now') {
	    		$paymentchoice = 'Paid online';
	    	} else {
				$paymentchoice = 'Will pay at the meeting';
	    	}

	    } elseif ($member == 'no') {
	    	$membercapital = 'No';

	    	$paymentoption = $_POST['register'];

	    	if ($paymentoption == 'now') {
	    		$paymentchoice = 'Registered online';
	    	} else {
	    		$paymentchoice = 'Will register at the meeting';
	    	}
	    }

		$from_add = "admin@smokefreelowcountry.org"; 
		$to_add = "smokefreelowcountry@yahoo.com"; //<-- put your yahoo/gmail email address here

		$subject = "Annual Meeting Registration";
		$message = 	"Name: " . $fn1 . " " . $ln1 . "\r\n" .	
					"Phone: " . $ph1 . "\r\n" .
					"Email Address: " . $email1 . "\r\n" .
					"Organization: " . $org . "\r\n" .
					"Address: " . $add1 . "\r\n" .
					"City: " . $city1 . "\r\n" .
					"State: " . $st1 . "\r\n" .
					"Zip Code: " . $zip1 . "\r\n" .
					"Interested in continuing ed credits? " . $continuinged . "\r\n" . 
					"License/Discipline: " . $license . "\r\n" . 
					"Member? " . $membercapital . "\r\n" . 
					"Payment option: " . $paymentchoice . "\r\n";

		
		$headers = "From: $from_add \r\n";
		$headers .= "Reply-To: $from_add \r\n";
		$headers .= "Return-Path: $from_add\r\n";
		$headers .= "X-Mailer: PHP \r\n";
		
		
		if(mail($to_add,$subject,$message,$headers)) 
		{
			$msg = "Mail sent OK";

			if ($member == 'yes') {   	
		    	if ($paymentoption == 'now') {
		    		header("Location: http://smokefreelowcountry.org/sflc/registerpayment.html");
		    	} else {
					header("Location: http://smokefreelowcountry.org/sflc/registersuccess.html");
		    	}

		    } elseif ($member == 'no') {
		    	if ($paymentoption == 'now') {
		    		header("Location: http://smokefreelowcountry.org/sflc/join.php");
		    	} else {
		    		header("Location: http://smokefreelowcountry.org/sflc/registersuccess.html");
		    	}
		    }

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
	<script src="js/registervalidate.js"></script>
	<script src="js/registerform.js"></script>

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
			<h1>2017 Smoke Free Lowcountry Coalition meeting registration</h1>
		</div>
		
		<div class="col-lg-12">
			<form role="form" onsubmit="return registervalidate()" class="meeting" id="meetingregister" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
				<div class="form-group inputwidth">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control formwidth" name="firstname1" id="fname1" placeholder="First Name" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control formwidth" name="lastname1" id="lname1" placeholder="Last Name"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="email">Email</label>
					<input type="email" class="form-control formwidth" name="email1" id="email1" placeholder="Email Address"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="phone">Phone (10 digits, No special characters e.g. 8433642635)</label>
					<input type="number" class="form-control formwidth" name="phone1" id="ph1" placeholder="Phone" />
				</div>
				<div class="form-group inputwidth">
					<label for="organization labelwidth">Organization/Affiliation</label>
					<input type="text" class="form-control formwidth" name="organization" placeholder="Organization/Affiliation">
				</div>
				<div class="form-group inputwidth">
					<label for="address">Street Address</label>
					<input type="text" class="form-control formwidth" name="address" id=""placeholder="Address" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="city">City</label>
					<input type="text" class="form-control formwidth" name="city" placeholder="City" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="state">State</label>
					<input type="text" class="form-control formwidth" name="state" placeholder="State" maxlength="2" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="zip">Zip Code</label>
					<input type="text" class="form-control formwidth" name="zip" placeholder="Zip Code" required/>
				</div>
				<div class="form-group inputwidth" name="continuinged">
					<label for="continuinged labelwidth">Would you be interested in potentially earning continuing education (CE) credits for this meeting, IF they were made available?</label>
					<input type="radio" name="continuinged" value="yes"/> Yes<br />
					<input type="radio" name="continuinged" value="no"/> No<br />
					<input type="radio" name="continuinged" value="na"/> N/A<br />
					<h4 class="radioerror4">Please select an option</h4>
				</div>
				<div class="form-group inputwidth license" name="license">
					<label for="organization labelwidth">What is your license and/or discipline?</label>
					<input type="text" class="form-control formwidth" name="license" placeholder="License/Discipline">
				</div>
				<div class="form-group inputwidth member" name="member">
					<label for="member">Are you a member of the SmokeFree Low country Coalition?</label><br />
					<input type="radio" name="member" value="yes"/> Yes<br />
					<input type="radio" name="member" value="no"/> No
					<h4 class="radioerror">Please select an option</h4>
				</div>
				<div class="form-group inputwidth paynow" name="paynow">
					<label for="paynow">Would you like to pay your annual dues now, or at the meeting?</label><br />
					<input type="radio" name="paynow" value="now"/> Now<br />
					<input type="radio" name="paynow" value="later"/> At the meeting<br />
					<input type="radio" name="paynow" value="na"/> NA - Already paid
					<h4 class="radioerror2">Please select an option</h4>
				</div>
				<div class="form-group register" name="register">
					<label for="register">To attend this meeting, you must be a member.  Would you like to join SFLC now or join at the meeting? Dues are $10 for an individual membership.</label><br />
					<input type="radio" name="register" value="now"/> Now<br />
					<input type="radio" name="register" value="later"/> At the meeting
					<h4 class="radioerror3">Please select an option</h4>
				</div>

				<div class="form-group">
					<input type='submit' name='submit' value='Submit'>
				</div>

				<div>
					<h3>We look forward to seeing you at the 2017 annual member's meeting!</h3>
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