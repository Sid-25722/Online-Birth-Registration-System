<?php
session_start();
	include("../../php-files/connection.php");
	include("../../php-files/Functions.php");

	$user_data = check_signin($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")

	{ 
		//child information posting
        $comp_num = random_comp_num(16);
		$c_name = $_POST['c_name'];
		$c_surname = $_POST['c_surname'];
		$c_id = $_POST['c_id'];
		$DOB = $_POST['DOB'];
		$birth_order = $_POST['birth_order'];
		$sex= $_POST['sex'];
        $nationality = $_POST['nationality'];
        $POB = $_POST['POB'];
        $H_num= $_POST['H_num'];

		if(!empty($c_name) && !empty($c_surname) && !empty($c_id) && !empty($DOB) && !empty($birth_order) && !empty($sex) && !empty($nationality ) && !empty($POB ) && !empty($H_num ))
		{
			//save to child_info table
			
			$query = "insert into child_information (comp_num, c_id, c_name,c_surname,DOB,birth_order,POB,sex,nationality,H_num) values ('$comp_num', '$c_id', '$c_name', '$c_surname','$DOB','$birth_order','$POB','$sex','$nationality','$H_num')";

			mysqli_query($con, $query);
		
		} else

		{
			echo "all fields are required";
		}
        

        //mother information posting

        $m_name = $_POST['m_name'];
        $m_surname = $_POST['m_surname'];
        $m_id = $_POST['m_id'];
        $m_occup = $_POST['m_occup'];
        $m_addr = $_POST['m_addr'];
        $m_nationality = $_POST['m_nationality'];
        $m_status = $_POST['m_status'];
        $c_id = $_POST['c_id'];
        

        if(!empty($m_name) && !empty($m_surname) && !empty($m_id) && !empty($m_occup) && !empty($m_addr) && !empty($m_nationality ) && !empty($m_status ) && !empty($c_id))
        {
            //save to mother_info table

            $query = "insert into mother_information (m_id, c_id, m_name,m_surname,m_occup,m_addr,m_status,m_nationality) values ('$m_id', '$c_id', '$m_name', '$m_surname','$m_occup','$m_addr','$m_status','$m_nationality')";

            mysqli_query($con, $query);
        
        } else

        {
            echo "all fields are required";
        }
          

            //father information posting

        $f_name = $_POST['f_name'];
        $f_surname = $_POST['f_surname'];
        $f_id = $_POST['f_id'];
        $f_occup = $_POST['f_occup'];
        $f_addr = $_POST['f_addr'];
        $f_nationality = $_POST['f_nationality'];
        $f_status = $_POST['f_status'];
        $c_id = $_POST['c_id'];
        

        if(!empty($f_name) && !empty($f_surname) && !empty($f_id) && !empty($f_occup) && !empty($f_addr) && !empty($f_nationality ) && !empty($f_status ) && !empty($c_id))
        {
            //save to father_info table

            $query = "insert into father_information (f_id, c_id, f_name,f_surname,f_occup,f_addr,f_status,f_nationality) values ('$f_id', '$c_id', '$f_name', '$f_surname','$f_occup','$f_addr','$f_status','$f_nationality')";

            mysqli_query($con, $query);
        
        } else

        {
            echo "all fields are required";
        }

	}

?>
