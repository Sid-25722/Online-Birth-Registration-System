<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signin</title>
	<link rel="stylesheet" href="../../css/form_styles.css">
</head>

<body>

	<!-- NAVIGATION BAR HEADER -->
	<div class="header">
        <h1><a href="../../index.php">O<span class="left">B<span>CR</a></h1>
	</div>

	<!-- LOGIN CONTAINER -->
	<div class="login-wrapper">
		<div>	

			<!--LOGIN FORM  -->
			<form method="POST" id = "form" action="./controllers/signincontr.php">

				<h1>Login</h1>
				<!-- USERNAME INPUT -->
				<div class="input-box">
					<label for="">Username</label>
					<input type="text" name="user_name" id="" required>
				</div>
				<!-- PASSWORD INPUT -->
				<div class="input-box">
					<label for="">Password</label>
					<input type="password" name="user_password" id="" required>
				</div>
				<!-- REMEMBER ME TEXT -->
				<div class="remember-forgot">
					<label for=""><input type="checkbox" name="" id="">Remember me.</label>
					<a href="#">Forgot Password?</a>
				</div>
				<!-- LOGIN BUTTON -->
				<button type="submit" id="sub">Login</button>

			</form>

			<!-- SWITCH LOGIN TO REGISTER TEXT -->
			<div class="login-register">
				<p>Don't have an account? <a href="./signup.php" class="register-link">Register</a></p>
				<p class="admin-link">Login as <a href="../admin/employee_si.php">Admin!</a></p>
			</div>


		</div>
	</div>

</body>

</html>