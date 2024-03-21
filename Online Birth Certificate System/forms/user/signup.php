<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>
	<link rel="stylesheet" href="../../css/form_styles.css">
</head>

<body>
	<style type="text/css"> </style>

		<div class="header">
            <h1><a href="../../index.php">O<span class="left">B<span>CR</a></h1>
		</div>
	
	<!-- REGISTER CONTAINER -->
	<div class="register-wrapper">

		<div>
			<form action="./controllers/signupcontr.php" method="POST" id="form">
				<h1>Register</h1>

				<!---------------------- REGISTER COMPONENTS -------------------->
				<!-- NAME INPUT -->
				<div class="input-box">
					<label for="name">Name</label>
					<input type="text" name="u_name" id="u_name">
					<div class="error"></div>
				</div>
				<!-- removed required from inputs to replace with javascript -->

				<!-- USERNAME INPUT -->
				<div class="input-box">
					<label for="">Username</label>
					<input type="text" name="user_name" id="username">
					<div class="error"></div>
				</div>
				<!-- EMAIL INPUT -->
				<div class="input-box">
					<label for="">Email</label>
					<input type="text" name="user_email" id="email">
					<div class="error"></div>
				</div>
				<!-- PASSWORD INPUT -->
				<div class="input-box">
					<label for="">Password</label>
					<input type="password" name="" id="password">
					<div class="error"></div>
				</div>
				<!-- CONFIRM PASSWORD INPUT -->
				<div class="input-box">
					<label for="">Confirm Password</label>
					<input type="password" name="user_password" id="password2">
					<div class="error"></div>
				</div>

				<div class="remember-forgot">
					<label for=""><input type="checkbox" name="" id="">I agree to terms and conditions.</label>
				</div>

				<button type="submit" id="sub">Register</button>

			</form>

			<!-- SWITCH LOGIN TO REGISTER TEXT -->
			<div class="login-register">
				<p>Already have an account? <a href="./signin.php" class="login-link">Login</a></p>
				<p class="admin-link">Register as <a href="../admin/employee_su.php">Admin!</a></p>
			</div>


		</div>
	</div>

	<script src="../../scripts/validate_inputs.js"></script>

</body>

</html>