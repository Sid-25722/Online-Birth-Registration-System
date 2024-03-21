<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Certificate Registration</title>
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<!-- <div class="container"> -->

		<!-- NAVIGATION BAR AND IT'S CONTAINER (HEADER) -->
		<div class="header">
            <h1><a href="../index.php">O<span class="left">B<span>CR</a></h1>

			<!-- NAV BAR -->
			<nav class="navigation">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="../help/help.php">Help</a></li>
					<li><a href="../about us/about_us.php">About Us</a></li>
					<li class="create_acc_button"><a href="../forms/user/signin.php">Log in</a></li>
					<li class="create_acc_button_2"><a href="../forms/user/signup.php">Create Account</a></li>
				</ul>
			</nav>

			<!-- RESPONSIVE HAMBURGER MENU -->
			<div class="hamburger">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</div>
        

		<!-- TITLE AND MAIN CONTENT -->
        <div id="contact_us_text">
			<h2>Contact Us</h2>	
		</div>

		<!-- CONTACT US CONTAINER -->
		<div class="contact_us_container" id="contact_us_cont">

			<!-- CONTACT US INFORMATION -->
			<div class="contact info">
				<img src="../images/icons8-customer-service-50.png" alt="contact-us-image" id="main-image">
				<h2>Get in touch!</h2>
				<div class="div">
					<img src="../images/building.png" alt="">
					<h3>Visit us:</h3>
					<p>Home Affairs & Justice Building Mhlambanyatsi<br> Usuthu Link Road Swaziland</p>
				</div>
				<div>
					<img src="../images/chat.png" alt="">
					<h3>Chat to us:</h3>
					<p>support@email.com</p>
				</div>
				<div>
					<img src="../images/phone-call.png" alt="">
					<h3>Call Us</h3>
					<p>Mon - Fri from 8am to 5pm</p>
				</div>
			</div>

			<!-- CONTACT US FORM -->
			<div class="contact form">
				<form action="#">
					<div>
						<label for="fname">First Name:</label><br>
						<input type="text" name="" id="fname">
					</div>
					<div>
						<label for="fname">Last Name:</label><br>
						<input type="text" name="" id="lname">
					</div>
					<div>
						<label for="email">Email:</label><br>
						<input type="email" name="" id="email">
					</div>
					<div>
						<label for="phone">Phone Number:</label><br>
						<input type="text" name="" id="phone">
					</div>
					<div>
						<label for="message">Message:</label><br>
						<textarea id="message" rows="8" cols="60" placeholder="Write your message here..."></textarea>
					</div>
					<div>
						<input type="submit" value="Send Message" onclick="openPopup()" class="button">
					</div>
					
				</form>
			</div>
		</div>

		<!-- SUCCESS POPUP FOR CONTACT US MESSAGE -->
		<div class="popup" id="popup">
			<img src="../images/vecteezy_tick-check-mark-icon-sign-symbol-design_10152436_700.png" alt="Image">
			<h3>Thank you!</h3>
			<p>Your message has been succesfully submitted!. Thank you for contacting us.</p>
			<button type="button" id="popup_button" onclick="closePopup()">Ok</button>
		</div>

		<!-- FOOTER -->
        <div class="footer" id="footer">
			&copy; Copyright 2023. All rights reserved.
		</div>

	<!-- SCRIPTS -->
	<script src="../scripts/popup.js"></script>

	

</body>
</html>