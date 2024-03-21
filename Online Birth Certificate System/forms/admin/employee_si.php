
<!DOCTYPE html>

<html>

<head>
	<title>signin</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../../css/form_styles.css">
</head>
<body>
	<style type="text/css"> </style>

		<div class="header">
			<h1><a href="../../index.php">O<span class="left">B<span>CR</a></h1>
		</div>

			<div class="login-wrapper">
		<div>	

			<!--LOGIN FORM  -->
			<form method="POST" id = "form" action="./controllers/employee_si_controller.php">

				<h1>Login</h1>
				<!-- USERNAME INPUT -->
				<div class="input-box">
					<label for="user_name"><b>USERNAME</b></label>
					<input type="text" name="emp_name">
				</div>
				<!-- PASSWORD INPUT -->
				<div class="input-box">
					<label for="pwd"><b>PASSWORD</b></label>
					<input type="password" name="emp_password"><br><br>
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
				<p>Don't have an admin account? <a href="./employee_su.php" class="register-link">Register</a></p>
			</div>

		</div>
	</div>

	</div>
</body>

</html>