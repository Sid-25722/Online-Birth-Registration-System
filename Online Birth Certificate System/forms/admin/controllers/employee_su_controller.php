<?php
session_start();
	include("../../php-files/connection.php");
	include("../../php-files/Functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//employee info posting
		$emp_name = $_POST['emp_name'];
		$emp_password = $_POST['emp_password'];
		$emp_id = $_POST['emp_id'];;
		$emp_email = $_POST['emp_email'];
		


		if(!empty($emp_name) && !empty($emp_password) && !empty($emp_id) && !empty($emp_email))
		{
			//save to employee table
			
			$query = "insert into employee (emp_id, emp_name, emp_password, emp_email) values ('$emp_id', '$emp_name', '$emp_password','$emp_email')";

			mysqli_query($con, $query);

			//redirect to employee login
			header("Location: ../employee_si.php");
			die;

		}else
		{
			echo "pleas enter valid information";
		}
	}
?>