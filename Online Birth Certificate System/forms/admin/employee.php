<?php

session_start();
	include("../php-files/connection.php");
	include("../php-files/Functions.php");

	
	$emp_data = check_empsignin($con);

	$query = "select * from child_information";
	$result = mysqli_query($con, $query);

	$query2 = "select status_ from child_information where status_='Waiting'";
	$result2 = mysqli_query($con, $query2);

	$query3 = "select status_ from child_information where status_='Approved'";
	$result3 = mysqli_query($con, $query3);

	$query4 = "select status_ from child_information where status_='Rejected'";
	$result4 = mysqli_query($con, $query4);

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Administrator</title>
		<link rel="stylesheet" href="styleforms.css">
		<link rel="stylesheet" href="../../css/style.css">
		<style>
			#first {
				background-color: rgb(25, 191, 114);
				color: white;
				text-transform: uppercase;
			}
			table {
				margin: 0 auto;
				font-family: 'Roboto', sans-serif;
				/* border: solid 1px black; */
				border-collapse: collapse;
				padding: 0;
				border-spacing: 0;
				border-radius: 12px 12px 0 0;
				overflow: scroll;
				box-shadow: 0 2px 5px rgb(32, 32, 32, 0.3);


				width: 80%;
			}
			#first, td {
				padding: 12px 15px;
			}
			table td, th {
				/* border: solid 1px black; */
				text-align: center;
				
			}
			th {
				background: gray;
			}
			td {
				font-family: 'Open Sans', sans-serif;
			}
			tr:nth-child(odd){
				background-color: #ddd;
			}
			body {
				background: #f4f4bf;
				display: grid;
				height: 100vh;
				background-color: white;

				grid-template-columns: 300px 1fr;
				grid-template-rows: 60px 1fr;

				grid-template-areas: 
				"header header"
				"side main"
				;
			}
			.header {
				grid-area: header;
				justify-content: space-between;
				width: 100%;
			}

			.sidebar {
				grid-area: side;
				background: rgb(25, 191, 114);
				display: flex;
				justify-content: center;
			}
			.container {

				grid-area: main;
				padding: 30px;
				
			}
			.items {
				padding-top: 20px;
			}
			.items li{
				list-style: none;
				padding: 10px 20px;
			}
			.items li a {
				color: white;
				text-decoration: none;
			}

			.container-1 {
				display: grid;
				grid-template-rows: 1fr 2fr 4fr;
				padding: 20px;
			}
			/* .container-1 .main_1, .main_3 {
				border: solid 1px black;
			}
			 */
			 
			.main_1, .main_2, .main_3 {
				background-color: whitesmoke;
				margin-top: 15px;
				padding: 20px;
				border-radius: 10px;
				box-shadow: -5px -15px 10px -15px rgba(0, 0, 0, .2);
			}
			.main_1 {
				padding: 20px;
				display: flex;
				align-items: center;
			}

			.main_2 {
				display: flex;
				
			}
			.main_2 div {
				display: flex;
				justify-content: center;
				align-items: center;

				width: 100%;
				padding: 0 15px;
				border-radius: 15px;
				margin: 0 20px;
				border: none;
				margin: 0 10px;

				cursor: pointer;

			
	
				
			}
			.main_2 .numb_regs {
				background-color: gray;
				display: flex;
				flex-direction: column;
	
			}
			.main_2 .app-regs {
				background-color: lime;
				display: flex;
				flex-direction: column;
			}
			.main_2 .rej-regs {
				background-color: red;
				display: flex;
				flex-direction: column;

			}
			.main_2 .pending {
				background-color: yellow;
				display: flex;
				flex-direction: column;
			}
		
			.main_3 {
				padding: 20px;
				text-align: center;
			}
			.main_3 h3 {
				font-size: 1.5em;
				margin-bottom: 20px;
			}
			.hamburger-1 {
				
			}
			.hamburger-1 .bars {

				height: 2px;
				width: 27px;
				background-color: black;
				margin: 5px 0;
				transition: all 0.3s ease-in-out;

			}
			.card_text {
				font-size: 1.1em;
			}
			.card_stats {
				font-size: 2em;

			}
			#view-button a {
				text-decoration: none;
				background-color: rgb(25, 191, 114);
				padding: 8px 15px;
				border-radius: 5px;
				color: white;

			}
			#view-button a:hover {
				color: black;
			}
			#status-text {
				/* color: red; */
			}

			@media screen and (max-width: 1200px){
				.sidebar {
					display: none;
				}
				body {
					grid-template-columns: 1fr;
				}
				.container-1 {
					width: 100%;
					/* display: flex;
					justify-content: center;
					align-items: center; */
					/* margin: 0 auto; */
				}
				.main_2 {
					flex-wrap: wrap;
					justify-content: center;

					display: grid;
					grid-template-rows: 1fr 1fr;
					grid-template-columns: 1fr 1fr;
					text-align: center;
					gap: 1em;
					place-items: center;
				
				}
				.main_2 div {
					width: 60%;
					/* height: 200px; */
					/* margin: 10px 0; */
					padding: 20px 10px;
					min-width: 350px;
				}
				
			}

			
			
		</style>
	</head>

	<body>

		 <!------------------------------------------------------- NAVIGATION BAR ------------------------------------------------->
		 <div class="header">
			<h1><a href="../../index.php">O<span class="left">B<span>CR</a></h1>
			<nav class="navigation">
				<ul>
					<li class="create_acc_button"><a href="../../index.php">Log out</a></li>
				</ul>
			</nav>

			
		</div>

        <!------------------------------------------------------------- SIDEBAR MENU ------------------------------------------>
        <div class="sidebar">    
            <div id="menu">
                <div class="items">
                    <li><a href="#">Home</a></li>
                    <li><a href="../admin/employee_si.php">Logout</a></li>
                </div>
            </div>
        </div>




    
        <!--------------------------------------------------------------- MAIN CONTENT ---------------------------------------->

		<div class="container-1">

			<div class="welcome main_1">
					<div class="welcome-text">
						<h1>Welcome <?php echo $emp_data['emp_name']; ?></h1>
						<!-- <p>Please note all <a href>admin privilages</a>!</p> -->
						<p>This is the admin page. Make sure to double check every action!</p>
					</div>
			</div>

			<div class="main_2">
	
				<!-- Number of registrations -->
				<div class="numb_regs">
					<div class="card_text">Number of registrations: </div>
					<div class="card_stats">
						<?php 
							$number_of_rows = 0;
							while($row = mysqli_fetch_assoc($result)){
								$number_of_rows = $number_of_rows + 1;
							}
							echo $number_of_rows;
							
						?>
					</div>
					
				</div>
				<div class="app-regs">
					<div class="card_text">Approved Registrations: </div>
					<div class="card_stats">
						<?php 
							$number_of_rows = 0;
							while($row = mysqli_fetch_assoc($result3)){
								$number_of_rows = $number_of_rows + 1;
							}
							echo $number_of_rows;
							
						?>
					</div>
				</div>
				<div class="rej-regs">
					<div class="card_text">Rejected Registrations: </div>
					<div class="card_stats">
						<?php 
							$number_of_rows = 0;
							while($row = mysqli_fetch_assoc($result4)){
								$number_of_rows = $number_of_rows + 1;
							}
							echo $number_of_rows;
							
						?>
					</div>
				</div>
				<div class="pending">
					<div class="card_text">Pending Registrations:</div> 
					<div class="card_stats">
						<?php 
							$number_of_rows = 0;
							while($row = mysqli_fetch_assoc($result2)){
								$number_of_rows = $number_of_rows + 1;
							}
							echo $number_of_rows;
							
						?>
					</div>
				</div>
			</div>
			<div class="main_3">
				<div class="registrations">
					<h3>Registrations: </h3>
					<table>
						<tr id="first">
							<td>Reference</td>
							<td>Child Id</td>
							<td>Child Name</td>
							<td>Child Gender</td>
							<td>DOB</td>
							<!-- Add hyperlink to the certificate -->
							<td>View Registration</td>
							<td>Status</td>
						</tr>
						<tr>
							<?php 
								$sql = "SELECT * 
										FROM child_information
										INNER JOIN mother_information ON child_information.c_id = mother_information.c_id
										INNER JOIN father_information ON mother_information.c_id = father_information.c_id;
										";
								$table = mysqli_query($con, $sql);
								while($row = mysqli_fetch_array($table)){ ?>
									<tr>
										<td><?php echo $row['comp_num']?></td>
										<td><?php echo $row['c_id']?></td>
										<td><?php echo $row['c_name']?></td>
										<td><?php echo $row['sex']?></td>
										<td><?php echo $row['DOB']?></td>
										<td id="view-button"><a href="./controllers/view-record.php?id=<?php echo $row['c_id']?>">View</a></td>
										<td id="status-text" class="status_text"><?php echo $row['status_']?></td>
										
										<!-- echo "<tr><td>".$row['comp_num'];
										echo "</td><td>".$row['c_id'];
										echo "</td><td>".$row['c_name'];
										echo "</td><td>".$row['sex'];
										echo "</td><td>".$row['DOB'];
										echo "</td><td><a href='../user/mytesting.php'>View...</a>";
										echo "</td><td>".$row['status_'];
										echo  "</td></tr>"; -->
									</tr>
								<?php } ?>
						
							
						</tr>
					</table>
					<!-- Produce table with header: reference, child_id, child_name, child gender, child_DOB -->
				</div>
			</div>
		</div>
		<!-- number of applications
		View Applications and their references
		Approval (if possible)
		Show approval to user if possible status
	
	-->

	
	</body>

</html>




<!----------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------ADDITIONS ---------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------->
<!-- 
	1. FIX VIEW BUTTON TO BE A HYPERLINK THAT POINTS TO THE COMPLETED FORM, I MADE THE OTHER DAY. --DONE :)
	2. WORK ON THE APPROVE AND OR REJECT STATUS. ADD COMMENTS IN THE APPROVE BY THE ADMIN.        --DONE :)
	3. WORK ON THE PRIMARY KEY ISSUE ---- DONE------------ AND SOLVED M.S.L................       --DONE :)
	
 -->