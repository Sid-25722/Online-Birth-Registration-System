<?php 
    $con = mysqli_connect("localhost", "root", "", "certificate_registration");
    if($con -> connect_error){
        die("Connection failed:". $con->connect_error);
    }

    if(isset($_GET['id']))
        $id = $_GET['id'];
        //$id = 105811756;
        $sql = "SELECT * from child_information where c_id=?";
        if($stmt=$con->prepare($sql)){
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row=$result->fetch_object();
        }
    else {
        echo "Please check details and try again.";
    }

    $current_id = 0;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables with database</title>
    <style>
        div textarea {
            display: block;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        button {
            padding: 8px 30px;
            background-color: rgb(25, 191, 114);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
        }
        button:hover {
            color: black;
        }
      
    </style>
</head>
<body>
    <table>   
        <h2>CHILD INFORMATION</h2>    
           
            <?php           

                if($result){
                   
                    $current_id = $row -> comp_num;

                    echo "<tr><td> <b>Reference:</b> </td> <td>".$row -> comp_num."</td>";
                    echo "<tr><td> ID: </td> <td>".$row -> c_id."</td>";
                    echo "<tr><td> First Name: </td> <td>".$row -> c_name."</td>";
                    echo "<tr><td> Last Name: </td> <td>".$row -> c_surname."</td>";
                    echo "<tr><td> Date of Birth: </td> <td>".$row -> DOB."</td>";
                    echo "<tr><td> Postal Address: </td> <td>".$row -> POB."</td>";
                    echo "<tr><td> Gender: </td> <td>".$row -> sex."</td>";
                    echo "<tr><td> Nationality: </td> <td>".$row -> nationality."</td>";
                    echo "<tr><td> House Number: </td> <td>".$row -> H_num."</td>";
                    echo "<tr><td> Birth Order: </td> <td>".$row -> Birth_order."</td>";
                   
                }
                else {
                    echo "0 results";
                }
               
                ?>
    </table>

    <table>   
        <h2>MOTHER INFORMATION</h2>    
           
            <?php

                $con = mysqli_connect("localhost", "root", "", "certificate_registration");
                if($con -> connect_error){
                    die("Connection failed:". $con->connect_error);
                }

                if(isset($_GET['id']))
                    $id = $_GET['id'];
                    //$id = 105811756;
                    $sql = "SELECT * from mother_information where c_id=?";
                    if($stmt=$con->prepare($sql)){
                        $stmt->bind_param('i', $id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row=$result->fetch_object();
                    }
                else {
                    echo "Please check details and try again.";
                }

                if($result){
                    //$row = $result -> fetch_assoc();
                    echo "<tr><td> ID: </td> <td>".$row -> m_id ."</td>";
                    echo "<tr><td> Child ID: </td> <td>".$row -> c_id."</td>";
                    echo "<tr><td> First Name: </td> <td>".$row -> m_name."</td>";
                    echo "<tr><td> Last Name: </td> <td>".$row -> m_surname."</td>";
                    echo "<tr><td> Postal Address: </td> <td>".$row -> m_addr."</td>";
                    echo "<tr><td> Occupation: </td> <td>".$row -> m_occup."</td>";
                    echo "<tr><td> Nationality: </td> <td>".$row -> m_nationality."</td>";
                    echo "<tr><td> Status: </td> <td>".$row -> m_status."</td>";
                   
                }
                else {
                    echo "0 results";
                }
               
                ?>
    </table>

    <table>   
        <h2>FATHER INFORMATION</h2>    
           
            <?php
                $con = mysqli_connect("localhost", "root", "", "certificate_registration");
                if($con -> connect_error){
                    die("Connection failed:". $con->connect_error);
                }

                if(isset($_GET['id']))
                    $id = $_GET['id'];
                    //$id = 105811756;
                    $sql = "SELECT * from father_information where c_id=?";
                    if($stmt=$con->prepare($sql)){
                        $stmt->bind_param('i', $id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row=$result->fetch_object();
                    }
                else {
                    echo "Please check details and try again.";
                }

                if($result){
                    //$row = $result -> fetch_assoc();
                    echo "<tr><td> ID: </td> <td>".$row -> f_id."</td>";
                    echo "<tr><td> Child ID: </td> <td>".$row -> c_id."</td>";
                    echo "<tr><td> First Name: </td> <td>".$row -> f_name."</td>";
                    echo "<tr><td> Last Name: </td> <td>".$row -> f_surname."</td>";
                    echo "<tr><td> Postal Address: </td> <td>".$row -> f_addr."</td>";
                    echo "<tr><td> Occupation: </td> <td>".$row -> f_occup."</td>";
                    echo "<tr><td> Nationality: </td> <td>".$row -> f_nationality."</td>";
                    echo "<tr><td> Status: </td> <td>".$row -> f_status."</td>";
                    echo "<br>";
                    echo $current_id;
                    
                   
                }
                else {
                    echo "0 results";
                }
                $con -> close();
                
                ?>
    </table>

    <div>
        <button><a href="./approve.php?id=<?php echo $current_id ?>">Approve</a></button>
        <button><a href="./reject.php?id=<?php echo $current_id ?>">Reject</a></button>
    </div>
                
</body>
</html>
