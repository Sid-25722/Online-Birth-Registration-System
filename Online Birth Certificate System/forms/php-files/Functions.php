<?php

function check_signin($con)
{
	if(isset($_SESSION['user_id']))
	{
		$user_id = $_SESSION['user_id'];
		$query = "select * from acc_information where user_id = $user_id limit 1";
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;

	} 
	#REDIRECT TO LOGIN
	header("location: signin.php");
	die;
}

function check_empsignin($con)
{
	if(isset($_SESSION['emp_id']))
	{
		$emp_id = $_SESSION['emp_id'];
		$query = "select * from employee where emp_id = $emp_id limit 1";
		// removed limit 1 after emp_id
		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)

			$emp_data = mysqli_fetch_assoc($result);
			return $emp_data;

	} 
	/*
	#REDIRECT TO LOGIN
	header("location: employee_si.php");*/
	die;
}

function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i = 0; $i < $len; $i++)
	{
		$text .=rand(0,9);
	}

	return $text;
}

// function random_comp_num($length)
// {
// 	$text = "";
// 	if($length < 15)
// 	{
// 		$length = 15;
// 	}

// 	//$len = rand(14,$length);

// 	for ($i = 0; $i < $len; $i++)
// 	{
// 		$text .=rand(0,20);
// 	}

// 	return $text;
// }

function random_comp_num(){
	$first_three_digits = 105;
  	$last_six_digits = random_int(100000, 999999);
  	$random_number = $first_three_digits . $last_six_digits ;
	return $random_number;
}