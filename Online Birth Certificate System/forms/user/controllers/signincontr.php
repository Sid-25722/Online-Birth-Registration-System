<?php
session_start();
	include("../../php-files/connection.php");
	include("../../php-files/Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		

		if(!empty($user_name) && !empty($user_password))
		{
			//read from database
			
			$query = "select * from acc_information where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['user_password'] === $user_password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../regform.php");
						die;

					}
				}
			}
			// echo "Invalid Password or user name";
			echo "<script>alert('Invalid Password or user name')</script>";
			
		}else
		{
			// echo "Invalid Password or user name";
			echo "<script>alert('Invalid Password or user name')</script>";
		}
	}
?>