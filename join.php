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

	    $membership = $_POST['membershiptype'];
	    $org = $_POST['organization'];
	    $fn1 = $_POST['firstname1'];
	    $ln1 = $_POST['lastname1'];
	    $add1 = $_POST['address1'];
	    $city1 = $_POST['city1'];
	    $st1 = $_POST['state1'];
	    $zip1 = $_POST['zip1'];
	    $ph1 = $_POST['phone1'];
	    $email1 = $_POST['email1'];

	    //optional 2nd person
	    $fn2 = $_POST['firstname2'];
	    $ln2 = $_POST['lastname2'];
	    $add2 = $_POST['address2'];
	    $city2 = $_POST['city2'];
	    $st2 = $_POST['state2'];
	    $zip2 = $_POST['zip2'];
	    $ph2 = $_POST['phone2'];
	    $email2 = $_POST['email2'];

	    //optional 3rd person
	    $fn3 = $_POST['firstname3'];
	    $ln3 = $_POST['lastname3'];
	    $add3 = $_POST['address3'];
	    $city3 = $_POST['city3'];
	    $st3 = $_POST['state3'];
	    $zip3 = $_POST['zip3'];
	    $ph3 = $_POST['phone3'];
	    $email3 = $_POST['email3'];

		$from_add = "admin@smokefreelowcountry.org"; 

		$to_add = "smokefreelowcountry@yahoo.com"; //<-- put your yahoo/gmail email address here

		$subject = "New Member Application";
		$message = "Membership Type: " . $membership . "\r\n" .
					"Organization: " . $org . "\r\n" .
					"Name: " . $fn1 . " " . $ln1 . "\r\n" .	
					"Address: " . $add1 . "\r\n" .
					"City: " . $city1 . "\r\n" .
					"State: " . $st1 . "\r\n" .
					"Zip Code: " . $zip1 . "\r\n" .
					"Phone: " . $ph1 . "\r\n" .
					"Email Address: " . $email1 . "\r\n";

		if (strlen($fn2) >= 1) {
			$message .= "\r\n Second Member \r\n\r\n" .
						"Name: " . $fn2 . " " . $ln2 . "\r\n" .
						"Address: " . $add2 . "\r\n" .
						"City: " . $city2 . "\r\n" .
						"State: " . $st2 . "\r\n" .
						"Zip Code: " . $zip2 . "\r\n" .
						"Phone: " . $ph2 . "\r\n" .
						"Email Address: " . $email2 . "\r\n";
		}
		
		if (strlen($fn3) >= 1) {
			$message .= "\r\n Third Member \r\n\r\n" .
						"Name: " . $fn3 . " " . $ln3 . "\r\n" .
						"Address: " . $add3 . "\r\n" .
						"City: " . $city3 . "\r\n" .
						"State: " . $st3 . "\r\n" .
						"Zip Code: " . $zip3 . "\r\n" .
						"Phone: " . $ph3 . "\r\n" .
						"Email Address: " . $email3 . "\r\n";
		}
		
		$headers = "From: $from_add \r\n";
		$headers .= "Reply-To: $from_add \r\n";
		$headers .= "Return-Path: $from_add\r\n";
		$headers .= "X-Mailer: PHP \r\n";
		
		
		if(mail($to_add,$subject,$message,$headers)) 
		{
			$msg = "Mail sent OK";
			//echo ("First Name = " . $fn1 . " Last Name = " . $ln1);
			header("Location: http://smokefreelowcountry.org/sflc/success.html");
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
			<h1>Become a member</h1>
			<p>Please complete the form below to become a member of the Smoke Free Lowcountry Coalition.  Upon completion of this form you will be taken to a page with payment options.  If you do not see the payment options your registration was not completed successfully.  Please contact us at smokefreelowcountry@yahoo.com if you have any problems or questions.</p>

			<p>The membership dues are as follows:<br />
			Individual - $10<br />
			Non-Profit Organization or School - $30<br />
			Small For-Profit Organization (1-25 employees) - $50<br />
			Large For-Profit Organization (26+ employees) - $100<br />
			Student K-12 - Free</p>
		</div>
		
		<div class="col-lg-12">
			<form role="form" onsubmit="return formvalidate()" class="member" id="membersignup" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>
				<div class="form-group inputwidth">
					<label for="membershiptype">Membership Type</label>
					<select class="form-control formwidth" name="membershiptype" id="membershiptype" required>
						<option value="0">Please Select</option>
						<option value="Individual ($10)">Individual ($10)</option>
						<option value="Non-Profit Organization or School ($30)">Non-Profit Organization or School ($30)</option>
						<option value="Small For-Profit Organization ($50)">Small For-Profit Organization ($50)</option>
						<option value="Large For-Proft Organization ($100)">Large For-Profit Organization ($100)</option>
						<option value="Student K-12 (Free)">Student K-12 (Free)</option>
					</select>
				</div>
				<div class="form-group inputwidth">
					<label for="organization labelwidth">Organization/Affiliation</label>
					<input type="text" class="form-control formwidth" name="organization" placeholder="Organization/Affiliation">
				</div>
				<div class="form-group inputwidth">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control formwidth" name="firstname1" id="fname1" placeholder="First Name" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control formwidth" name="lastname1" id="lname1" placeholder="Last Name"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="address">Street Address</label>
					<input type="text" class="form-control formwidth" name="address1" id="add1" placeholder="Address"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="city">City</label>
					<input type="text" class="form-control formwidth" name="city1" id="city1" placeholder="City"  required/>
				</div>
				<div class="form-group inputwidth">
					<label for="state">State (2 digit state code e.g. SC)</label>
					<input type="text" class="form-control formwidth" name="state1" id="st1" placeholder="State" maxlength="2" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="zip">Zip Code (5 digits e.g. 29407)</label>
					<input type="number" class="form-control formwidth" name="zip1" id="zip1" placeholder="Zip Code" required/>
				</div>
				<div class="form-group inputwidth">
					<label for="phone">Phone (10 digits, No special characters e.g. 8433642635)</label>
					<input type="number" class="form-control formwidth" name="phone1" id="ph1" placeholder="Phone" />
				</div>
				<div class="form-group inputwidth">
					<label for="email">Email</label>
					<input type="email" class="form-control formwidth" name="email1" id="email1" placeholder="Email Address"  required/>
				</div>

				<!--<div class="form-group">
					<label for="more">Need to add another person? (You may add up to 3) </label><br />
					<input type="checkbox" class="cb2" name="Yes" value="Yes"><label for="cb2" class="cblabel">Yes</label>
				</div>-->


				<!--This form is for adding a second person to a membership-->
				<!--
				<div class="second">
					<div class="form-group inputwidth">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control formwidth" name="firstname2" placeholder="First Name">
					</div>
					<div class="form-group inputwidth">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control formwidth" name="lastname2" placeholder="Last Name" />
					</div>
					<div class="form-group inputwidth">
						<label for="address">Street Address</label>
						<input type="text" class="form-control formwidth" name="address2" placeholder="Address" />
					</div>
					<div class="form-group inputwidth">
						<label for="city">City</label>
						<input type="text" class="form-control formwidth" name="city2" placeholder="City" />
					</div>
					<div class="form-group inputwidth">
						<label for="state">State</label>
						<input type="text" class="form-control formwidth" name="state2" placeholder="State" />
					</div>
					<div class="form-group inputwidth">
						<label for="zip">Zip Code</label>
						<input type="text" class="form-control formwidth" name="zip2" placeholder="Zip Code" />
					</div>
					<div class="form-group inputwidth">
						<label for="phone">Phone</label>
						<input type="text" class="form-control formwidth" name="phone2" placeholder="Phone" />
					</div>
					<div class="form-group inputwidth">
						<label for="email">Email</label>
						<input type="email" class="form-control formwidth" name="email2" placeholder="Email Address" />
					</div>


					<div class="form-group">
						<label for="more">Need to add another person? (You may add up to 3) </label><br />
						<input type="checkbox" class="cb3" name="Yes" value="Yes"><label for="checkbox" class="cblabel">Yes</label>
					</div>
				</div>
				-->


				<!--This form is for adding a third person to a membership-->
				<!--
				<div class="third">
					<div class="form-group inputwidth">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control formwidth" name="firstname3" placeholder="First Name">
					</div>
					<div class="form-group inputwidth">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control formwidth" name="lastname3" placeholder="Last Name" />
					</div>
					<div class="form-group inputwidth">
						<label for="address">Street Address</label>
						<input type="text" class="form-control formwidth" name="address3" placeholder="Address" />
					</div>
					<div class="form-group inputwidth">
						<label for="city">City</label>
						<input type="text" class="form-control formwidth" name="city3" placeholder="City" />
					</div>
					<div class="form-group inputwidth">
						<label for="state">State</label>
						<input type="text" class="form-control formwidth" name="state3" placeholder="State" />
					</div>
					<div class="form-group inputwidth">
						<label for="zip">Zip Code</label>
						<input type="text" class="form-control formwidth" name="zip3" placeholder="Zip Code" />
					</div>
					<div class="form-group inputwidth">
						<label for="phone">Phone</label>
						<input type="text" class="form-control formwidth" name="phone3" placeholder="Phone" />
					</div>
					<div class="form-group inputwidth">
						<label for="email">Email</label>
						<input type="email" class="form-control formwidth" name="email3" placeholder="Email Address" />
					</div>
				</div>
				-->

				<p>Don't forget to register to attend the SFLC annual meeting being held on Friday, May 6th, 2016 at MUSC!  A link to register can be found on the <a href="register.php">2016 Annual Meeting page.</a></p>

				<div class="form-group">
					<input type='submit' name='submit' value='Submit'>
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