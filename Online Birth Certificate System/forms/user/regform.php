<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Certificate Registration</title>
	<!-- <link rel="stylesheet" href="styleforms.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/regform.css">
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

			<div class="hamburger">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</div>

        <!------------------------------------------------------------- SIDEBAR MENU ------------------------------------------>
        <div class="sidebar">    
            <div id="menu">
                <div class="items">
                    <li><a href="#">Home</a></li>
                    <li><a href="../admin/controllers/view-record.php">My Applications</a></li>
                    <li><a href="../../index.php">Logout</a></li>
                </div>
            </div>
        </div>

    
        <!--------------------------------------------------------------- MAIN CONTENT ---------------------------------------->

        <!-- CHANGED DIV CLASS HEADER INTO ID HEADER TO ACCOMODATE THE NAVBAR -->
        <div class="main-content-regform">
            <div id="header">     
                <h1>Welcome</h1>
            <p>Register now by filling up this form</p>
            </div>
            <br>

            <div class="main-content-container">

                <form class="main-form" id="form_complete" method="POST" action='./controllers/regformcontr.php'>

                    <!--Particulars of child-->
                    <div class="form first">
                        <h1> PARTICULARS OF CHILD</h1>

                            <div class="fields">
                                <div class="input-box">
                                    <label for="name"><b>Name(s)</b></label>
                                    <input type="text" placeholder="Enter name(s)" name="c_name"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="surname"><b>Surname</b></label>
                                    <input type="text" placeholder="Enter surname" name="c_surname"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="sex"><b>Gender</b></label>
                                    <input type="text" placeholder="male/female" name="sex" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="POB"><b>POB</b></label>
                                    <input type="text" placeholder="Place of birth" name="POB"  required><br><br>
                                </div class="input-box">
                                <div class="input-box">
                                    <label for="clt_id"><b>Child id</b></label>
                                    <input type="text" placeholder="id of child" name="c_id"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="date of birth"><b>DOB</b></label>
                                    <input type="date" placeholder="date of birth" name="DOB"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="birth order of child"><b>Birthorder</b></label>
                                    <input type="text" placeholder="birth order of child" name="birth_order"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="nationality"><b>Nationality</b></label>
                                    <input type="text" placeholder="nationality" name="nationality"  required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="hospital_num"><b>H_num</b></label>
                                    <input type="text" placeholder="" name="H_num"  required><br><br>
                                </div>
                            </div>

                    </div>

                    <div class="form second">
                        <!--Particulars of mother-->
                        <h1> PARTICULARS OF MOTHER</h1>

                            <div class="fields">
                                <div class="input-box">
                                    <label for="id"><b>ID_NUMBER</b></label>
                                    <input type="text" placeholder="Enter Identity Number" name="m_id" id="PIN" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="child_id"><b>CHILD ID</b></label>
                                    <input type="text" placeholder="Enter id of child" name="c_id" id="name" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="name"><b>Name(s)</b></label>
                                    <input type="text" placeholder="Enter name(s)" name="m_name" id="name" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="maiden surname"><b>Surname</b></label>
                                    <input type="text" placeholder="Enter surname" name="m_surname" id="maiden surname" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="occupation"><b>occupation</b></label>
                                    <input type="text" placeholder="Enter occupation" name="m_occup" id="occupation" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="marital status"><b>marital status</b></label>
                                    <input type="text" placeholder="single/married" name="m_status" id="pob" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="address"><b>ADDRESS</b></label>
                                    <input type="text" placeholder="postal adress" name="m_addr" id="dob" required><br><br>
                                </div>
                                <div class="input-box">
                                    <label for="nationality"><b>Nationality</b></label>
                                    <input type="text" placeholder="nationality" name="m_nationality" id="place of origin" required><br><br>
                                </div>
                                <div>
                                    <label for="fil">Id Scan:</label>
                                    <input type="file" name="" id="">
                                </div>
                            </div>
                        
                    </div>
                    <!-- Particulars of father -->
                    <div class="form third">
                        <h1 id="fhead"> PARTICULARS OF FATHER</h1>
                            <div class="fields">
                                <!-- <div class="pair"> -->
                                    <div class="input-box">
                                        <label for="id"><b>ID_NUMBER</b></label>
                                        <input class="input" type="text" placeholder="Enter Identity Number" name="f_id" id="PIN" required><br><br>
                                    </div>
                                    <div class="input-box">
                                        <label for="child_id"><b>CHILD ID</b></label>
                                        <input class="input" type="text" placeholder="Enter id of child" name="c_id" id="name" required><br><br>
                                    </div>
                                    <div class="input-box">
                                        <label for="name"><b>NAME(s)</b></label>
                                        <input class="input" type="text" placeholder="Enter name(s)" name="f_name" id="name" required><br><br>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="pair"> -->
                                    <div class="input-box">
                                        <label for="maiden surname"><b>SURNAME</b></label>
                                        <input class="input" type="text" placeholder="Enter surname" name="f_surname" id="maiden surname" required><br><br>
                                    </div>
                                    <div class="input-box">
                                        <label for="occupation"><b>OCCUPATION</b></label>
                                        <input class="input" type="text" placeholder="Enter occupation" name="f_occup" id="occupation" required><br><br>
                                    </div>
                                
                                    <div class="input-box">
                                        <label for="marital status"><b>MARITAL STATUS</b></label>
                                        <input class="input" type="text" placeholder="single/married" name="f_status" id="pob" required><br><br>
                                    </div>
                                <!-- </div> -->
                                <!-- <div class="pair"> -->
                                    <div class="input-box">
                                        <label for="address"><b>ADDRESS</b></label>
                                        <input class="input" type="text" placeholder="postal adress" name="f_addr" id="dob" required><br><br>
                                    </div>
                                    <div class="input-box">
                                        <label for="nationality"><b>NATIONALITY</b></label>
                                        <input class="input" type="text" placeholder="nationality" name="f_nationality" id="place of origin" required><br><br>
                                    </div>
                                </div>
                            </div>

                    </div>


                    <div style="overflow:auto;">
                        <div style="float:right;padding-top:20px;padding-right:30px">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)"><a id="useridpage">Next</a></button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:20px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
    
                    </div>


                </form>
            </div>
        </div>
        <!------------------------------------------------------- DONE ---------------------------------------------------------------->

    <script src="../../scripts/regform.js">

    </script>
    </body>

</html>