<?php
session_start();
	include("../../php-files/connection.php");
	include("../../php-files/Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_id = random_num(10);
		// $user_phone = $_POST['user_phone'];
		$user_email = $_POST['user_email'];
		// $user_reason = $_POST['user_reason'];


		if(!empty($user_name) && !empty($user_password))
		{
			//save to database
			
			$query = "insert into acc_information (user_id, user_name, user_password, user_email) values ('$user_id', '$user_name', '$user_password', '$user_email')";

			mysqli_query($con, $query);

			//redirect to login
			header("Location: ../signin.php");
			die;

		}else
		{
			echo "pleas enter valid information";
		}
	}
?>