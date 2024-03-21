<?php
session_start();
	include("../../php-files/connection.php");
	include("../../php-files/Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//employee login info posting
		$emp_name = $_POST['emp_name'];
		$emp_password = $_POST['emp_password'];
		

		if(!empty($emp_name) && !empty($emp_password))
		{
			//read from database
			
			$query = "select * from employee where emp_name = '$emp_name' limit 1";
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$emp_data = mysqli_fetch_assoc($result);

					if($emp_data['emp_password'] === $emp_password)
					{
						$_SESSION['emp_id'] = $emp_data['emp_id'];
						header("Location: ../employee.php");
						die;

					}
				}
			}
			echo "Invalid Password or user name";
			
		}else
		{
			echo "Invalid Password or user name";
		}
	}
?>
