

<!DOCTYPE html>

<html>

<head>
	<title>Signup</title>
	<link rel="stylesheet" href="../../css/form_styles.css">
</head>
<body>
	<style type="text/css"> </style>
	
		<div class="header">
            <h1><a href="../../index.php">O<span class="left">B<span>CR</a></h1>
		</div>
	
		<!-- <div class="signup_form">
			<div  class="signup_t">
				<h1>Make administrator account</h1>
			</div>
		<form method="post">
			<label for="user_name"><b>USERNAME</b></label>
			<input type="text" name="emp_name"><br><br>

			<label for="pwd"><b>PASSWORD</b></label>
			<input type="password" name="emp_password"><br><br>
			
			<label for="user_email"><b>EMAIL</b></label>
			<input type="email" name="emp_email"><br><br>

			<label for="ID"><b>IDENTIFICATION</b></label>
			<input type="text" name="emp_id"><br><br>

			<input id="button" type="submit" name="login"><br><br>

			<p>Already have an admin account?</p>
			<a href="employee_si.php">Signin as administrator</a>


		</form>
	</div> -->

	
	<!-- REGISTER CONTAINER -->
	<div class="register-wrapper">

		<div>
			<form action="./controllers/employee_su_controller.php" method="POST" id="form">
				<h1>Register</h1>

				<!---------------------- REGISTER COMPONENTS -------------------->
				<!-- NAME INPUT -->
				<div class="input-box">
					<label for="user_name"><b>USERNAME</b></label>
					<input type="text" name="emp_name">
					<div class="error"></div>
				</div>
				<!-- removed required from inputs to replace with javascript -->

				<!-- USERNAME INPUT -->
				<div class="input-box">
					<label for="pwd"><b>PASSWORD</b></label>
					<input type="password" name="emp_password">
					<div class="error">	
				</div>

				</div>
				<!-- EMAIL INPUT -->
				<div class="input-box">
					<label for="user_email"><b>EMAIL</b></label>
					<input type="email" name="emp_email">
					<div class="error"></div>
				</div>
				<!-- PASSWORD INPUT -->
				<div class="input-box">
					<label for="ID"><b>IDENTIFICATION</b></label>
					<input type="text" name="emp_id">
					<div class="error"></div>
				</div>
	

				<div class="remember-forgot">
					<label for=""><input type="checkbox" name="" id="">I agree to terms and conditions.</label>
				</div>

				<button type="submit" id="sub">Register</button>

			</form>

			<!-- SWITCH LOGIN TO REGISTER TEXT -->
			<div class="login-register">
				<p>Already have an admin account? <a href="./employee_si.php" class="login-link">Login</a></p>
			</div>

		</div>
	</div>


</body>

</html>